<div class="yelow-bg">
    <label><?php echo Yii::t('detailOffer', 'Check out my price offers') ?></label>
</div>
<div id='price_detail'>
    <p><?php echo Yii::t('detailOffer', 'Price Offers'); ?> </p>
    <p class="price-detail-label">
        <?php echo Yii::t('detailOffer', 'Calculate Price'); ?> 
    </p>

    <div class='price-type'>
        <div class='col-lg-10'>1 Hour </div>
        <div class='col-lg-2'>€ 6</div>
    </div>
    <div class='price-type'>
        <div class='col-lg-10'> 2 Hours (per Hour)</div>
        <div class='col-lg-2'>€ 6</div>
    </div>
    <div class='price-type'>
        <div class='col-lg-10'>4 Hours (per Hour) </div>
        <div class='col-lg-2'>€ 6</div>
    </div>
    <div class='clear'></div>
    <?php
    $priceCalF = new PriceCalculation();
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'price-form',
        'enableAjaxValidation' => false,
        'action' => $this->createUrl("/web/offers/calculatePrice"),
        'htmlOptions' => array(
            'class' => 'form-horizontal',
        )
    ));
    $time_arr = array();
    for ($i = 0; $i <= 23; $i++) {
        $time_arr["0" . $i . ":00:00"] = "0" . $i . ":00";
    }
    echo $form->hiddenField($priceCalF, "item_id", array("value" => $model->id));
    ?>
    <div class='col-lg-12'>
        <div class='col-lg-6'>

            <?php echo $form->textField($priceCalF, "start_date", array('style' => "width:120px;")); ?>
            <div class='pricetextleft'><?php echo Yii::t('detailOffer', 'start date'); ?>  </div>

        </div>

        <div class='col-lg-6'>
            <?php echo $form->dropDownList($priceCalF, "start_time", $time_arr, array('style' => "width:120px;")); ?>
            <div class='pricetextright'><?php echo Yii::t('detailOffer', 'start time'); ?> </div>

        </div>
    </div>
    <div class='col-lg-12'>

        <div class='col-lg-6'>
            <?php echo $form->textField($priceCalF, "end_date", array('style' => "width:120px;")); ?>
            <div class='pricetextleft'><?php echo Yii::t('detailOffer', 'end date'); ?> </div>

        </div>

        <div class='col-lg-6'>
            <?php echo $form->dropDownList($priceCalF, "end_time", $time_arr, array('style' => "width:120px;")); ?>
            <div class='pricetextright'><?php echo Yii::t('detailOffer', 'end time'); ?> </div>

        </div>
    </div>

    <div id="buttonCalculate"><?php echo Yii::t('detailOffer', 'Calculate Price'); ?></div>
    <?php
    $this->endWidget();
    ?>
    <div class='clear'></div>
    <div id="priceTotal" class="col-lg-12">
        <div class="col-lg-3 price-label" style=''>
            Price
        </div>
        <div class="col-lg-9 price-calculation">

            <div id="kqtinh" class='col-lg-9'>000,00</div>
            <sup class='col-lg-2'> €</sup>
        </div>
    </div>
    <div class='col-lg-12' class="time-selection-container" >
        Time selection:-<span id="time-selection"></span>
    </div>
</div>