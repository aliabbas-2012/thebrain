<?php

/**
 * This is the model class for table "bsp_comment".
 *
 * The followings are the available columns in table 'bsp_comment':
 * @property integer $id
 * @property integer $user_id
 * @property integer $item_id
 * @property integer $order_id
 * @property integer $objType
 * @property double $rating
 * @property string $comment
 * @property string $date_comment
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspComment extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_comment';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, order_id, objType, rating, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('user_id, item_id, order_id, objType', 'numerical', 'integerOnly' => true),
            array('rating', 'numerical'),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('comment, date_comment', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, item_id, order_id, objType, rating, comment, date_comment, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'order' => array(self::BELONGS_TO, 'BspOrder', 'order_id'),
            'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
        );
    }

    /**
     * get the comments related with order
     * 
     * @param type $user_id
     * @return BspComment
     */
    public function seller($user_id) {

        $this->getDbCriteria()->mergeWith(array(
            'with' => array(
                'order' => array(
                    'select' => false,
                    'condition' => 'user_id = order.buyer_id AND order.seller_id = :seller_id',
                    'params' => array(':seller_id' => $user_id),
                ),
            ),
        ));

        return $this;
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_id' => 'User',
            'item_id' => 'Item',
            'order_id' => 'Order',
            'objType' => 'Obj Type',
            'rating' => 'Rating',
            'comment' => 'Comment',
            'date_comment' => 'Date Comment',
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
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('item_id', $this->item_id);
        $criteria->compare('order_id', $this->order_id);
        $criteria->compare('objType', $this->objType);
        $criteria->compare('rating', $this->rating);
        $criteria->compare('comment', $this->comment, true);
        $criteria->compare('date_comment', $this->date_comment, true);
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
     * @return BspComment the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function getItemComments($item_id) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('item_id', $item_id);
        $criteria->order = "date_comment desc";


        /* return new CActiveDataProvider(get_class($this), array(
          'criteria'=>$criteria,

          )); */

        return $this->findAll($criteria);
    }

    public function getBuyerComments($user_id) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;
        $criteria->with = array(
            "order" => array("condition" => "t.order_id  = order.id AND order.buyer_id = :user_id",
                "params" => array(":user_id" => $user_id)
            )
        );

        $criteria->order = "t.date_comment desc";


        /* return new CActiveDataProvider(get_class($this), array(
          'criteria'=>$criteria,

          ));
         */
        return $this->findAll($criteria);
    }

    /**
     * 
     * @param type $user_id
     * @return type
     */
    public function getSellerComments($user_id) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
       
        $criteria = new CDbCriteria;
        $criteria->with = array(
            "order" => array("condition" => "t.order_id  = order.id AND order.seller_id = :user_id", 
                "params" => array(":user_id" => $user_id))
        );

        $criteria->order = "t.date_comment desc";

        /* return new CActiveDataProvider(get_class($this), array(
          'criteria'=>$criteria,

          )); */

        return $this->findAll($criteria);
    }
    /**
     * sleer comments
     * @param type $user_id
     * @return type
     */
    public function getNumSellerComments($user_id) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $row = Yii::app()->db->createCommand()
                ->select("COUNT(*) as comments ")
                ->from("bsp_comment c")
                ->join("bsp_order o", "c.order_id  = o.id")
                ->where("o.seller_id = :user_id", array(":user_id" => $user_id))
                ->queryRow();
        return $row['comments'];
    }

}
