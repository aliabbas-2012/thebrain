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
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        $rules = array(array("_is_confirm", "required"),array('upload_images','safe'));
        return $rules + parent::rules();
    }

}

