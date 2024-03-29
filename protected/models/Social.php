<?php

/**
 * This is the model class for table "{{social}}".
 *
 * The followings are the available columns in table '{{social}}':
 * @property integer $id
 * @property integer $yiiuser
 * @property string $provider
 * @property string $provideruser
 */
class Social extends DTActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Social the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'social';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('provider, provideruser', 'required'),
            array('yiiuser', 'numerical', 'integerOnly' => true),
            array('provider', 'length', 'max' => 50),
            array('provideruser', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, yiiuser, provider, provideruser', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user_rel' => array(self::BELONGS_TO, 'Users', 'yiiuser'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'yiiuser' => 'Yiiuser',
            'provider' => 'Provider',
            'provideruser' => 'Provideruser',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('yiiuser', $this->yiiuser);
        $criteria->compare('provider', $this->provider, true);
        $criteria->compare('provideruser', $this->provideruser, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}