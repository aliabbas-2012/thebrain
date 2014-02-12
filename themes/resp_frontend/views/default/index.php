<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="clear"></div>
<div class="tabs-container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#random_offers" data-toggle="tab"><?php echo Yii::t("site", "Random Offers"); ?></a></li>
        <li><a href="#recent_offers" data-toggle="tab"><?php echo Yii::t("site", "Recent Offers"); ?></a></li>
        <li><a href="#saved_offers" data-toggle="tab"><?php echo Yii::t("site", "Saved Offers"); ?></a></li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="random_offers">
            <?php
            $criteria = new CDbCriteria();
            $criteria->order = "rand()";
            $criteria->condition = "is_public>0 AND iStatus = 1";
            $criteria->limit = "16";
            $items = BspItem::model()->findAll($criteria);
            $this->renderPartial("//default/_tab_items", array("items" => $items));
            ?>
        </div>
        <div class="tab-pane" id="recent_offers">
            <?php
            $criteria = new CDbCriteria();
            $criteria->limit = "16";
            $criteria->order = "id DESC";
            $criteria->condition = "is_public>0 AND iStatus = 1";
            $items = BspItem::model()->findAll($criteria);
            $this->renderPartial("//default/_tab_items", array("items" => $items));
            ?>

        </div>
        <div class="tab-pane" id="saved_offers">
            <?php
            $criteria = new CDbCriteria();
            $criteria->select = "item_id";
            $criteria->order = "id DESC";
            $criteria->limit = "16";
            $criteria->distinct = "item_id";

            $saved_items = CHtml::listData(BspFarvorite::model()->findAll($criteria), 'item_id', 'item_id');
            $criteria = new CDbCriteria();
            $criteria->limit = "16";
            $criteria->order = "id DESC";
            $criteria->addInCondition('id', $saved_items);
            $criteria->condition = "is_public>0 AND iStatus = 1";
            $items = BspItem::model()->findAll($criteria);
            $this->renderPartial("//default/_tab_items", array("items" => $items));
            ?>

        </div>

    </div>
</div>
<div id="features">

    <div class="width_wrap">


        <div class="feature1">

            <h1><?php echo Yii::t('site', 'What can you do here') ?>?</h1>
            <h2><?php echo Yii::t('site', 'Share your talents and equipment') ?></h2>

            <ul class="grid clearfix">
                <li class="first">
                    <a href="#top">
                        <div id="img1" class="indexoverimg"></div>
                        <h2><?php echo Yii::t('site', 'I rent - Why to buy') ?>?</h2>
                        <p><?php echo Yii::t('site', 'Rent out your items which you, your drill is hardly used, like the head in the basement of your lawn mower 5 times a year to use comes at you used in 30 years of you not even more than 3 hours and everything else, whatever else with you most of the time lying around stowed. Why should buy the same when you have to give it to you and you can increase your household budget your environment? Join adjust is free and easy.') ?></p>
                    </a>
                </li>
                <li>
                    <a href="#top">
                        <div id="img2" class="indexoverimg"></div>
                        <h2><?php echo Yii::t('site', 'Find perfect jobs') ?></h2>
                        <p><?php echo Yii::t('site', 'Create, from students to retirees, a free profile that stands out. Be authentic, upload your photos, videos and introduce your self personally to your buyers. Create your individual offers, present your self and tell about your skills, work needs and get commissioned. Share interests, place special deals and offer your free capacities, so everyone can immediately find them. Thus you will save lengthy acquisition and you can devote yourself entirely your orders') ?></p>
                    </a>
                </li>
                <li>
                    <a href="#top">
                        <div id="img3" class="indexoverimg"></div>
                        <h2><?php echo Yii::t('site', 'Earn extra money') ?></h2>
                        <p><?php echo Yii::t('site', 'Only when your service is completed and you receive your money, you pay us 1&euro; for the listing.Our Payment Protection allows you to define a deposit for your rental equipment and guarantees your payment for all your accomplished services. Get positive reviews, create trust, generate thereby more sales and therefore earn more money.') ?></p>
                    </a>
                </li>
            </ul>

        </div>


        <div class="feature1">
            <h2><?php echo Yii::t('site', 'Find talents and equipment') ?></h2>

            <ul class="grid clearfix">
                <li class="first">
                    <a href="#top">
                        <div id="img4" class="indexoverimg"></div>
                        <h2><?php echo Yii::t('site', 'Rentals in your area') ?></h2>
                        <p><?php echo Yii::t('site', 'How important is it for you to own things, if you can borrow you? For example, do you need a sewing machine for a few days, a camera for a few hours, a mobile home for a weekend, a projector, a grinder and and and ... In ThePuzzzle you can easily find people who possess something that you need for a day or longer. Here lend you the items that you need, because why buy? In this way, you meet new people in your area and worry at the same time for sustainability.') ?>
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#top">
                        <div id="img5" class="indexoverimg"></div>
                        <h2><?php echo Yii::t('site', 'Find collaborative service') ?></h2>
                        <p><?php echo Yii::t('site', "Here you'll find service offerings that can assist you with your upcoming projects. All kinds of offers are available here, from plumbers, to the babysitter, from IT technicians to beautician. You need someone that designs you a business card, someone who takes your dog for walkies? In this case and many others you have come to the right place, because at ThePuzzzle you can clearly discover offers from your city, make use of a collaborative work and share common interests.Join and Enjoy.") ?></p>
                    </a>
                </li>
                <li>
                    <a href="#top">
                        <div id="img6" class="indexoverimg"></div>
                        <h2><?php echo Yii::t('site', 'Pay only for the result') ?></h2>
                        <p><?php echo Yii::t('site', 'Payment is made only after the service is met to your complete satisfaction. Offers are paid securely and conveniently via PayPal. Even if you should not have a PayPal account, you have the option through PayPal to pay by credit card or by direct debit.') ?>
                        </p>
                    </a>
                </li>
            </ul>		
        </div>


    </div>
