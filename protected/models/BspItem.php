<?php

/**
 * This is the model class for table "bsp_item".
 *
 * The followings are the available columns in table 'bsp_item':
 * @property integer $id
 * @property integer $category_id
 * @property integer $sub_category_id
 * @property integer $group_id
 * @property string $name
 * @property string $avatar_image
 * @property string $description
 * @property integer $num_star
 * @property string $num_like
 * @property integer $user_id
 * @property string $date_create
 * @property double $price
 * @property string $num_review
 * @property integer $sound_id
 * @property integer $video_id
 * @property string $item_image
 * @property string $background_image
 * @property string $discount_price
 * @property string $is_public
 * @property integer $showlocation
 * @property integer $num_orders
 * @property integer $my_condition
 * @property integer $my_other_price
 * @property integer $iStatus
 * @property integer $iPayment
 * @property integer $special_deal
 * @property integer $currency_id
 * @property integer $per_price
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property double $lat
 * @property double $lng
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspItem extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_item';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('seo_title, seo_description, seo_keywords, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('category_id, sub_category_id, group_id, num_star, user_id, sound_id, video_id, showlocation, num_orders, my_condition, my_other_price, iStatus, iPayment, special_deal, currency_id, per_price', 'numerical', 'integerOnly' => true),
            array('price, lat, lng', 'numerical'),
            array('name', 'length', 'max' => 200),
            array('avatar_image, item_image, background_image, seo_title, seo_keywords', 'length', 'max' => 255),
            array('num_like', 'length', 'max' => 10),
            array('num_review, discount_price', 'length', 'max' => 30),
            array('is_public', 'length', 'max' => 5),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('description, date_create', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, category_id, sub_category_id, group_id, name, avatar_image, description, num_star, num_like, user_id, date_create, price, num_review, sound_id, video_id, item_image, background_image, discount_price, is_public, showlocation, num_orders, my_condition, my_other_price, iStatus, iPayment, special_deal, currency_id, per_price, seo_title, seo_description, seo_keywords, lat, lng, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
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
            'category_id' => 'Category',
            'sub_category_id' => 'Sub Category',
            'group_id' => 'Group',
            'name' => 'Name',
            'avatar_image' => 'Avatar Image',
            'description' => 'Description',
            'num_star' => 'Num Star',
            'num_like' => 'Num Like',
            'user_id' => 'User',
            'date_create' => 'Date Create',
            'price' => 'Price',
            'num_review' => 'Num Review',
            'sound_id' => 'Sound',
            'video_id' => 'Video',
            'item_image' => 'Item Image',
            'background_image' => 'Background Image',
            'discount_price' => 'Discount Price',
            'is_public' => 'true, false',
            'showlocation' => 'Showlocation',
            'num_orders' => 'This field auto increase +1 when user has their customer order',
            'my_condition' => 'My Condition',
            'my_other_price' => 'My Other Price',
            'iStatus' => 'I Status',
            'iPayment' => 'I Payment',
            'special_deal' => 'Special Deal',
            'currency_id' => 'Currency',
            'per_price' => 'Per Price',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'seo_keywords' => 'Seo Keywords',
            'lat' => 'Lat',
            'lng' => 'Lng',
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
        $criteria->compare('category_id', $this->category_id);
        $criteria->compare('sub_category_id', $this->sub_category_id);
        $criteria->compare('group_id', $this->group_id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('avatar_image', $this->avatar_image, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('num_star', $this->num_star);
        $criteria->compare('num_like', $this->num_like, true);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('date_create', $this->date_create, true);
        $criteria->compare('price', $this->price);
        $criteria->compare('num_review', $this->num_review, true);
        $criteria->compare('sound_id', $this->sound_id);
        $criteria->compare('video_id', $this->video_id);
        $criteria->compare('item_image', $this->item_image, true);
        $criteria->compare('background_image', $this->background_image, true);
        $criteria->compare('discount_price', $this->discount_price, true);
        $criteria->compare('is_public', $this->is_public, true);
        $criteria->compare('showlocation', $this->showlocation);
        $criteria->compare('num_orders', $this->num_orders);
        $criteria->compare('my_condition', $this->my_condition);
        $criteria->compare('my_other_price', $this->my_other_price);
        $criteria->compare('iStatus', $this->iStatus);
        $criteria->compare('iPayment', $this->iPayment);
        $criteria->compare('special_deal', $this->special_deal);
        $criteria->compare('currency_id', $this->currency_id);
        $criteria->compare('per_price', $this->per_price);
        $criteria->compare('seo_title', $this->seo_title, true);
        $criteria->compare('seo_description', $this->seo_description, true);
        $criteria->compare('seo_keywords', $this->seo_keywords, true);
        $criteria->compare('lat', $this->lat);
        $criteria->compare('lng', $this->lng);
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
     * @return BspItem the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}