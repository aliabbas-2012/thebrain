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
        <img item_id ="<?php echo $model->id ?>" class="add-wishlist" src="<?php echo Yii::app()->theme->baseUrl ?>/images/addtowishlist.png" 
             alt="add to wishlist" original-title="Save this offer">
    </div>
    <div class="col-lg-2">
        <a id="addlike" item_id ='<?php echo $model->id; ?>' class="detail-addlike" href="javascript:void(0);" status="2">+1 like</a>
    </div>

</div>
<div class="clear"></div>
<div class="space-blog"></div>

<div class="col-lg-3">
    <div id="Portfolio" ><?php echo Yii::t('detailOffer', 'Images & Videos') ?></div>
</div>
<div class="clear"></div>
<div class="space-blog"></div>
<div class="clear"></div>
<div>
    <div class="col-lg-12 detail-image-video">
        <?php
        foreach ($model->image_items as $item_img):
            ?>
            <div>
                <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port-1.jpg" ?>'>
                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/port-1.jpg", '', array("height" => "200px"));
                    ?>
                </a>
            </div>
            <?php
        endforeach;
        if (count($model->image_items) == 0) {
            echo "No Image Found";
        }
        ?>
    </div>
    <div class='clear'></div>
    <div class="space-blog"></div>
    <div id='soundcloud'>
        <?php
        echo Yii::t('detailOffer', 'Sounds List');
        if (empty($model->item_related_sounds)) {
            echo "<div class='clear'></div>";
            echo "No Sound Found";
        }
        ?>

    </div>
    <?php
    foreach ($model->item_related_sounds as $sound):
        echo '<div class="col-lg-12" >' . $sound->url . '</div>';
    endforeach;
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
                    <div class='col-lg-4' tab-no='3'>
                        <strong>
                            (
                            <span id="comments_count" style="color:#000000;">
                                <?php echo $model->numComments; ?>
                            </span>
                            ) 
                        </strong>

                        <?php echo Yii::t('detailOffer', 'Reviews'); ?> 
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
                        <div class="space-blog"></div>
                        <div class='col-lg-12'>
                            <div class='hour-day'>
                                <span></span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Tu.</span>
                                <span class='col-lg-6'>
                                    -
                                    <?php if (isset($priceCal[0]) && $priceCal[0]->active != 1) { ?>
                                        <span style="color: red; font-weight: bold;"><?php echo Yii::t('detailOffer', 'Closed') ?></span>
                                        <?php
                                    } else {
                                        echo (isset($priceCal[0])) ? number_format($priceCal[0]->price) : '' . '&nbsp;' . $currency_symbol;
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>We.</span>
                                <span class='col-lg-6'>
                                    -
                                    <?php if (isset($priceCal[1]) && $priceCal[1]->active != 1) { ?>
                                        <span style="color: red; font-weight: bold;"><?php echo Yii::t('detailOffer', 'Closed') ?></span>
                                        <?php
                                    } else {
                                        echo (isset($priceCal[1])) ? number_format($priceCal[1]->price) : '' . '&nbsp;' . $currency_symbol;
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Th.</span>
                                <span class='col-lg-6'>
                                    -
                                    <?php if (isset($priceCal[2]) && $priceCal[1]->active != 2) { ?>
                                        <span style="color: red; font-weight: bold;"><?php echo Yii::t('detailOffer', 'Closed') ?></span>
                                        <?php
                                    } else {
                                        echo (isset($priceCal[2])) ? number_format($priceCal[2]->price) : '' . '&nbsp;' . $currency_symbol;
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Fr.</span>
                                <span class='col-lg-6'>
                                    -
                                    <?php if (isset($priceCal[3]) && $priceCal[3]->active != 1) { ?>
                                        <span style="color: red; font-weight: bold;"><?php echo Yii::t('detailOffer', 'Closed') ?></span>
                                        <?php
                                    } else {
                                        echo (isset($priceCal[4])) ? number_format($priceCal[4]->price) : '' . '&nbsp;' . $currency_symbol;
                                    }
                                    ?>
                                </span>

                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Sa.</span>
                                <span class='col-lg-6'>
                                    -
                                    <?php if (isset($priceCal[5]) && $priceCal[5]->active != 1) { ?>
                                        <span style="color: red; font-weight: bold;"><?php echo Yii::t('detailOffer', 'Closed') ?></span>
                                        <?php
                                    } else {
                                        echo (isset($priceCal[5])) ? number_format($priceCal[5]->price) : '' . '&nbsp;' . $currency_symbol;
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Su.</span>
                                <span class='col-lg-6'>
                                    -
                                    <?php if (isset($priceCal[6]) && $priceCal[6]->active != 1) { ?>
                                        <span style="color: red; font-weight: bold;"><?php echo Yii::t('detailOffer', 'Closed') ?></span>
                                        <?php
                                    } else {
                                        echo (isset($priceCal[6])) ? number_format($priceCal[6]->price) : '' . '&nbsp;' . $currency_symbol;
                                    }
                                    ?>
                                </span>
                            </div>

                        </div>
                        <div class='clear'></div>
                        <div class="space-blog"></div>
                        <span class="opening text-bold">To get started I will need from the buyer:</span>
                    </div>
                </div>
                <div class='tab-3-data tab-data' style='display:none'>
                    <div class='col-lg-12'>
                        <div class="space-blog"></div>
                        <div class="space-blog"></div>

                    </div>
                </div>

            </div>

            <?php
            $this->renderPartial("//offers/_advertising");
            ?>

        </div>
        <div class='col-lg-4'>
            <div class="yelow-bg">
                <label><?php echo Yii::t('detailOffer', 'Check out my price offers') ?></label>
            </div>
            <div id='price_detail'>
                <p>Price Offers</p>
                <p style="margin-top: 30px">Calculate Price</p>

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
                echo $form->hiddenField($priceCalF,"item_id",array("value"=>$model->id));
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

                <div id="buttonCalculate">Calculate Price</div>
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
                <div class='col-lg-12' style='color: #b5b5b5; padding-bottom: 10px; text-align: right'>
                    Time selection:-<span id="time-selection"></span>
                </div>
            </div>
            <div class='clear'></div>
            <div id="calendar">

            </div>
        </div>
    </div>

</div>
<div class="clear"></div>
<div class="space-blog"></div>
<div class="red-bg">
    <label>Check out my other offers</label>
</div>
<div class="clear"></div>
<?php
$criteria = new CDbCriteria();
$criteria->limit = "16";
$criteria->order = "id DESC";
$criteria->addCondition('id <> ' . $model->id . ' AND category_id =' . $model->category_id);
$items = BspItem::model()->findAll($criteria);
$this->renderPartial("//user/_tab_items", array("items" => $items));
?>
<script>
    jQuery(function() {
        jQuery(".detail-tab-part>div").click(function() {
            jQuery(".detail-tab-part>div").removeClass("actived");
            jQuery(this).addClass("actived");
            jQuery(".tab-data").hide();
            jQuery(".tab-" + jQuery(this).attr("tab-no") + "-data").show();
        })
        $("#calendar").kendoCalendar();

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
        jQuery("#PriceCalculation_start_date").kendoDatePicker({format: "yyyy/MM/dd",});
        jQuery("#PriceCalculation_end_date").kendoDatePicker({format: "yyyy/MM/dd",});
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
<style>
    .add-wishlist {
        cursor: pointer;
    }
</style>    