</div>

<div class="statistics">
    <?php

    function showCounter($sCounter) {
        global $aLang;
        $sReturn = "";
        //echo $sCounter;
        for ($i = 0; $i < strlen($sCounter); $i++) {
            switch ($sCounter[$i]) {
                case "0":
                    $sReturn.="0";
                    break;
                case "1":
                    $sReturn.="1";
                    break;
                case "2":
                    $sReturn.="2";
                    break;
                case "3":
                    $sReturn.="3";
                    break;
                case "4":
                    $sReturn.="4";
                    break;
                case "5":
                    $sReturn.="5";
                    break;
                case "6":
                    $sReturn.="6";
                    break;
                case "7":
                    $sReturn.="7";
                    break;
                case "8":
                    $sReturn.="8";
                    break;
                case "9":
                    $sReturn.="9";
                    break;
            }
        }
        $tmp = "";
        if (strlen($sCounter) < 8) {
            for ($i = strlen($sCounter); $i < 8; $i++) {
                $tmp.="0";
            }
        }
        $sReturn = $tmp . $sReturn;
        return $sReturn;
    }

    $user = Users::model()->find()->count();
    $offer = BspItem::model()->find()->count();
    $offer_actual = BspItem::model()->count(array('condition' => "is_public > 0"));
    $total_payment = 0;
    ?>
    <ul>
        <li class="first"><?php echo Yii::t('site', 'Lastest Statistics') ?> </li>
        <li><?php echo Yii::t('site', 'User') ?> <?php echo showCounter($user); ?></li>
        <li><?php echo Yii::t('site', 'Actual Offers') ?>  <?php echo showCounter($offer_actual); ?></li>
        <li><?php echo Yii::t('site', 'Posted Offers Total') ?>  <?php echo showCounter($offer); ?></li>
        <li><?php
            echo Yii::t('site', 'Total Payments') . '  ' . str_pad($total_payment, 8, "0", STR_PAD_LEFT);
            ?></li>
    </ul>
</div>

<?php
Yii::app()->clientScript->registerScript('logoFix', '
     $(document).ready(function() {
       
        
         jQuery(".col-xs-6").hover(
          function() {
               jQuery(this).children().eq(1).children().eq(0).show();
          }, function() {
               jQuery(this).children().eq(1).children().eq(0).hide();
          }
        );
        
        jQuery(".offer_like").click(function(){
                if("' . Yii::app()->user->id . '" ==""){
                    thepuzzleadmin.showAlertBox("Please login First to like ","warning");
                }
                else {
                    item_id = jQuery(this).attr("id");
                    thepuzzleadmin.updateElementAjax("' . $this->createUrl("/web/user/saveItemLog", array("action" => "like")) . '?item_id="+item_id,"","");
                        thepuzzleadmin.showAlertBox("Added to like list ","success");
                }
        })
        jQuery(".favorAdd").click(function(){
                if("' . Yii::app()->user->id . '" ==""){
                    thepuzzleadmin.showAlertBox("Please login First to like ","warning");
                }
                 else {
                    item_id = jQuery(this).attr("title");
                    thepuzzleadmin.updateElementAjax("' . $this->createUrl("/web/user/saveItemLog", array("action" => "favrout")) . '?item_id="+item_id,"","");
                    thepuzzleadmin.showAlertBox("Added to favourate list ","success");
                }
        })
    })
    
', CClientScript::POS_END);
?>