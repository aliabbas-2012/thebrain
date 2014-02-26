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
class OfferSearch extends CFormModel {

    //put your code here
    public $keyword,$key_word_1;
    public $location, $lat, $lng;
    public $special_deal, $withVideo, $withSound, $lowPrice, $highPrice, $popularity, $nearFirst;

    /**
     *
     * @var type 
     */
    public $distance;

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.


        return array(
            array('keyword,key_word_1, location,location_1,distance,lng,lat', 'safe'),
            array('special_deal, withVideo,withSound,lowPrice,highPrice,popularity,nearFirst', 'safe'),
        );
    }

    /**
     * @param $lat1, $lon1, $lat2, $lon2, $unit
     * @example echo distance(52.5173449, -13.463084900000013,52.5019, 13.4554, "K") . " Kilometers<br>";
     * @return Distane in Kilometers,Miles,Nautical Miles
     * @uses $distance = distance($lat1, $lon1, $lat2, $lon2, $unit);
     */
    public function getDistance($lat1, $lon1, $lat2, $lon2, $unit) {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
        // usage of this function for getting kelometers or Miles or Nautical Miles written by Shahzad.
        //Get this code from http://www.geodatasource.com/developers/php
        //echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
        //echo distance(52.5173449, -13.463084900000013,52.5019, 13.4554, "K") . " Kilometers<br>";	
        //echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";
    }
    /**
     * 
     * @param type $lat1
     * @param type $lng1
     * @param type $lat2
     * @param type $lng2
     * @return type
     */
    public function getDistantByLocation($lat1, $lng1, $lat2, $lng2,$r = 0) {
        $r = $r * 1000;
        
        $dLon = deg2rad($lng2 - $lng1);
        $dLat = deg2rad($lat2 - $lat1);
        $dLat1 = deg2rad($lat1);
        // $dLat2 = deg2rad($lat2);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos($dLat1) * cos($dLat1) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $d = $r * $c;
        return $d;
    }
    /**
     * 
     */
    public function getLantLongUser(){
        $criteria = new CDbCriteria();
        $criteria->addCondition("lat <> 0 AND lng <>0 AND lat <> '' AND lng <> ''");
        $users = Users::model()->findAll($criteria);
        return $users;
    }

}

?>
