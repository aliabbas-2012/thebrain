<link href="<?php echo Yii::app()->theme->baseUrl ?>/style/detail.css" rel="stylesheet" />
<div class="alert alert-warning" style="display: none"></div>
<div class="alert alert-success" style="display: none"></div>

<?php
$disount_ofer_price = Yii::t('postOffer', "Publish for ") . $payPAllSetting['discount_offer_rate'];
$publish_free = Yii::t('postOffer', "Publish for free");

//header('Content-Type: text/html; charset=utf-8');
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'post-form',
    //'enableClientValidation' => true,
    'htmlOptions' => array('enctype' => 'multipart/form-data',),
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));
//showing error summary
$this->renderPartial("//offers/offer_errors/_offer_errors", array("model" => $model, "user" => $user));
?>

<div class="clear"></div>
<?php $this->renderPartial("//offers/_post_offer", array("model" => $model, "form" => $form, "user" => $user)) ?>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <?php $this->renderPartial("//offers/price_offers/item_price_offers_day", array("model" => $model)); ?>
        <div class="clear"></div>
        <?php $this->renderPartial("//offers/price_offers/item_price_offers_hour", array("model" => $model)); ?>
        <div class="clear"></div>

        <?php $this->renderPartial("//offers/price_offers/item_price_offers_month", array("model" => $model)); ?>
        <div class="clear"></div>

        <?php $this->renderPartial("//offers/price_offers/item_price_offers_week", array("model" => $model)); ?>
        <div class="clear"></div>

    </div>
