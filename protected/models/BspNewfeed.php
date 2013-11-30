<?php

/**
 * This is the model class for table "bsp_newfeed".
 *
 * The followings are the available columns in table 'bsp_newfeed':
 * @property integer $id
 * @property integer $status
 * @property string $detail
 * @property string $description
 * @property string $detail_de
 * @property string $description_de
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspNewfeed extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_newfeed';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('detail, detail_de, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('status', 'numerical', 'integerOnly' => true),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('description, description_de', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, status, detail, description, detail_de, description_de, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
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
            'id' => 'ID',
            'status' => 'Status',
            'detail' => 'Detail',
            'description' => 'Description',
            'detail_de' => 'Detail De',
            'description_de' => 'Description De',
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
        $criteria->compare('status', $this->status);
        $criteria->compare('detail', $this->detail, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('detail_de', $this->detail_de, true);
        $criteria->compare('description_de', $this->description_de, true);
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
     * @return BspNewfeed the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
