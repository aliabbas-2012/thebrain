<?php

class ChangeUser extends Users {

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.


        $rules = array(
            array('password, pwd_repeat', 'required'),
            array('password', 'compare', 'compareAttribute' => 'pwd_repeat'),
                // The following rule is used by search().
                // Please remove those attributes that should not be searched.
        );
        return $rules + parent::rules();
    }

    /**
     * 
     * @return type
     */
    public function afterFind() {
        $this->pwd_repeat = "";
        $this->password = "";
        return parent::afterFind();
    }

}

?>
