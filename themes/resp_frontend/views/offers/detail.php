<div class="space-blog"></div>
<div class='col-lg-12'>
    <div class="col-lg-3">
        <div class="detail-Likes">
            <?php
            $total_likes = BspItemLike::model()->count();
            $likes = BspItemLike::model()->count(array('condition' => "item_id='$model->id'"));
            $percent = 0;
            if ($likes == 0) {
                $likes = '0000';
            } else {
                $percent = ($likes * 100) / $total_likes;
            }
            ?>
            <div class="labeled"><?php echo Yii::t('detailOffer', 'Likes'); ?></div>
            <div class="valued"><?php echo $likes; ?></div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="detail-Likes">
            <div class="labeled"><?php echo Yii::t('detailOffer', 'Ratings'); ?> </div>
            <div class="valued">
                <?php
                $total_rating = 5;

                for ($i = 1; $i <= $total_rating - $model->avgRating; $i++) {
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/star2.jpg", '', array(
                        "id" => "star" . $i, "class" => "starclick"
                    ));
                }
                for ($i = 1; $i <= $model->avgRating; $i++) {
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/images.jpg", '', array(
                        "id" => "star" . $i, "class" => "starclick"
                    ));
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="detail-Likes">
            <div class="labeled"><?php echo Yii::t('detailOffer', 'Orders'); ?></div>
            <div class="valued"><?php echo $model->numOrders; ?></div>
        </div>
    </div>
    <div class="col-lg-1">
        <img 
            item_id ="<?php echo $model->id ?>" class="add-wishlist" 
            data-toggle="tooltip" 
            data-placement="top" 
            src="<?php echo Yii::app()->theme->baseUrl ?>/images/addtowishlist.png" 
            alt="Save this offer" title="Save this offer">
    </div>
    <div class="col-lg-2">
        <a id="addlike" item_id ='<?php echo $model->id; ?>' 
           class="detail-addlike" href="javascript:void(0);" 
           data-toggle="tooltip"
           data-placement="top" 
           title ="Like"
           status="2">+1 like</a>
    </div>

</div>
<div class="clear"></div>
<div class="space-blog"></div>
<div>
    <?php
    if (count($model->image_items) > 0 || count($model->item_video_frnt) > 0) {
        $this->renderPartial("//offers/_detail/_videos_images", array("model" => $model));
    }
    ?>
</div>

<div class="clear"></div>
<div class="space-blog"></div>
<div class="clear"></div>

