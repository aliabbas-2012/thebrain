<?php

/**
 * This is the model class for table "bsp_advertising".
 *
 * The followings are the available columns in table 'bsp_advertising':
 * @property string $id
 * @property string $adv_name
 * @property string $adv_img
 * @property string $adv_url
 * @property integer $adv_position
 * @property integer $iStatus
 * @property string $adv_name_de
 * @property string $adv_img_de
 * @property string $adv_url_de
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspAdvertising extends DTActiveRecord {

    public $all_status = array(1 => "True", 2 => "False");
    public $all_positions = array(1 => "Top", 2 => "Right", 3 => "Bottom", 4 => "Left");

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_advertising';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('adv_name,adv_url, iStatus, adv_name_de, adv_url_de, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('adv_position, iStatus', 'numerical', 'integerOnly' => true),
            array('adv_name, adv_img, adv_url, adv_name_de, adv_img_de, adv_url_de', 'length', 'max' => 255),
            array('adv_img,adv_img_de', 'file', 'allowEmpty' => $this->isNewRecord ? false : true,
                'types' => 'jpg,jpeg,gif,png,JPG,JPEG,GIF,PNG'),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, adv_name, adv_img, adv_url, adv_position, iStatus, adv_name_de, adv_img_de, adv_url_de, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
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
            'adv_name' => 'Name',
            'adv_img' => 'Image (en)',
            'adv_url' => 'Url (en)',
            'adv_position' => 'Position',
            'iStatus' => 'Status',
            'adv_name_de' => 'Name De',
            'adv_img_de' => 'Image De',
            'adv_url_de' => 'Url De',
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

        $criteria->compare('id', $this->id, true);
        $criteria->compare('adv_name', $this->adv_name, true);
        $criteria->compare('adv_img', $this->adv_img, true);
        $criteria->compare('adv_url', $this->adv_url, true);
        $criteria->compare('adv_position', $this->adv_position);
        $criteria->compare('iStatus', $this->iStatus);
        $criteria->compare('adv_name_de', $this->adv_name_de, true);
        $criteria->compare('adv_img_de', $this->adv_img_de, true);
        $criteria->compare('adv_url_de', $this->adv_url_de, true);
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
     * @return BspAdvertising the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
