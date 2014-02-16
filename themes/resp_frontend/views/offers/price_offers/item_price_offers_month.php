<div id="type_offer_4" class="type_offer">
    <p id="price_offer" class="font18 fontArial" >

       <?php echo Yii::t('postOffer', 'I want to offer additional prices per'); ?>
        <span id="period" class="font-red">Month</span>
    </p>
    <div id="PriceOffer-2" class="col-lg-12 div50percent floatLeft PriceOffer">
        <div>
            <span class="col-lg-3 abs-type">
                <input class="optionType" type="radio" value="abs" name="hour" onclick="change_price_option(this)">
                <?php echo Yii::t('postOffer', 'Absolute Rate:'); ?>
            </span>
            <span class="col-lg-3 range-type" >
                <input class="optionType" type="radio" value="range" name="hour" onclick="change_price_option(this)">
                <?php echo Yii::t('postOffer', 'Breakdown Rate:'); ?>
            </span>
            <span class="col-lg-6">
                <input type="button" class="k-button row-add"  partial="_price_offer_month_row" value="Add new Rate">
            </span>

        </div>
        <div class="clear"></div>
        <div class="header-row">
            <div class="col-lg-2">
                <span class="start_time_label" style="display: none"><?php echo Yii::t('postOffer', 'Start'); ?> </span>
                <?php echo Yii::t('postOffer', 'Time'); ?> 
            </div>
            <div class="col-lg-2 end_time_label" style="display: none">
                <?php echo Yii::t('postOffer', 'End Time'); ?>
            </div>
            <div class="col-lg-2">
                <?php echo Yii::t('postOffer', 'Period'); ?>
            </div>
            <div class="col-lg-3">
                <?php echo Yii::t('postOffer', 'Price'); ?>
            </div>
            <div class="col-lg-3">

            </div>
        </div>
        <div class="clear"></div>
        <?php
        /* Hide or show this div */
        if (!isset($_POST['BspItemPriceOfferMonth']) && $model->isNewRecord) {
            $offer_type [] = new BspItemPriceOfferMonth;
            $model->item_price_offers_month = $offer_type;
        }
        ?>
        <?php
        /* for loading with js */

        if (isset($_POST['BspItemPriceOfferMonth']) || (count($model->item_price_offers_month) > 0)) {
            foreach ($model->item_price_offers_month as $key => $relationModel) {
                $this->renderPartial("//offers/price_offers/_price_offer_month_row", array("model" => $relationModel, 'index' => $key), false, true);
            }
        }
        ?>
        <?php ?>
    </div>    
</div>
