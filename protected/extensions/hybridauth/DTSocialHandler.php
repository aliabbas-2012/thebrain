<?php

/**
 * Handler for all social logins
 */
class DTSocialHandler {

    /**
     * 
     * 
     * if user email is found 
     * get db user on the basis of 
     * user profile email
     * comming from soical network
     * like facebook
     * @param type $userProfile
     *      user profile is parameter
     *      of facebook
     */
    public function getDbSocailUser($userProfile) {
        $criteria = new CDbCriteria();
        $criteria->select = "id,user_email";
        $criteria->addCondition("user_email='" . $userProfile->email . "'");
        $user = Users::model()->find($criteria);

        return $user;
    }

    /**
     * user insertion or managing user
     * @param type $userProfile
     * @param type $provider
     * @return type
     */
    public function manageUser($userProfile, $provider) {
        $user = $this->getDbSocailUser($userProfile);
        if (!empty($user)) {
            /** login here */
            return $user;
        } else {
            $user = $this->makeObjectNewSocialUser($userProfile, $provider);
            $user->save();
            
            return $user;
        }
    }

    /**
     * Managing user that dont have email comming from
     * social network
     * @param type $userProfile
     * @param type $provider
     * @return string
     */
    public function manageNonEmailUser($userProfile, $provider) {

        $social_user = $this->getsocialUser($userProfile, $provider);

        if (!empty($social_user)) {
            $user = $this->getDbUser($social_user->yiiuser);
            return $user;
        } else {

            Yii::app()->session['social_user_info'] = $this->makeObjectNewSocialUser($userProfile, $provider);

            return "";
        }
    }

    /**
     * 
     * get database user on the basis
     * of user id 
     * get user from database
     * @param type $userId
     */
    public function getDbUser($userId) {

        $criteria = new CDbCriteria();
        $criteria->select = "user_id,user_email";
        $user = Users::model()->findByPk($userId, $criteria);
        return $user;
    }

    /**
     * 
     * @param type $userProfile
     * @param type $provider
     * @return type
     */
    public function getsocialUser($userProfile, $provider) {

        $criteria = new CDbCriteria();

        $criteria->select = "yiiuser";
        $criteria->addCondition("provider='" . $provider . "' AND provideruser='" . $userProfile->identifier . "'");
        $social = Social::model()->find($criteria);


        return $social;
    }

    /**
     * 
     * @param type $userProfile
     * @param type $provider
     * @return \User
     */
    public function makeObjectNewSocialUser($userProfile, $provider) {
        $user = new Users;

        $user->user_email = !empty($userProfile->email) ? $userProfile->email : $userProfile->identifier . "@puzzzle.com";
        $user->username = !empty($userProfile->email) ? $userProfile->email : $userProfile->identifier . "@puzzzle.com";
        $user->store_url = $user->username;
        $user->type = "non-admin";
        $dt = new DTFunctions();
        $userPass = $dt->getRanddomeNo(10);
        $user->password = $userPass;
        $user->email_authenticate = !empty($userProfile->email) ? "" : $dt->getRanddomeNo(20);
        
        $user->fbmail = $userProfile->email;


        $social = array();

        $social['Social'][] = array(
            'provider' => $provider,
            'provideruser' => $userProfile->identifier,
        );

        $user->setRelationRecords('social', is_array($social['Social']) ? $social['Social'] : array());

   

        return $user;
    }

}

?>
