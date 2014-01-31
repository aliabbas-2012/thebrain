<div id="type_offer_3" class="type_offer">
    <p id="price_offer" class="font18 fontArial" style="margin-top: 70px;">

        I want to offer additional prices per 
        <span id="period" class="font-red">Day</span>
    </p>
    <div id="PriceOffer-2" class="col-lg-12 div50percent floatLeft PriceOffer">
        <div>
            <span class="col-lg-3" style="font-size: 15px;">
                <input class="optionType" type="radio" value="abs" name="hour" onclick="change_price_option(this)">
                Absolute Rate:
            </span>
            <span class="col-lg-3" style="margin-bottom:80px; font-size: 15px;">
                <input class="optionType" type="radio" value="range" name="hour" onclick="change_price_option(this)">
                Breakdown Rate:
            </span>
            <span class="col-lg-6">
                <input type="button" class="k-button row-add" style="float:right" partial="_price_offer_day_row" value="Add new Rate">
            </span>

        </div>
        <div class="clear"></div>
        <div class="header-row">
            <div class="col-lg-2">
                <span class="start_time_label" style="display: none">Start </span>
                Time 
            </div>
            <div class="col-lg-2 end_time_label" style="display: none">
                End Time
            </div>
            <div class="col-lg-2">
                Period
            </div>
            <div class="col-lg-3">
                Price
            </div>
            <div class="col-lg-3">

            </div>
        </div>
        <div class="clear"></div>
        <?php
        /* Hide or show this div */
        if (!isset($_POST['BspItemPriceOfferDay']) && $model->isNewRecord) {
            $offer_type [] = new BspItemPriceOfferDay;
            $model->item_price_offers_day = $offer_type;
        }
        ?>
        <?php
        /* for loading with js */

        if (isset($_POST['BspItemPriceOfferDay']) || (count($model->item_price_offers_day) > 0)) {
            foreach ($model->item_price_offers_day as $key => $relationModel) {
                $this->renderPartial("//offers/price_offers/_price_offer_day_row", array("model" => $relationModel, 'index' => $key), false, true);
            }
        }
        ?>
        <?php ?>
    </div>    
</div>
