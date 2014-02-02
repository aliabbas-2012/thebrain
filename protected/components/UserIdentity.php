<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $id;

    public function authenticate() {
        $criteria = new CDbCriteria();
        $condition = 'LOWER(user_email)="' . strtolower($this->username) . '" OR username ="' . strtolower($this->username) . '"';
        $criteria->addCondition($condition);

        $user = Users::model()->find($criteria);

        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;

        else if ($user->password != md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;

        else {


            $this->id = $user->id;
            //$this->username=$user->user_name;
            $this->setState('user_email', $user->user_email);
            $this->setState('name', $user->username);
            $this->setState('user_id', $user->id);


            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    /**
     * authicate with social 
     * @return type
     */
    public function authenticateWith() {
        //$this->setState("isSuperAdmin", Yii::app()->user->isSuperAdmin);
        $user = Users::model()->find("user_email = '" . $this->username . "'");
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else {
            $this->id = $user->id;
            //$this->username=$user->user_name;
            $this->setState('user_email', $user->user_email);
            $this->setState('name', $user->username);
            $this->setState('user_id', $user->id);

            $this->errorCode = self::ERROR_NONE;
        }


        return $this->errorCode == self::ERROR_NONE;
    }

    public function getId() {
        return $this->id;
    }

}