<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DTWebUser extends CWebUser {

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
