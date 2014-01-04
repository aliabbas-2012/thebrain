<?php

/**
 * This is the model class for table "bsp_articla".
 *
 * The followings are the available columns in table 'bsp_articla':
 * @property string $ID
 * @property string $article_name
 * @property string $details_en
 * @property string $details_de
 * @property string $custom_url
 * @property integer $iStatus
 * @property string $article_name_de
 * @property string $custom_url_de
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspArticla extends DTActiveRecord {

    public $slug;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_articla';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('article_name, details_en, details_de, article_name_de, custom_url_de, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('iStatus', 'numerical', 'integerOnly' => true),
            array('article_name, custom_url, article_name_de, custom_url_de', 'length', 'max' => 255),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('slug', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID, article_name, details_en, details_de, custom_url, iStatus, article_name_de, custom_url_de, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'ID' => 'ID',
            'article_name' => 'Article Name',
            'details_en' => 'Details En',
            'details_de' => 'Details De',
            'custom_url' => 'Custom Url',
            'iStatus' => 'I Status',
            'article_name_de' => 'Article Name De',
            'custom_url_de' => 'Custom Url De',
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

        $criteria->compare('ID', $this->ID, true);
        $criteria->compare('article_name', $this->article_name, true);
        $criteria->compare('details_en', $this->details_en, true);
        $criteria->compare('details_de', $this->details_de, true);
        $criteria->compare('custom_url', $this->custom_url, true);
        $criteria->compare('iStatus', $this->iStatus);
        $criteria->compare('article_name_de', $this->article_name_de, true);
        $criteria->compare('custom_url_de', $this->custom_url_de, true);
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
     * @return BspArticla the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * after find
     */
    public function afterFind() {

        $this->setSlug();
        return parent::afterFind();
    }

    /**
     * set slug for 
     * urls
     */
    public function setSlug() {
        if (Yii::app()->language == "en") {
            if (!empty($this->custom_url)) {
                $this->slug = str_replace(Yii::app()->params['notallowdCharactorsUrl'], "", trim($this->custom_url)) . "-" . $this->primaryKey;
            } else {
                $this->slug = str_replace(Yii::app()->params['notallowdCharactorsUrl'], "", trim($this->article_name)) . "-" . $this->primaryKey;
            }
        } else {
            if (!empty($this->custom_url)) {
                $this->slug = str_replace(Yii::app()->params['notallowdCharactorsUrl'], "", trim($this->custom_url_de)) . "-" . $this->primaryKey;
            } else {
                $this->slug = str_replace(Yii::app()->params['notallowdCharactorsUrl'], "", trim($this->article_name_de)) . "-" . $this->primaryKey;
            }
        }

        $this->slug = strtolower(str_replace(" ", "-", trim($this->slug)));
    }

}
