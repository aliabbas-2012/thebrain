<?php

class BspItemFrontEnd extends BspItem {

    public $_is_confirm;
    public $upload_images;
    public $_offer_images;

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
        $rules = array(
            array("_is_confirm", "required", 'requiredValue' => 1, 'message' => Yii::t('notify', 'Please accept T&C')),
             array('_offer_images', 'required'),
           // array('_is_confirm', 'allowEmpty' => false, 'compare', 'compareValue' => true,
                //'message' => 'You must agree to the terms and conditions'),
            array('upload_images', 'safe'),
           
        );
        $rules = array_merge(parent::rules(),$rules);
        //CVarDumper::dump($rules,10,true);
        return $rules;
    }

    /**
     * saving it for front end
     * @return type
     */
    public function afterSave() {
        $path = $upload_path = DTUploadedFile::getFolderPath(array("temp", Yii::app()->user->id, get_class($this), "BspItemFrontEnd_background_image",));
        if (is_file($path . $this->background_image)) {

            copy($path . $this->background_image, DTUploadedFile::creeatRecurSiveDirectories(array("BspItem", $this->primaryKey)) . $this->background_image);
            unlink($path . $this->background_image);
        }
        return parent::afterSave();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return parent::attributeLabels() + array("_offer_images" => Yii::t('models', "Offer Image"));
    }

}