<div>

    <div class='clear'></div>
    <?php
    if (count($model->item_related_sounds) > 1) {
        $this->renderPartial("//offers/_detail/_sounds", array("model" => $model));
    }
    ?>
    <div class='clear'></div>
    <div class="space-blog"></div>
    <div>
        <div class='col-lg-8'>
            <div id="detail_sub">
                <div class='detail-tab-part'>
                    <div class='col-lg-4 actived' tab-no='1'>

                        <?php echo Yii::t('detailOffer', 'Description'); ?> 
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("width" => "23"));
                        ?>
                    </div>
                    <div class='col-lg-4' tab-no='2'>

                        <?php echo Yii::t('detailOffer', 'Conditions'); ?> 
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("width" => "23"));
                        ?>
                    </div>
                    <div class='col-lg-2' tab-no='3'>
                        <strong>
                            (
                            <span id="comments_count">
                                <?php echo $model->numComments; ?>
                            </span>
                            ) 
                        </strong>

                        <?php echo Yii::t('detailOffer', 'Reviews'); ?> 
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("width" => "23"));
                        ?>
                    </div>
                    <div class='col-lg-2' tab-no='4'>

                        <?php echo Yii::t('detailOffer', 'Map'); ?> 
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("width" => "23"));
                        ?>
                    </div>

                </div>
                <div class='clear'></div>
                <div class='tab-1-data tab-data' >
                    <div>
                        <div class='col-lg-10 des-title'>
                            <?php echo $model->name ?>
                        </div>
                        <div class='col-lg-2'>
                            <?php
                            $currency_symbol = "&euro;";
                            $price = 0;
                            if (!empty($model->currency->symbol)) {
                                $currency_symbol = $model->currency->symbol;
                            }
                            if ($model->special_deal == 1) {
                                $price = $model->discount_price;
                            } else {
                                $price = $model->price;
                            }
                            ?>
                            <div class='unit-price'><?php echo $currency_symbol; ?></div>
                            <div class='des-price'><?php echo $price; ?></div>
                        </div>
                    </div>
                    <div class='clear'></div>
                    <div class='col-lg-12 des-content'>
                        <?php echo $model->description ?>
                    </div>
                </div>
                <div class='tab-2-data tab-data' style='display:none'>
                    <div class='col-lg-12'>
                        <!--                        <div class="space-blog"></div>
                                                <div class="space-blog"></div>-->

                        <div class='clear'></div>
                        <div class="space-blog"></div>
                        <span class="opening text-bold">
                            <?php echo Yii::t('detailOffer', 'To get started I will need from the buyer:'); ?> 
                        </span>
                    </div>
                </div>
                <div class='tab-3-data tab-data' style='display:none'>
                    <div class='col-lg-12'>
                        <div class="space-blog"></div>
                        <?php
                        $this->renderPartial("//offers/_detail/_reviews", array("model" => $model));
                        ?>
                    </div>
                </div>
                <div class='tab-4-data tab-data' style='display:none'>
                    <div class='col-lg-12'>
                        <div class="space-blog"></div>
                        <div>
                            <?php
                            if ($model->lat != "" && $model->lng != "") {
                                $this->renderPartial("//offers/_detail/_map", array("model" => $model));
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>



        </div>
        <div class='col-lg-4'>
            <div class="yelow-bg">
                <label><?php echo Yii::t('detailOffer', 'Check out my price offers') ?></label>
            </div>
            <div id='price_detail'>
                <p>Price Offers</p>
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
                    </div>
                    <div class='col-lg-6'>
                        <?php echo $form->dropDownList($priceCalF, "start_time", $time_arr, array('style' => "width:120px;")); ?>
                    </div>
                </div>
                <div class='col-lg-12'>
                    <div class='col-lg-6'>
                        <?php echo $form->textField($priceCalF, "end_date", array('style' => "width:120px;")); ?>
                    </div>
                    <div class='col-lg-6'>
                        <?php echo $form->dropDownList($priceCalF, "end_time", $time_arr, array('style' => "width:120px;")); ?>
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
            <?php
            $this->renderPartial("//offers/_advertising");
            ?>
        </div>
    </div>

</div>
<div class="clear"></div>
<div class="space-blog"></div>
<div class="col-lg-12">
    <div class="col-lg-10">

        <div id="keyword">
            <?php echo Yii::t('detailOffer', 'Keywords'); ?>
            <?php
            $keyword = BspItemSearchKeyword::model()->find("item_id = " . $model->id);
            echo isset($keyword->keyword) ? $keyword->keyword : "";
            ?>
        </div>

    </div>
    <div class="col-lg-2">
        <div  id="Nr"><?php echo Yii::t('detailOffer', 'Offer Nr:'); ?> <?php echo $model->offer_number; ?></div>
    </div>
</div>
<?php
$criteria = new CDbCriteria();

$criteria->order = "id DESC";
$criteria->addCondition('id <> ' . $model->id . ' AND user_id =' . $model->user_id);
$criteria->condition = "is_public>0 AND iStatus = 1";

$dataProvider = new CActiveDataProvider('BspItem', array(
    'criteria' => $criteria,
    'pagination' => array('pageSize' => 4)
        ));
if ($dataProvider->getTotalItemCount() > 0):
    ?>
    <div class="red-bg">
        <label><?php echo Yii::t('detailOffer', 'Check out my other offers'); ?> </label>
    </div>
    <div class="clear"></div>
    <?php
    $this->renderPartial("//default/_tab_items", array("items" => $dataProvider->getData()));
endif;
?>
<div class="clear"></div>    
<?php
$criteria = new CDbCriteria();

$criteria->order = "id DESC";
$criteria->addCondition('id <> ' . $model->id . ' AND group_id =' . $model->group_id);
$criteria->condition = "is_public>0 AND iStatus = 1";

$dataProvider = new CActiveDataProvider('BspItem', array(
    'criteria' => $criteria,
    'pagination' => array('pageSize' => 4)
        ));
if ($dataProvider->getTotalItemCount() > 0):
    ?>
    <div class="red-bg">
        <label><?php echo Yii::t('detailOffer', 'Relaed Offers'); ?> </label>
    </div>
    <div class="clear"></div>
    <?php
    $this->renderPartial("//default/_tab_items", array("items" => $dataProvider->getData()));
endif;
?>
<script>
    jQuery(function() {
        jQuery(".detail-tab-part>div").click(function() {
            jQuery(".detail-tab-part>div").removeClass("actived");
            jQuery(this).addClass("actived");
            jQuery(".tab-data").hide();
            jQuery(".tab-" + jQuery(this).attr("tab-no") + "-data").show();
        })


        jQuery("#addlike").click(function() {
            if ("<?php echo Yii::app()->user->id ?>" == "") {
                thepuzzleadmin.showAlertBox("Please login First to like ", "warning");
            }
            else {
                item_id = jQuery(this).attr("item_id");
                thepuzzleadmin.updateElementAjax("<?php echo $this->createUrl("/web/user/saveItemLog", array("action" => "like")) ?>?item_id=" + item_id, "", "");
                thepuzzleadmin.showAlertBox("Added to like list ", "success");
            }
        })

        jQuery(".add-wishlist").click(function() {
            if ("<?php echo Yii::app()->user->id ?>" == "") {
                thepuzzleadmin.showAlertBox("Please login First to like ", "warning");
            }
            else {
                item_id = jQuery(this).attr("item_id");
                thepuzzleadmin.updateElementAjax("<?php echo $this->createUrl("/web/user/saveItemLog", array("action" => "favrout")) ?>?item_id=" + item_id, "", "");
                thepuzzleadmin.showAlertBox("Added to favourate list ", "success");
            }
        })
        jQuery("#PriceCalculation_start_date").kendoDatePicker({format: "yyyy/MM/dd", });
        jQuery("#PriceCalculation_end_date").kendoDatePicker({format: "yyyy/MM/dd", });
        $("#PriceCalculation_start_time").kendoDropDownList();
        $("#PriceCalculation_end_time").kendoDropDownList();

        jQuery("#buttonCalculate").click(function() {
            jQuery("#loading").show();
            jQuery.ajax({
                type: "POST",
                url: jQuery("#price-form").attr("action") + "?ajax=1",
                data: jQuery("#price-form").serialize(),
                dataType: "JSON",
                success: function(data)
                {

                    jQuery("#kqtinh").html(data.price);
                    jQuery("#time-selection").html(data.period);
                    jQuery("#loading").hide();

                }
            });
        })
    })
</script>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php
            $recieve_user = Users::model()->findByPk($model->user_id);
            $message = new BspMessage;
            $this->renderPartial("//offers/_sent_message", array("model" => $message, "recieve_user" => $recieve_user));
            ?>
        </div>
    </div>
</div>