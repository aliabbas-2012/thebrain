<?php

/**
 * This is the model class for table "bsp_item_price_offer".
 *
 * The followings are the available columns in table 'bsp_item_price_offer':
 * @property integer $id
 * @property integer $item_id
 * @property string $option
 * @property double $price
 * @property integer $period
 * @property integer $start
 * @property integer $end
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class BspItemPriceOfferHour extends BspItemPriceOffer {

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return BspItemPriceOffer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
