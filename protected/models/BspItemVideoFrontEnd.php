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
class BspItemVideoFrontEnd extends BspItemVideo {

   
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
            array('create_time, create_user_id, update_time, update_user_id', 'required'),
            array('item_id, is_offer', 'numerical', 'integerOnly' => true),
            array('image_url, video_url', 'length', 'max' => 255),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('video_url','safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, item_id, image_url, video_url, is_offer, create_time, create_user_id, update_time, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
  

}
