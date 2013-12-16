<?php

/**
 * This is the model class for table "bsp_item_image_video".
 *
 * The followings are the available columns in table 'bsp_item_image_video':
 * @property integer $id
 * @property integer $item_id
 * @property string $image_url
 * @property string $video_url
 * @property integer $is_offer
 * @property integer $is_image
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspItemImage extends DTActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_item_image_video';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('image_url,create_time, create_user_id, update_time, update_user_id', 'required'),
            array('item_id, is_offer', 'numerical', 'integerOnly' => true),
            array('image_url, video_url', 'length', 'max' => 255),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('id,item_id,is_image', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, item_id, image_url, video_url, is_offer, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    public function beforeValidate() {

        return parent::beforeValidate();
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'item' => array(self::BELONGS_TO, 'BspItem', 'item_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'item_id' => 'Item',
            'image_url' => 'Image Url',
            'video_url' => 'Video Url',
            'is_offer' => 'Is Offer',
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
        $criteria->compare('image_url', $this->image_url, true);
        $criteria->compare('video_url', $this->video_url, true);
        $criteria->compare('is_offer', $this->is_offer);
        $criteria->compare('is_image', $this->is_image);
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
     * @return BspItemImage the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * before save
     */
    public function beforeSave() {
        $this->updateAllToUndefault();
        $this->is_image = 1;
        parent::beforeSave();
        return true;
    }

    /**
     * 
     * @return type
     */
    public function afterSave() {
        parent::afterSave();
        $path = $upload_path = DTUploadedFile::getFolderPath(array("temp", Yii::app()->user->id, get_class($this)));
        if (is_file($path . $this->image_url)) {
            
            $id = Yii::app()->db->getLastInsertID();

            copy($path . $this->image_url, DTUploadedFile::creeatRecurSiveDirectories(array(get_class($this),$id)) . $this->image_url);
            unlink($path . $this->image_url);
        }
        return true;
    }

    /**
     *  before saving all the records needs
     *  to be undefault
     */
    public function updateAllToUndefault() {
        if (!empty($this->item_id)) {
            $connection = Yii::app()->db;
            $sql = "UPDATE " . $this->tableName() . " t SET t.is_offer=0 WHERE t.item_id ='" . $this->item_id . "' ";
            $command = $connection->createCommand($sql);
            $command->execute();
        }
    }

}
