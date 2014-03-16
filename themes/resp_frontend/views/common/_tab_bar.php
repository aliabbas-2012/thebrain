<?php
$countper = Yii::app()->user->UserProfilePercentage;
?>
<ul class="nav nav-tabs">
    <li class="<?php echo $this->action->id == "messages" ? "active" : ""; ?>">
        <a onclick="window.location = jQuery(this).attr('href')" href="<?php echo $this->createUrl("/web/user/messages"); ?>" >My Mails <span><?php echo Yii::app()->user->user->statmessagesRecv; ?></span>
        </a>
    </li>
    <li class="<?php echo $this->action->id == "myoffers" ? "active" : ""; ?>">
        <a  href="<?php echo $this->createUrl("/web/userdata/myoffers"); ?>" ><?php echo Yii::t('link', "My Offers") ?> <span> <?php echo Yii::app()->user->user->numitems; ?> </span></a>
    </li>
    <li class="<?php echo $this->action->id == "myorders" ? "active" : ""; ?>">
        <a href="<?php echo $this->createUrl("/web/userdata/myorders"); ?>" ><?php echo Yii::t('link', "My Orders") ?><span><?php echo Yii::app()->user->user->numseller_orders + Yii::app()->user->user->numbuyer_orders; ?></span></a>
    </li>
    <li class="<?php echo $this->action->id == "settings" ? "active" : ""; ?>">
        <a href="<?php echo $this->createUrl("/web/userdata/settings"); ?>" ><?php echo Yii::t('link', "Setting ") ?><span><?php echo $countper * 10; ?>%</a></span>
    </li>
    <li class="<?php echo $this->action->id == "payment" ? "active" : ""; ?>">
        <a href="<?php echo $this->createUrl("/web/userdata/payment"); ?>" >Payment<span><?php echo Yii::app()->user->user->sellerPayment . " &euro;"; ?></span></a>
    </li>
    <li class="<?php echo $this->action->id == "ratings" ? "active" : ""; ?>">
        <a href="<?php echo $this->createUrl("/web/userdata/ratings"); ?>" >Ratings<span><?php echo Yii::app()->user->user->getRatings(); ?></span></a>
    </li>

</ul>