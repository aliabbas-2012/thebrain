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
    public $keyword;
    public $location,$lat,$lng;
    
    public $special_deal,$withVideo,$withSound,$lowPrice,$highPrice,$popularity,$nearFirst;

    /**
     *
     * @var type 
     */
    public $distance;

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.


        return array(
            array('keword, location,distance,lng,lat', 'safe'),
            array('special_deal, withVideo,withSound,lowPrice,highPrice,popularity,nearFirst', 'safe'),
        );
    }

}

?>
