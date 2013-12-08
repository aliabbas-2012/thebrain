<?php

/**
 * This is the model class for table "bsp_item_price_offer".
 *
 * The followings are the available columns in table 'bsp_item_price_offer':
 * @property integer $id
 * @property integer $item_id
 * @property string $option
 * @property double $price
 * @property integer $period
 * @property integer $start
 * @property integer $end
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspItemPriceOfferDay extends DTActiveRecord {

    public $all_offers = array("abs" => "Absolute Rate", "range" => "Breakdown Rate", "extra" => "Extra");

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_item_price_offer';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('option, price, period, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('item_id, period,price, start, end', 'numerical', 'integerOnly' => true),
            array('price', 'numerical'),
            array('option', 'length', 'max' => 8),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('is_extra', 'safe'),
            array('end', 'validateTimeRange'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, item_id, option, price, period, start, end, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * 
     * @set period type
     */
    public function beforeValidate() {
        $this->period = 3;
        return parent::beforeValidate();
    }

    /**
     * 
     */
    public function validateTimeRange($attribute) {

        if ($this->option == "range") {
            if ($this->start >= $this->end) {
                $this->addError($attribute, "Greater then start");
            }
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'item' => array(self::BELONGS_TO, 'BspItem', 'item_id','condition'=>'period = 3'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'item_id' => 'Item',
            'option' => 'Option',
            'price' => 'Price',
            'period' => 'Period',
            'start' => 'Start Time',
            'end' => 'End Time',
            'is_extra' => 'Each Extra',
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
        $criteria->compare('item_id', $this->item_id);
        $criteria->compare('option', $this->option, true);
        $criteria->compare('price', $this->price);
        $criteria->compare('period', $this->period);
        $criteria->compare('start', $this->start);
        $criteria->compare('end', $this->end);
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
     * @return BspItemPriceOffer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
