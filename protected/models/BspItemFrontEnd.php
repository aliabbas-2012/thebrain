<?php

class BspItemFrontEnd extends BspItem {

    public $_is_confirm;

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
        $rules = array(array("_is_confirm", "required"));
        return $rules + parent::rules();
    }

}

