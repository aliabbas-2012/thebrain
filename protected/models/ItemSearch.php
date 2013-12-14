<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ItemSearch extends CFormModel {

    /**
     *
     * @var type 
     */
    public $start_price, $end_price;
    public $offer_name, $username;
    public $special_deal;
    public $most_visited;
    public $ratings;
    public $most_viewed;
    public $most_bought;
    public $is_cancel;

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('start_price,end_price,offer_name,username', 'safe'),
            array('most_viewed,special_deal,most_visited,ratings,most_bought,is_cancel', 'safe'),
                // The following rule is used by search().
                // @todo Please remove those attributes that should not be searched.
        );
    }

}

?>
