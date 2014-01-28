<link href="<?php echo Yii::app()->theme->baseUrl ?>/style/detail.css" rel="stylesheet">
<div class="alert alert-warning" style="display: none"></div>
<div class="alert alert-success" style="display: none"></div>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'post-form',
    //'enableClientValidation' => true,
    'htmlOptions' => array('enctype' => 'multipart/form-data',),
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));
?>
<?php $this->renderPartial("//offers/_post_offer", array("model" => $model)) ?>
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
                I offer
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
            </label>
            <label class="obligatory">(obligatory)</label>
        </div>
        <div class="col-lg-12">
            <div id="choose_radio">
                <input id="ck_service" class="floatLeft cat" type="radio" onclick="javascript:floadMainCate(9);" value="9" name="group_choose">
                <label class="group_choose floatLeft" for="ck_service"> Service</label>
                <input id="ck_tolet" class="floatLeft cat" type="radio" onclick="javascript:floadMainCate(10);" value="10" name="group_choose">
                <label class="group_choose" for="ck_tolet"> Rental</label>
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
            <select class="categorie">
                <option>Select your Main Category</option>
                <option>Select your Main Category</option>
                <option>Select your Main Category</option>
                <option>Select your Main Category</option>
                <option>Select your Main Category</option>
            </select>
            <select class="categorie">
                <option>Select your Sub Category</option>
                <option>Select your Main Category</option>
                <option>Select your Main Category</option>
                <option>Select your Main Category</option>
                <option>Select your Main Category</option>
            </select>
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
                    <input id="w-like" class="floatLeft" type="checkbox" name="w-like">
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
                    <input id="txtdiscount" class="k-textbox k-textbox" type="text" placeholder="My New Price is?..." style="font-size: 20px" pattern="\d{1,11}">
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
        </div>
        <div class="for-margin">
            <p class="font18">
                <span style="font-size: 20px; padding-right: 10px; color: #414141">To get started I will need from the buyer: </span>
            </p>
        </div>
        <div class="col-lg-12">
            <textarea id="textStart" class="font18 k-textbox" placeholder="Type here what all you need from the buyer to get started: "></textarea>
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
            <select id="immediately" class="isshow" data-required-msg="Select my offer is ready to deliver" required="" name="immediately" data-role="dropdownlist">
                <option value="">select</option>
                <option value="1">immediately</option>
                <option value="2">within 24 hours</option>
                <option value="3">within 48 hours</option>
                <option value="4">within 3 hours</option>
                <option value="5">within 1 week</option>
                <option value="6">upon consultation</option>
            </select>
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
            <input id="key-word" class="font15 k-textbox" type="text" placeholder="Type here your keyword, separated by comma. Words which describe your offer the best...">
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
            <input id="public_offer" class="floatLeft" type="checkbox" validationmessage="Acceptance is required" required style="margin: 3px;">
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
                <a href="javascript:void(0)" onclick="$(window).scrollTop();">
                    <img id="returnTop" src="<?php echo Yii::app()->theme->baseUrl ?>/images/returnTop.jpg">
                </a>
            </div>
        </div>
    </div>
</div>

<?php $this->endWidget(); ?>