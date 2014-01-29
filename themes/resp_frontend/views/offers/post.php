<link href="<?php echo Yii::app()->theme->baseUrl ?>/style/detail.css" rel="stylesheet">
<div class="alert alert-warning" style="display: none"></div>
<div class="alert alert-success" style="display: none"></div>

<?php
header('Content-Type: text/html; charset=utf-8');
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'post-form',
    //'enableClientValidation' => true,
    'htmlOptions' => array('enctype' => 'multipart/form-data',),
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));
?>
<?php $this->renderPartial("//offers/_post_offer", array("model" => $model, "form" => $form)) ?>
<div class="clear"></div>
<div class="container">
    <div class="row">
        <p id="price_offer" class="font18 fontArial" style="margin-top: 70px;">
            <input id="price-offer" type="checkbox" style="width:20px; height: 20px;" value="1" name="priceOption">
            I want to offer additional prices per 
            <span id="period" class="font-red">Hour</span>
        </p>
        <div id="PriceOffer-2" class="div50percent floatLeft PriceOffer" style="width: 100%; margin-bottom: 50px;">
            <span style="margin-left:10px; margin-right:150px; float:left;; margin-bottom:80px; font-size: 15px;">
                <input class="optionType" type="radio" value="abs" name="hour">
                Absolute Rate:
            </span>
            <span style="margin-left:10px; margin-right:150px; float:left;; margin-bottom:80px; font-size: 15px;">
                <input class="optionType" type="radio" value="abs" name="hour">
                Breakdown Rate:
            </span>
            <button class="k-button row-add" style=" float:left; margin-right: 40px; margin-top: 15px; margin-bottom: 80px;">Add new Rate</button>
            <div class="clear1"></div>
            <div class="header-row" style="float:left;">
                <div style="float:left;margin-left:15px; margin-top:0px; width:240px; font-weight:bold; font-size: 15px;">
                    Time
                    <span class="end" style=""> start</span>
                </div>
                <span class="end" style="float: left; margin-left: 5px; margin-top: 0px; width: 100px; font-weight: bold; font-size: 15px;">Time end</span>
                <span style="float:right;margin-right:200px; margin-top:0px;width:100px; font-weight:bold; margin-left: 165px;; font-size: 15px; margin-bottom:20px;">Price</span>
                <span style="float:right;margin-left:65px; margin-top:0px;width:100px; font-weight:bold; font-size: 15px;">Period</span>
            </div>
            <div id="price-row" style="display: block;">
