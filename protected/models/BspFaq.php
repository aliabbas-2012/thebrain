<?php

/**
 * This is the model class for table "bsp_faq".
 *
 * The followings are the available columns in table 'bsp_faq':
 * @property string $ID
 * @property integer $userID
 * @property string $sQname
 * @property string $sQdetails
 * @property string $dDateposted
 * @property string $sAnswers
 * @property string $dDateUpdate
 * @property integer $iStatus
 * @property string $sQname_en
 * @property string $sQdetails_en
 * @property string $sAnswers_en
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspFaq extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_faq';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('sQname, sQdetails, sAnswers, sQname_en, sQdetails_en, sAnswers_en, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('userID, iStatus', 'numerical', 'integerOnly' => true),
            array('sQname, sQname_en', 'length', 'max' => 255),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('dDateposted, dDateUpdate', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID, userID, sQname, sQdetails, dDateposted, sAnswers, dDateUpdate, iStatus, sQname_en, sQdetails_en, sAnswers_en, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'Users', 'userID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'ID' => 'ID',
            'userID' => 'User',
            'sQname' => 'S Qname',
            'sQdetails' => 'S Qdetails',
            'dDateposted' => 'D Dateposted',
            'sAnswers' => 'S Answers',
            'dDateUpdate' => 'D Date Update',
            'iStatus' => 'I Status',
            'sQname_en' => 'S Qname En',
            'sQdetails_en' => 'S Qdetails En',
            'sAnswers_en' => 'S Answers En',
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
        $criteria->compare('userID', $this->userID);
        $criteria->compare('sQname', $this->sQname, true);
        $criteria->compare('sQdetails', $this->sQdetails, true);
        $criteria->compare('dDateposted', $this->dDateposted, true);
        $criteria->compare('sAnswers', $this->sAnswers, true);
        $criteria->compare('dDateUpdate', $this->dDateUpdate, true);
        $criteria->compare('iStatus', $this->iStatus);
        $criteria->compare('sQname_en', $this->sQname_en, true);
        $criteria->compare('sQdetails_en', $this->sQdetails_en, true);
        $criteria->compare('sAnswers_en', $this->sAnswers_en, true);
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
     * @return BspFaq the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
