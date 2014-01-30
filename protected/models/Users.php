<?php

/**
 * This is the model class for table "bsp_user".
 *
 * The followings are the available columns in table 'bsp_user':
 * @property integer $id
 * @property string $first_name
 * @property string $second_name
 * @property string $username
 * @property string $user_email
 * @property string $type
 * @property string $phone
 * @property string $avatar
 * @property string $birthday
 * @property string $gender
 * @property string $store_url
 * @property string $paypal_mail
 * @property string $fbmail
 * @property string $password
 * @property string $password_hint
 * @property string $description
 * @property string $address
 * @property string $country
 * @property string $city
 * @property string $zipcode
 * @property double $lat
 * @property double $lng
 * @property string $background
 * @property string $sRecentList
 * @property string $sWishList
 * @property string $lastActiveTime
 * @property string $email_authenticate
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 *
 * The followings are the available model relations:
 * @property BspNotify[] $bspNotifies
 */
class Users extends DTActiveRecord {

    public $pwd_repeat;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, user_email, store_url, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('lat, lng', 'numerical'),
            array('first_name, second_name, paypal_mail, password', 'length', 'max' => 50),
            array('username, user_email, store_url, fbmail, address, email_authenticate', 'length', 'max' => 255),
            array('type', 'length', 'max' => 9),
            array('phone', 'length', 'max' => 30),
            array('avatar, background', 'length', 'max' => 300),
            array('gender', 'length', 'max' => 6),
            array('password_hint, city', 'length', 'max' => 200),
            array('country', 'length', 'max' => 100),
            array('zipcode', 'length', 'max' => 45),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('lastActiveTime,birthday, description, sRecentList, sWishList', 'safe'),
            array('fbmail,paypal_mail', 'email'),
            array('user_email', $this->isNewRecord ? 'email' : "safe"),
            array('user_email,username', 'unique'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, first_name, second_name, username, user_email, type, phone, avatar, birthday, gender, store_url, paypal_mail, fbmail, password, password_hint, description, address, country, city, zipcode, lat, lng, background, sRecentList, sWishList, lastActiveTime, email_authenticate, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    /*
      validate postal code
     * */

    public function validatePostal($attribute, $params) {
        $ZIPREG = array(
            "United States" => "^\d{5}([\-]?\d{4})?$",
            "United Kingdom" => "^(GIR|[A-Z]\d[A-Z\d]??|[A-Z]{2}\d[A-Z\d]??)[ ]??(\d[A-Z]{2})$",
            "Germany" => "\b((?:0[1-46-9]\d{3})|(?:[1-357-9]\d{4})|(?:[4][0-24-9]\d{3})|(?:[6][013-9]\d{3}))\b",
            "Canada" => "^([ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ])\ {0,1}(\d[ABCEGHJKLMNPRSTVWXYZ]\d)$",
            "France" => "^(F-)?((2[A|B])|[0-9]{2})[0-9]{3}$",
            "Italy" => "^(V-|I-)?[0-9]{5}$",
            "Australia" => "^(0[289][0-9]{2})|([1345689][0-9]{3})|(2[0-8][0-9]{2})|(290[0-9])|(291[0-4])|(7[0-4][0-9]{2})|(7[8-9][0-9]{2})$",
            "Netherlands" => "^[1-9][0-9]{3}\s?([a-zA-Z]{2})?$",
            "Spain" => "^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$",
            "Denmark" => "^([D-d][K-k])?( |-)?[1-9]{1}[0-9]{3}$",
            "Sweden" => "^(s-|S-){0,1}[0-9]{3}\s?[0-9]{2}$",
            "Belgium" => "^[1-9]{1}[0-9]{3}$"
        );

        if (!empty($this->country)) {
            $code = Country::model()->getCountryCode($this->country);
            if (isset($ZIPREG[$code]) && !preg_match("/" . $ZIPREG[$code] . "/i", $this->$attribute)) {
                $this->addError($attribute, "zip Code is not valid");
            } else {
                if (!preg_match("//^[0-9]{5}([- ]?[0-9]{4})?$/", $this->$attribute)) {
                    $this->addError($attribute, "zip Code is not valid");
                }
            }
        } else {
            if (!preg_match("//^[0-9]{5}([- ]?[0-9]{4})?$/", $this->$attribute)) {
                $this->addError($attribute, "zip Code is not valid");
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
            'bspNotifies' => array(self::HAS_MANY, 'BspNotify', 'user_id'),
            'messagesRecv' => array(self::HAS_MANY, 'BspMessage', 'user_receive'),
            'messagesSent' => array(self::HAS_MANY, 'BspMessage', 'user_send'),
            'user_items' => array(self::HAS_MANY, 'BspItem', 'user_id'),
            'comments' => array(self::HAS_MANY, 'BspComment', 'user_id'),
            'seller_orders' => array(self::HAS_MANY, 'BspOrder', 'seller_id'),
            'buyer_orders' => array(self::HAS_MANY, 'BspOrder', 'buyer_id'),
            'statmessagesRecv' => array(self::STAT, 'BspMessage', 'user_receive'),
            'statmessagesSent' => array(self::STAT, 'BspMessage', 'user_send'),
            'numitems' => array(self::STAT, 'BspItem', 'user_id'),
            'numseller_orders' => array(self::STAT, 'BspOrder', 'seller_id'),
            'numbuyer_orders' => array(self::STAT, 'BspOrder', 'buyer_id'),
            'sellerPayment' => array(self::STAT, 'BspOrder', 'seller_id', 'select' => 'SUM(payment)'),
            'ratings' => array(self::STAT, 'BspComment', 'user_id', 'select' => '
                 
                    count(bsp_comment.id) ratings
                  FROM
                    bsp_comment
                    INNER JOIN bsp_order ON (bsp_comment.order_id = bsp_order.id)
                    AND (bsp_comment.user_id = bsp_order.buyer_id)
                  WHERE
                    (bsp_comment.user_id = :user_id)
            ')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'first_name' => 'First Name',
            'second_name' => 'Second Name',
            'username' => 'Username',
            'user_email' => 'User Email',
            'type' => 'Type',
            'phone' => 'Phone',
            'avatar' => 'Avatar',
            'birthday' => 'Birthday',
            'gender' => 'Gender',
            'store_url' => 'Store Url',
            'paypal_mail' => 'Paypal Mail',
            'fbmail' => 'Fbmail',
            'password' => 'Password',
            'password_hint' => 'Password Hint',
            'description' => 'About you',
            'address' => 'Address',
            'country' => 'Country',
            'city' => 'City',
            'zipcode' => 'Zipcode',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'background' => 'Background',
            'sRecentList' => 'S Recent List',
            'sWishList' => 'S Wish List',
            'lastActiveTime' => 'Last Active Time',
            'email_authenticate' => 'Email Authenticate',
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
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('second_name', $this->second_name, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('user_email', $this->user_email, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('avatar', $this->avatar, true);
        $criteria->compare('birthday', $this->birthday, true);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('store_url', $this->store_url, true);
        $criteria->compare('paypal_mail', $this->paypal_mail, true);
        $criteria->compare('fbmail', $this->fbmail, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('password_hint', $this->password_hint, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('country', $this->country, true);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('zipcode', $this->zipcode, true);
        $criteria->compare('lat', $this->lat);
        $criteria->compare('lng', $this->lng);
        $criteria->compare('background', $this->background, true);
        $criteria->compare('sRecentList', $this->sRecentList, true);
        $criteria->compare('sWishList', $this->sWishList, true);
        $criteria->compare('lastActiveTime', $this->lastActiveTime, true);
        $criteria->compare('email_authenticate', $this->email_authenticate, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('create_user_id', $this->create_user_id, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('update_user_id', $this->update_user_id, true);


        $criteria->addCondition("id <> " . Yii::app()->user->id . " AND type ='non-admin'");

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return BspUser the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * get User data in array
     * in CHtml form
     */
    public function getUsersArray() {
        $criteria = new CDbCriteria();
        $criteria->select = "id,username";
        $data = CHtml::listData($this->findAll($criteria), "id", "username");
        return $data;
    }

    /**
     * 
     * @return type
     */
    public function afterFind() {
        $this->birthday = !empty($this->birthday) ? ItstFunctions::dateFormatForView($this->birthday) : "";
        return parent::afterFind();
    }

    public function beforeSave() {
        $this->birthday = !empty($this->birthday) ? ItstFunctions::dateFormatForSave($this->birthday) : "";

        return parent::beforeSave();
    }

    /**
     * 
     * @return type
     */
    public function afterSave() {
        $path = $upload_path = DTUploadedFile::getFolderPath(array("temp", Yii::app()->user->id, get_class($this)));
        $this->uploadAvtar($path);
        $path.="Users_background" . DIRECTORY_SEPARATOR;

        if (is_file($path . $this->background)) {

            copy($path . $this->background, DTUploadedFile::creeatRecurSiveDirectories(array(get_class($this), $this->primaryKey, "background")) . $this->background);
            unlink($path . $this->background);
        }

        return parent::afterSave();
    }

    /**
     * 
     */
    public function uploadAvtar($path) {
        $path.= "Users_avatar" . DIRECTORY_SEPARATOR;

        if (is_file($path . $this->avatar)) {

            copy($path . $this->avatar, DTUploadedFile::creeatRecurSiveDirectories(array(get_class($this), $this->primaryKey, "avatar")) . $this->avatar);
            unlink($path . $this->avatar);
        }
    }

    /**
     * get rating
     * of user
     */
    public function getRatings() {
        $connection = Yii::app()->db;
        $sql = "SELECT 
                count(bsp_comment.id) ratings
              FROM
                bsp_comment
                INNER JOIN bsp_order ON (bsp_comment.order_id = bsp_order.id)
                AND (bsp_comment.user_id = bsp_order.buyer_id)
              WHERE
                (bsp_comment.user_id = " . $this->id . ")";

        $command = $connection->createCommand($sql);
        return $command->queryScalar();
    }

}
