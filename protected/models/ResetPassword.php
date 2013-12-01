<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChangePassword
 *
 * @author Brain
 */
class ResetPassword extends CFormModel {

    //put your code here
    public $pwd_repeat;
    public $password;

    /**
     *
     * @var type 
     */
    public $_model;

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.


        return array(
            array('password, pwd_repeat', 'required'),
            array('password', 'compare', 'compareAttribute' => 'pwd_repeat'),
                // The following rule is used by search().
                // Please remove those attributes that should not be searched.
        );
    }

}

?>
