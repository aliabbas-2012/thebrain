<?php

/**
 * 
 */
class PriceCalculation extends CFormModel {
    public $start_date,$start_time,$end_date,$end_time;
     public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('start_date,start_time,end_date,end_time', 'safe'),
        );
    }
}

?>