<!--                <span class="start">
                    <span class="k-numeric-wrap k-state-default">
                        <input class="k-formatted-value fontstyleItalic floatLeft start k-input" type="text" style="float: left; margin-left: 20px; margin-top: 0px; margin-right: 170px; display: block; width:70px;">
                        <span class="k-select">
                        </span>
                    </span>
                </span>-->
                </span>
                <span class="end" style="width: 55px; float: left; margin-left: 0px; margin-right: 110px;">
                    <span class="k-numeric-wrap k-state-default">
                        <input class="k-formatted-value fontstyleItalic floatLeft end k-input" type="text" style="float: left; margin-top: 0px; margin-left: 0px; display: block; width:70px;">
                        <span class="k-select">
                        </span>
                    </span>
                </span>
                <span class="end" style="width: 55px; float: left; margin-left: 0px;">
                    <span class="k-numeric-wrap k-state-default">
                        <input class="k-formatted-value fontstyleItalic floatLeft end k-input" type="text" style="float: left; margin-top: 0px; margin-left: 0px; display: block; width:70px;">
                        <span class="k-select">
                        </span>
                    </span>
                </span>
                <input class="floatLeft fontstyleItalic price" type="text" placeholder="0000,00" style="float: left; margin-right: 50px; height: 36px; border-radius: 3px; margin-bottom: 30px; margin-left: 200px; width: 180px;" size="17" name="price[]">
                <button class="k-button remove" style="float:right; clear: right; " type="button">Remove</button>
            </div>
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
                I offer
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
            <label class="obligatory">(obligatory)</label>
        </div>
        <div class="col-lg-12">
            <div id="choose_radio">
                <?php
                echo $form->radioButtonList($model, 'group_id', BspCategory::model()->getRootCategories(), array(
                    'onchange' => 'thepuzzleadmin.fillKendoDropDown(this,"' . $this->createUrl("/bspItem/getChildrenCategories") . '","BspItem_category_id",false)',
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
                My Categories
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
                'onchange' => 'thepuzzleadmin.fillKendoDropDown(this,"' . $this->createUrl("/bspItem/getChildrenCategories") . '","BspItem_sub_category_id",true)'
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
                        *Choose this Option will cost you
                        <sup style="position: relative; top: 5px">€</sup>
                        by the of posting and the upper
                        <br>
                        Price will be crosses out and your Discount-Price will be highlighted
                    </span>
                </div>
            </div>
            <div class="col-lg-5">
                <div id="discount-price">

                    <?php
                    echo $form->textField($model, 'discount_price', array(
                        'class' => 'k-textbox k-textbox',
                        'placeholder' => "My New Price is?...",
                        "font-size" => "font-size: 20px",
                        "pattern" => "\d{1,11}",
                        "id" => "txtdiscount")
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
    <div class="row">
        <div class="col-lg-12">
            <label class="titleOption">
                My Profile
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
            <label class="obligatory">(obligatory)</label>
        </div>
        <div class="row" id="profile">
            <div class="col-lg-6">
                <input id="first_name" class="k-textbox floatLeft profileBottom profileText" type="text" value="Test" placeholder="Type here your First Name...">
                <label class="req-f font-req">(obligatory)</label>
                <input id="description" class="k-textbox floatLeft profileBottom profileText" type="text" value="Test ttzsdsdtszd testtttt" placeholder="Type here your occupation, what describes you or your work...">
                <input id="country" class="k-textbox floatLeft profileBottom profileText" type="text" value="Germany" placeholder="Type here your Country...">
                <input id="pass" class="k-textbox floatLeft profileText" type="password" placeholder="Type here your Password...">
                <label class="floatLeft">* To change your Password, Just enter your new Password</label>
                <input id="re_pass" class="k-textbox floatLeft profileText" type="password" placeholder="Repeat here your Password...">
                <label class="floatLeft">* and confirm it here</label>
            </div>
            <div class="col-lg-6">
                <div id="choose_radio">
                    <input id="first_name" class="k-textbox floatLeft profileBottom profileText" type="text" value="Test" placeholder="Type here your First Name...">
                    <label class="req-s font-req">(obligatory)</label>
                    <input id="description" class="k-textbox floatLeft profileBottom profileText" type="text" value="Munich" placeholder="Type here your occupation, what describes you or your work...">
                    <input id="phone" class="k-textbox floatRight profileBottom profileText" type="text" value="900912121" placeholder="Type here your Phone Number...">
                    <input id="zipcode" class="k-textbox floatRight profileBottom profileText" type="text" value="80469" placeholder="Type here your Zip Code...">
                    <input id="paypal_mail" class="k-textbox floatRight profileBottom profileText" type="text" value="kontakt@1348.eu" placeholder="Type here your Pay Pal Email...">
                    <label class="req-m font-req">(obligatory)</label>
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
                My Images/Videos
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
        </div>
        <div class="row">
            <div id="image">
                <div class="col-lg-6">
                    <div class="floatLeft" style="width: 100%; height: 313px; background-color: #CCC; border: 5px solid #fff;">
                        <div style="margin: 5px auto 0; width: 80%; height: 300px; overflow: hidden; ">
                            <div class="k-widget k-upload btChangeimagepp">
                                <div class="k-dropzone">
                                    <div class="k-button k-upload-button">
                                        <input id="imagepp" type="file" name="your-img" data-role="upload" autocomplete="off">
                                        <span>Upload your Images</span>
                                    </div>
                                </div>
                            </div>
                            <input id="txtvideo1" class="textLink k-textbox" type="text" placeholder="Youtube/Vimeo Video Link...">
                            <input id="txtvideo2" class="textLink k-textbox" type="text" placeholder="Youtube/Vimeo Video Link...">
                            <input id="txtvideo3" class="textLink k-textbox" type="text" placeholder="Youtube/Vimeo Video Link...">
                            <input id="txtvideo4" class="textLink k-textbox" type="text" placeholder="Youtube/Vimeo Video Link...">
                            <input id="txtvideo5" class="textLink k-textbox" type="text" placeholder="Youtube/Vimeo Video Link...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="loadimgvideo" class="floatLeft" style="width:100%; height: 320px; overflow-x: scroll;">
                    </div>
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
            <p class="font18" style="margin-top: 30px">Here you can add your Sounds</p>
            <div class="col-lg-4">
                <input id="txtSound1" class="soundCloudLink font18 k-textbox" type="text" placeholder="Soundcloud Link...">
            </div>
            <div class="col-lg-4">
                <input id="txtSound2" class="soundCloudLink font18 k-textbox" type="text" placeholder="Soundcloud Link...">
            </div>
            <div class="col-lg-4">
                <input id="txtSound2" class="soundCloudLink font18 k-textbox" type="text" placeholder="Soundcloud Link...">
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
                Description
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
            <label class="obligatory">(obligatory)</label>
        </div>
        <div class="col-lg-12">
            <textarea id="textDecription" class="font18 k-textbox" placeholder="Type here your Description. Be as detailed as posible..."></textarea>
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
                <span style="">To get started I will need from the buyer: </span>
            </p>
        </div>
        <div class="col-lg-12">
            <?php
            echo $form->textArea(
                    $model, 'seo_description', array(
                'class' => 'font18 k-textbox',
                "id" => "textStart",
                "style" => "font-size: 20px; padding-right: 10px; color: #414141",
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
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <label class="titleOption">
                Keywords/Tags
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
        </div>
        <div class="col-lg-12">

            <?php
            echo $form->textField(
                    $model, 'seo_description', array(
                'class' => 'font15 k-textbox',
                "id" => "key-word",
                "style" => "font-size: 20px; padding-right: 10px; color: #414141",
                'placeholder' => 'Type here your keyword, separated by comma. Words which describe your offer the best...',
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
        <div id="tcs" style="margin: 50px 0 50px;">
            
            <?php
                echo $form->checkBox($model,'_is_confirm',array("id"=>"public_offer","class"=>"floatLeft","margin"=>"margin: 3px;"));
            ?>
            <span class="k-invalid-msg" data-for="public_offer"></span>
            <label class="fontsize_title floatLeft" style="width: 85%; margin-left: 13px; margin-bottom: 13px;" for="public_offer">
                I confirm that I am able to deliver this service to Buyers within the delivery time specified.I will update or pause my Hourlie if I can no longer meet this delivery time. I understand that late delivery will adversely affect my rankings on ThePuzzzle and will entitle the Buyer to a refund. See
                <a class="tncs" href="javascript:void(0)">T&Cs </a>
            </label>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="submit" align="center">
                <a id="btn-submit" class="floatRight">Publish for free</a>
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
    "model" => get_class($model), "attribute" => "BspItem_background_image")
);
?>";
                    var avatar_url = "<?php
echo $this->createUrl("/site/uploadTemp", array(
    "index" => 2,
    "model" => get_class($model), "attribute" => "BspItem_avatar_image")
);
?>";
                    jQuery(function() {
                        jQuery("#BspItem_per_price").kendoDropDownList();
                        jQuery("#BspItem_currency_id").kendoDropDownList();
                        jQuery("#BspItem_category_id").kendoDropDownList();
                        jQuery("#BspItem_sub_category_id").kendoDropDownList();
                        jQuery("#immediately").kendoDropDownList();

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

                                path = "<?php echo Yii::app()->baseUrl . "/uploads/temp/" . Yii::app()->user->id . "/BspItem/BspItem_background_image/" ?>" + e.response.file;
                                jQuery("#loading").hide();
                                jQuery("#BspItem_background_image").val(e.response.file);

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
                                "select": "Select your avatar"
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

                                path = "<?php echo Yii::app()->baseUrl . "/uploads/temp/" . Yii::app()->user->id . "/BspItem/BspItem_avatar_image/" ?>" + e.response.file;
                                jQuery("#loading").hide();
                                jQuery("#BspItem_avatar_image").val(e.response.file);

                                jQuery(".over-post-avata").attr("src", path);

                            },
                            upload: function(e) {

                            },
                        });
                    })
</script>