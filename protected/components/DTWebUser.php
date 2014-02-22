<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DTWebUser extends RWebUser {

    private $_user;

    /**
     * when system will login it will help us to navigate to thats
     * city
     * @var type 
     */
    public $userCity;

    //get the logged user
    function getUser() {
        if ($this->isGuest)
            return;
        if ($this->_user === null) {
            $this->_user = Users::model()->findByPk($this->id);
        }
        return $this->_user;
    }

    /**
     * get User Profile percentage
     * will tell us how many profile has 
     * completed 
     */
    public function getUserProfilePercentage() {
        $countper = 10;

        if ($this->user->first_name == '')
            $countper--;
        if ($this->user->second_name == '')
            $countper--;
        if ($this->user->phone == '')
            $countper--;
        if ($this->user->birthday == '0000-00-00')
            $countper--;
        if ($this->user->description == '')
            $countper--;
        if (Yii::app()->user->user->city == '')
            $countper--;
        if ($this->user->country == '')
            $countper--;
        if ($this->user->zipcode == '')
            $countper--;
        if ($this->user->avatar == '' || $this->user->avatar == 'no_image')
            $countper--;
        if ($this->user->background == '' || $this->user->background == 'no_image')
            $countper;
        
        return $countper;
    }

    /**
     * 
     * @return boolean
     */
    function getIpInfo() {
        $ip = Yii::app()->request->getUserHostAddress();
        $content = @file_get_contents('http://api.hostip.info/?ip=' . $ip);
        if ($content != FALSE) {
            $xml = new SimpleXmlElement($content);
            $location['citystate'] = $xml->children('gml', TRUE)->featureMember->children('', TRUE)->Hostip->children('gml', TRUE)->name;
            $location['country'] = $xml->children('gml', TRUE)->featureMember->children('', TRUE)->Hostip->countryName;
            $location['short_country'] = $xml->children('gml', TRUE)->featureMember->children('', TRUE)->Hostip->countryAbbrev;
            return $location;
        }
        else
            return false;
    }

}

?>
