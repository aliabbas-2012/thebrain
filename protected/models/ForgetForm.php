<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ForgetForm extends CFormModel {

    public $email;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('email', 'required'),
            // email has to be a valid email address
            array('email', 'email'),
            array('email', 'isEmailRecrod'),
        );
    }

    public function isEmailRecrod() {
        if (Users::model()->count("user_email='" . $this->email . "'") == 0) {
            $this->addError("email", "Your provided email does'nt exist");
        }
    }
    

}