<?php

/**
 * This is the model class for table "bsp_message".
 *
 * The followings are the available columns in table 'bsp_message':
 * @property integer $Id
 * @property integer $user_send
 * @property integer $user_receive
 * @property integer $is_view
 * @property string $detail
 * @property string $sFile
 * @property string $subject
 * @property string $date_time
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspMessage extends DTActiveRecord {

    public $user_receive_name;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_message';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_send, user_receive,subject,detail,create_time, create_user_id, update_time, update_user_id', 'required'),
            array('user_send, user_receive, is_view', 'numerical', 'integerOnly' => true),
            array('sFile, subject', 'length', 'max' => 255),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('detail, date_time', 'safe'),
            array('sFile', 'file', 'allowEmpty' => $this->isNewRecord ? false : true,
                'maxSize'=> 5120000, 
                'types' => 'jpg,jpeg,gif,png,JPG,JPEG,GIF,PNG,doc,pdf,odt,docx,xlsx,xls,txt'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('Id, user_send, user_receive, is_view, detail, sFile, subject, date_time, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'sent_user' => array(self::BELONGS_TO, 'Users', 'user_send'),
            'recieved_user' => array(self::BELONGS_TO, 'Users', 'user_receive'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'Id' => 'ID',
            'user_send' => 'User Send',
            'user_receive' => 'User Receive',
            'user_receive_name' => 'User Receive',
            'is_view' => 'Is View',
            'detail' => 'Detail',
            'sFile' => 'Attachment',
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

        $criteria->compare('Id', $this->Id);
        $criteria->compare('user_send', $this->user_send);
        $criteria->compare('user_receive', $this->user_receive);
        $criteria->compare('is_view', $this->is_view);
        $criteria->compare('detail', $this->detail, true);
        $criteria->compare('sFile', $this->sFile, true);
        $criteria->compare('subject', $this->subject, true);
        $criteria->compare('date_time', $this->date_time, true);
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
     * @return BspMessage the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * to set date time
     * @return boolean
     */
    public function beforeValidate() {
        parent::beforeValidate();
        $this->date_time = $this->create_time;
        return true;
    }

    /**
     * 
     */
    public function afterFind() {
        $this->user_receive_name = !empty($this->recieved_user) ? $this->recieved_user->user_email : "";
    }

}
