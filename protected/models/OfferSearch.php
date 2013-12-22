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
    public $location;

    /**
     *
     * @var type 
     */
    public $distance;

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.


        return array(
            array('keword, location,distance', 'safe'),
        );
    }

}

?>
