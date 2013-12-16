<?php

/**
 * This is the model class for table "bsp_user".
 *
 */
class RegisterUsers extends Users {

    public $password_repeat;

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
        $rules = array(
            array('password password_repeat,password_hint', 'required'),
            array('username, user_email', 'unique'),
            array('user_email', 'email'),
            array('password', 'compare', 'compareAttribute' => 'password_repeat'),
        );

        return array_merge($rules, parent::rules());
    }

    /**
     * before save
     */
    public function beforeSave() {
        parent::beforeSave();
        $this->password = md5($this->password);
        return true;
    }

}
