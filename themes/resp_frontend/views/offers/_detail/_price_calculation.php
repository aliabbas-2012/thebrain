<div class="yelow-bg">
    <label><?php echo Yii::t('detailOffer', 'Check out my price offers') ?></label>
</div>
<?php
$criteria = new CDbCriteria();
$criteria->select = "price,start,end";
$criteria->addCondition("item_id = :item_id AND (t.start IS NOT NULL OR t.end IS NOT NULL)");
$criteria->params = array("item_id" => $model->id);

$hours_price = BspItemPriceOfferHour::model()->findAll($criteria);
$day_price = BspItemPriceOfferDay::model()->findAll($criteria);
$week_price = BspItemPriceOfferWeek::model()->findAll($criteria);
$month_price = BspItemPriceOfferMonth::model()->findAll($criteria);
?>
<div id='price_detail'>
    <p><?php echo Yii::t('detailOffer', 'Price Offers'); ?> </p>
    <p class="price-detail-label">
        <?php echo Yii::t('detailOffer', 'Calculate Price'); ?> 
    </p>
    <?php
    foreach ($hours_price as $hour):
        $interval = 0;
        if ($hour->end >= $hour->start) {
            $interval = ($hour->end - $hour->start);
            $interval = ceil($interval);
        } else if ($hour->end == "") {
            $interval = ceil($hour->start);
        }
        ?>
        <div class='price-type'>
            <div class='col-lg-10'><?php echo $interval; ?> Hour</div>
            <div class='col-lg-2'>€ <?php echo $hour->price; ?></div>
        </div>
        <?php
    endforeach;
    ?>
    <?php
    foreach ($day_price as $day):
        $interval = 0;
        if ($day->end >= $day->start) {
            $interval = ($day->end - $day->start);
            $interval = ceil($interval);
        } else if ($day->end == "") {
            $interval = ceil($day->start);
        }
        ?>
        <div class='price-type'>
            <div class='col-lg-10'><?php echo $interval; ?> Day </div>
            <div class='col-lg-2'>€ <?php echo $day->price; ?></div>
        </div>
        <?php
    endforeach;
    ?>
    <?php
    foreach ($week_price as $week):
        $interval = 0;
        if ($week->end >= $week->start) {
            $interval = ($week->end - $week->start);
            $interval = ceil($interval);
        } else if ($week->end == "") {
            $interval = ceil($week->start);
        }
        ?>
        <div class='price-type'>
            <div class='col-lg-10'><?php echo $interval; ?> Week </div>
            <div class='col-lg-2'>€ <?php echo $week->price; ?></div>
        </div>
        <?php
    endforeach;
    ?>
    <?php
    foreach ($month_price as $month):
        $interval = 0;
        if ($month->end >= $month->start) {
            $interval = ($month->end - $month->start);
            $interval = ceil($interval);
        } else if ($month->end == "") {
            $interval = ceil($month->start);
        }
        ?>
        <div class='price-type'>
            <div class='col-lg-10'><?php echo $interval; ?> Month </div>
            <div class='col-lg-2'>€ <?php echo $month->price; ?></div>
        </div>
        <?php
    endforeach;
    ?>

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