</div>
<div class="row">
    <div class="lineseperation">
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <label class="titleOption">
                <?php echo Yii::t('postOffer', 'I offer'); ?>
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
            <label class="obligatory">(obligatory)</label>
        </div>
        <div class="col-lg-12">
            <div id="choose_radio">
                <?php
                echo $form->radioButtonList($model, 'group_id', BspCategory::model()->getRootCategories(), array(
                    'onchange' => 'thepuzzleadmin.fillKendoDropDown(this,"' . $this->createUrl("/web/offers/getChildrenCategories") . '","BspItemFrontEnd_category_id",false)',
                    'separator' => '', 'labelOptions' => array('class' => 'group_choose')), array(
                ));
                ?>

            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="lineseperation">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <label class="titleOption">
                <?php echo Yii::t('postOffer', 'My Categories'); ?>
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
            <label class="obligatory">(obligatory)</label>
        </div>
        <div class="col-lg-12">

            <?php
            if (!$model->isNewRecord || $model->hasErrors()):
                $category_list = array("" => "Select") + BspCategory::model()->getChildrenCategories($model->group_id);
            else :
                $category_list = array("" => "Select");
            endif;

            echo $form->dropDownList($model, 'category_id', $category_list, array(
                'class' => 'categorie',
                'onchange' => 'thepuzzleadmin.fillKendoDropDown(this,"' . $this->createUrl("/web/offers/getChildrenCategories") . '","BspItemFrontEnd_sub_category_id",true)'
            ));
            ?>
            <?php
            if (!$model->isNewRecord || $model->hasErrors()):
                $category_list = array("" => "Select") + BspCategory::model()->getChildrenCategories($model->category_id);
            else :
                $category_list = array("" => "Select");
            endif;

            echo $form->dropDownList($model, 'sub_category_id', $category_list, array('class' => 'categorie'));
            ?>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="lineseperation">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id="changePrice">
            <div class="col-lg-7">
                <div id="wouldLike" class="floatLeft">

                    <?php echo $form->checkBox($model, 'special_deal', array("id" => "w-like")); ?>
                    <label class="font18" for="w-like"> I would like to post my offer as a special deal. For</label>
                    <div class="clear"></div>
                    <span> 
                        <?php echo Yii::t('postOffer', '*Choose this Option will cost you'); ?>
                        <sup>€</sup>
                        <?php echo Yii::t('postOffer', 'by the of posting and the upper'); ?>
                        <br>
                        <?php echo Yii::t('postOffer', 'Price will be crosses out and your Discount-Price will be highlighted'); ?>
                    </span>
                </div>
            </div>
            <div class="col-lg-5">
                <div id="discount-price" style="<?php echo $model->per_price == 1 || empty($model->per_price) ? "display:none" : ""; ?>">

                    <?php
                    $key_up = array("onkeyup" => "
                            its_val = jQuery.trim(jQuery(this).val());
                            if(its_val !='' && its_val>0){
                                jQuery('#btn-submit').html('" . $disount_ofer_price . "')
                            }
                            else {
                                 jQuery('#btn-submit').html('" . $publish_free . "');
                            }
                        ");
                    if (!$model->isNewRecord) {
                        $key_up = array();
                    }
                    echo $form->textField($model, 'discount_price', array(
                        'class' => 'k-textbox k-textbox',
                        'placeholder' => "My New Price is?...",
                        "font-size" => "font-size: 20px",
                        "pattern" => "\d{1,11}",
                        "id" => "txtdiscount",
                            )+$key_up
                    );
                    ?>
                    <sup>€</sup>
                    <p class="fontsize_title">Discount-Price</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="lineseperation">
        </div>
    </div>
</div>
<div class="container">
    <?php
    if ($is_user_update == true) {
        $this->renderPartial("//offers/_user_offer", array("model" => $user, "form" => $form));
    } else {
        echo $form->hiddenField($user, "_dummy");
    }
    ?>
</div>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="lineseperation">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <label class="titleOption">
                My Images/Videos
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
        </div>
        <div class="row">
            <div id="image">
                <div class="col-lg-6">
                    <div class="floatLeft my-image">
                        <div class="hidden_elment">

                            <?php
                            $uploadTemp = new UploadTemp();
                            echo zHtml::activeFileField($uploadTemp, '[' . 3 . ']upload_temp_image');
                            ?>
                        </div>
                        <div class="offer-vidoes">
                            <div class="k-widget k-upload btChangeimagepp">
                                <div class="k-dropzone">
                                    <div class="k-button k-upload-button">

                                        <span id="upload-image-trigger">Upload your Images</span>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (!isset($_POST['BspItemVideoFrontEnd']) && $model->isNewRecord) {
                                $m_video = array();
                                for ($i = 0; $i <= 4; $i++) {
                                    $video_m = new BspItemVideoFrontEnd;
                                    //$catM->category_id = $cat->id;
                                    $m_video[] = $video_m;
                                }
                                $model->item_video_front = $m_video;
                            }
                            $index = 0;
                            foreach ($model->item_video_front as $vid_model) {
                                $this->renderPartial("//offers/_offer_videos", array("model" => $vid_model, "index" => $index));
                                $index++;
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php
                    echo $form->hiddenField($model, "_offer_images");
                    $this->renderPartial("//offers/_load_image_urls", array("model" => $model));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="lineseperation">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <label class="titleOption">
                My Sounds
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
        </div>
        <div class="row">
            <p class="font18 mysounds"><?php Yii::t('postOffer', "Here you can add your Sounds"); ?></p>
            <?php
            if (!isset($_POST['BspItemSoundUrl']) && $model->isNewRecord) {
                $m_sound = array();
                for ($i = 0; $i <= 2; $i++) {
                    $sound = new BspItemSoundUrl;
                    //$catM->category_id = $cat->id;
                    $m_sound[] = $sound;
                }
                $model->item_related_sounds = $m_sound;
            }
            $index = 0;
            foreach ($model->item_related_sounds as $sound_model) {
                $this->renderPartial("//offers/_offer_sound", array("model" => $sound_model, "index" => $index));
                $index++;
            }
            ?>
        </div>

    </div>
</div>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="lineseperation">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <label class="titleOption">
                Description
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
            <label class="obligatory">(obligatory)</label>
        </div>
        <div class="col-lg-12">

            <?php
            echo $form->textArea(
                    $model, 'description', array(
                'class' => 'font18 k-textbox',
                "id" => "textDecription",
                'placeholder' => 'Type here your Description. Be as detailed as posible...',
                    )
            );
            ?>
        </div>
        <div class="for-margin">
            <p class="font18">
                <span>To get started I will need from the buyer: </span>
            </p>
        </div>
        <div class="col-lg-12">
            <?php
            echo $form->textArea(
                    $model, 'seo_description', array(
                'class' => 'font18 k-textbox',
                "id" => "textStart",
                'placeholder' => 'TyType here what all you need from the buyer to get started: ',
                    )
            );
            ?>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="lineseperation">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <label class="titleOption">
                My offer is ready to deliver
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
            <label class="obligatory">(obligatory)</label>
        </div>
        <div class="col-lg-12">

            <?php echo $form->dropDownList($model, 'is_public', $model->_ready_to_deliver, array('class' => 'isshow', 'id' => 'immediately'));
            ?>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="lineseperation">
        </div>
    </div>
</div>

<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="lineseperation">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id="tcs">

            <?php
            echo $form->checkBox($model, '_is_confirm', array("id" => "public_offer", "class" => "floatLeft", "margin" => "margin: 3px;"));
            echo $form->hiddenField($model, "lat");
            echo $form->hiddenField($model, "lng");
            ?>
            <span class="k-invalid-msg" data-for="public_offer"></span>
            <label class="fontsize_title floatLeft"  for="public_offer">
                I confirm that I am able to deliver this service to Buyers within the delivery time specified.I will update or pause my Hourlie if I can no longer meet this delivery time. I understand that late delivery will adversely affect my rankings on ThePuzzzle and will entitle the Buyer to a refund. See
                <a class="tncs" href="javascript:void(0)">T&Cs </a>
            </label>
        </div>
    </div>
</div>
<div class="container post-bottom">
    <div class="row">
        <div class="col-lg-12">
            <div class="submit" align="center">
                <a id="btn-submit" class="floatRight" href="javascript:void(0)" 
                   onclick="thepuzzleadmin.postOffer()"><?php echo $publish_free; ?>

                </a>
            </div>
        </div>
        <div class="col-lg-12">
            <div align="center">
                <a href="javascript:void(0)" onclick="$(window).scrollTop(0);">
                    <img id="returnTop" src="<?php echo Yii::app()->theme->baseUrl ?>/images/returnTop.jpg">
                </a>
            </div>
        </div>
    </div>
</div>

<?php $this->endWidget(); ?>

<script>
                       var background_url = "<?php
echo $this->createUrl("/site/uploadTemp", array(
    "index" => 1,
    "model" => get_class($model), "attribute" => "BspItemFrontEnd_background_image")
);
?>";
                       var avatar_url = "<?php
echo $this->createUrl("/site/uploadTemp", array(
    "index" => 2,
    "model" => get_class($user), "attribute" => "Users_avatar")
);
?>";
                       var upload_images_url = "<?php
echo $this->createUrl("/site/uploadTemp", array(
    "index" => 3,
    "model" => get_class($model), "attribute" => "BspItemFrontEnd_upload_images")
);
?>";
                       var addPartial = "<?php
echo $this->createUrl("/web/offers/addpartial");
?>";
                       /**
                        *  change price option
                        * @param {type} obj 
                        * @returns {undefined}
                        */
                       function change_price_option(obj) {
                           jQuery(obj).parent().parent().parent().find(".change_price_option").val(jQuery(obj).val());

                           if (jQuery(obj).val() == "range") {
                               jQuery(obj).parent().parent().parent().find(".start_time_label").show();
                               jQuery(obj).parent().parent().parent().find(".end_time_label").show();
                               jQuery(obj).parent().parent().parent().find(".end_field").show();
                           }
                           else {
                               jQuery(obj).parent().parent().parent().find(".start_time_label").hide();
                               jQuery(obj).parent().parent().parent().find(".end_time_label").hide();
                               jQuery(obj).parent().parent().parent().find(".end_field").hide();

                           }
                           //.find(".change_price_option")
                       }
                       jQuery(function() {
                           //CASE IS DIFFERNT NOW
                           //WITH HOUR ONLY HOUR
                           //WITH DAY IS HOUR AND DAY
                           //WITH WEEK IS HOUR , DAY , WEEK
                           // WITH MONTH IS HOUR , DAY, WEEK AND MONTH

                           jQuery("#BspItemFrontEnd_per_price").change(function() {
                               elem_id = jQuery(this).val();
                               jQuery(".type_offer").hide();
                               if (elem_id == 2) {
                                   jQuery("#type_offer_" + elem_id).show();
                               }
                               else if (elem_id == 3) {
                                   jQuery("#type_offer_2").show();
                                   jQuery("#type_offer_3").show();
                               }
                               else if (elem_id == 4) {
                                   jQuery("#type_offer_2").show();
                                   jQuery("#type_offer_3").show();
                                   jQuery("#type_offer_4").show();
                               }
                               else if (elem_id == 5) {
                                   jQuery("#type_offer_2").show();
                                   jQuery("#type_offer_3").show();
                                   jQuery("#type_offer_4").show();
                                   jQuery("#type_offer_5").show();
                               }

                           })
                           jQuery("#BspItemFrontEnd_per_price").trigger("change");
                           jQuery("#BspItemFrontEnd_per_price").kendoDropDownList();
                           jQuery("#BspItemFrontEnd_currency_id").kendoDropDownList();
                           jQuery("#BspItemFrontEnd_category_id").kendoDropDownList();
                           jQuery("#BspItemFrontEnd_sub_category_id").kendoDropDownList();
                           jQuery("#immediately").kendoDropDownList();


                           jQuery(".row-add").click(function() {
                               data_params = {};
                               data_params ['partial'] = jQuery(this).attr("partial");
                               data_params ['ajax'] = 1;

                               parent = jQuery(this).parent().parent().parent();
                               data_params ['index'] = parseInt(parent.find(".current_index:last").val()) + 1;
                               if (typeof(parent.find(".current_index:last").val()) == "undefined") {
                                   data_params ['index'] = 0;
                               }

                               thepuzzleadmin.updateElementAjaxParameter(addPartial, parent, data_params);
                           })

                           //getting which price offer is open
                           if (typeof(jQuery("#type_offer_" + jQuery("#BspItemFrontEnd_per_price").val())) != "undefined") {
                               jQuery("#type_offer_" + jQuery("#BspItemFrontEnd_per_price").val()).show();
                           }
                           // select upload background

                           jQuery(".select-bg-img span a").click(function() {
                               jQuery("#UploadTemp_1_upload_temp_image").trigger("click");
                           })
                           jQuery("#UploadTemp_1_upload_temp_image").kendoUpload({
                               async: {
                                   saveUrl: background_url,
                                   autoUpload: true
                               },
                               localization: {
                                   "select": "Select your background image"
                               },
                               cancel: function(e) {

                               },
                               complete: function(e) {

                               },
                               error: function(e) {

                               },
                               progress: function(e) {

                               },
                               remove: function(e) {

                               },
                               select: function(e) {
                                   jQuery("#loading").show();

                               },
                               success: function(e) {

                                   path = "<?php echo Yii::app()->baseUrl . "/uploads/temp/" . Yii::app()->user->id . "/BspItemFrontEnd/BspItemFrontEnd_background_image/" ?>" + e.response.file;
                                   jQuery("#loading").hide();
                                   jQuery("#BspItemFrontEnd_background_image").val(e.response.file);

                                   jQuery(".i_offer").attr("style", "background: url(" + path + ")");

                               },
                               upload: function(e) {

                               },
                           });


                           //select avtar image


                           jQuery(".select-avatar-img span a").click(function() {
                               jQuery("#UploadTemp_2_upload_temp_image").trigger("click");
                           })
                           jQuery("#UploadTemp_2_upload_temp_image").kendoUpload({
                               async: {
                                   saveUrl: avatar_url,
                                   autoUpload: true
                               },
                               localization: {
                                   "select": "Select Your avatar"
                               },
                               cancel: function(e) {

                               },
                               complete: function(e) {

                               },
                               error: function(e) {

                               },
                               progress: function(e) {

                               },
                               remove: function(e) {

                               },
                               select: function(e) {
                                   jQuery("#loading").show();

                               },
                               success: function(e) {

                                   path = "<?php echo Yii::app()->baseUrl . "/uploads/temp/" . Yii::app()->user->id . "/ChangeUser/Users_avatar/" ?>" + e.response.file;
                                   jQuery("#loading").hide();
                                   jQuery("#ChangeUser_avatar").val(e.response.file);


                                   jQuery(".over-post-avata").attr("src", path);

                               },
                               upload: function(e) {

                               },
                           });


                       })



</script>