<?php

class BspItemFrontEnd extends BspItem {

    public $_is_confirm;
    public $upload_images;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_item';
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
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        $rules = array(array("_is_confirm", "required"), array('upload_images', 'safe'));
        $rules = $rules + parent::rules();
        
        return $rules;
    }

}

