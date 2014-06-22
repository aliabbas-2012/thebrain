<?php

/**
 * This is the model class for table "bsp_category".
 *
 * The followings are the available columns in table 'bsp_category':
 * @property integer $id
 * @property string $name
 * @property string $name_de
 * @property string $parent_name
 * @property integer $parent_id
 * @property integer $level
 * @property string $num_post
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspCategory extends DTActiveRecord {

    public $slug,$_trans_name;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_category';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name,name_de,create_time, create_user_id, update_time, update_user_id', 'required'),
            array('parent_id, level', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 45),
            array('parent_name', 'length', 'max' => 225),
            array('num_post', 'length', 'max' => 30),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('slug', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, parent_name, parent_id, level, num_post, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * inser level and cateogory
     */
    public function beforeValidate() {
        if (!empty($this->parent_id)) {
            $category = BspCategory::model()->find("id =" . $this->parent_id);
            $this->level = $category->level + 1;
            $this->parent_name = $category->name;
        } else {
            $this->level = 1;
            $this->parent_id = 0;
            $this->parent_name = "Root";
        }
        return parent::beforeValidate();
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'parent' => array(self::BELONGS_TO, 'BspCategory', 'parent_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'English Name',
            'name_de' => 'German Name',
            'parent_name' => 'Parent Name',
            'parent_id' => 'Parent',
            'level' => 'Level',
            'num_post' => 'total post',
            'create_time' => 'Create Time',
            'create_user_id' => 'Create User',
            'update_time' => 'Update Time',
            'update_user_id' => 'Update User',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('name_de', $this->name_de, true);
        $criteria->compare('parent_name', $this->parent_name, true);
        $criteria->compare('parent_id', $this->parent_id);
        $criteria->compare('level', $this->level);
        $criteria->compare('num_post', $this->num_post, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('create_user_id', $this->create_user_id, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('update_user_id', $this->update_user_id, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return BspCategory the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * get chtml list of get category
     */
    public function getCategoryList() {
        $criteria = new CDbCriteria();
        $criteria->select = "id,name";
        $data = CHtml::listData($this->findAll($criteria), "id", "name");
        return $data;
    }

    /**
     * get full root categories
     * services and rentals
     */
    public function getRootCategories() {
        $criteria = new CDbCriteria();
        $criteria->select = "id,name,name_de";
        $criteria->addInCondition("name", array("Services", "Rentals"));
        if (Yii::app()->language == "en") {
            $data = CHtml::listData($this->findAll($criteria), "id", "name");
        } else {
            $data = CHtml::listData($this->findAll($criteria), "id", "name_de");
        }
        return $data;
    }

    /**
     * 
     * @param type $id
     */
    public function getChildrenCategories($id) {
        /**
         * if id is null then empty result
         */
        if (empty($id)) {
            return array();
        }
        $criteria = new CDbCriteria();
        $criteria->select = "id,name,name_de";
        $criteria->addCondition("parent_id = " . $id);
        if (Yii::app()->language == "en") {
            $data = CHtml::listData($this->findAll($criteria), "id", "name");
        } else {
            $data = CHtml::listData($this->findAll($criteria), "id", "name_de");
        }
        
        return $data;
    }

    /**
     * 
     * @return type
     */
    public function afterFind() {
        $this->slug = MyHelper::convert_no_sign(str_replace(Yii::app()->params['notallowdCharactorsUrl'], "", $this->name)) . "-" . $this->primaryKey;
        
        $this->_trans_name = Yii::app()->language == "en"?$this->name:$this->name_de;
        return parent::afterFind();
    }

    /**
     * get Parent cateogry name 
     * from its id   
     * @param type $id
     */
    public function getParentCategory($id) {
        return $this->findByPk($id);
    }

}
