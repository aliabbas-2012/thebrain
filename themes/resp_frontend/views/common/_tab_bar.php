<?php
$countper = 10;

if (Yii::app()->user->user->first_name == '')
    $countper--;
if (Yii::app()->user->user->second_name == '')
    $countper--;
if (Yii::app()->user->user->phone == '')
    $countper--;
if (Yii::app()->user->user->birthday == '0000-00-00')
    $countper--;
if (Yii::app()->user->user->description == '')
    $countper--;
if (Yii::app()->user->user->city == '')
    $countper--;
if (Yii::app()->user->user->country == '')
    $countper--;
if (Yii::app()->user->user->zipcode == '')
    $countper--;
if (Yii::app()->user->user->avatar == '' || Yii::app()->user->user->avatar == 'no_image')
    $countper--;
if (Yii::app()->user->user->background == '' || Yii::app()->user->user->background == 'no_image')
    $countper--;
?>
<ul class="nav nav-tabs">
    <li class="<?php echo $this->action->id == "messages" ? "active" : ""; ?>">
        <a onclick="window.location = jQuery(this).attr('href')" href="<?php echo $this->createUrl("/web/user/messages"); ?>" data-toggle="tab">My Mails <span><?php echo Yii::app()->user->user->statmessagesRecv; ?></span>
        </a>
    </li>
    <li class="<?php echo $this->action->id == "myoffers" ? "active" : ""; ?>">
        <a onclick="window.location = jQuery(this).attr('href')" href="<?php echo $this->createUrl("/web/userdata/myoffers"); ?>" data-toggle="tab">My Offers <span> <?php echo Yii::app()->user->user->numitems; ?> </span></a>
    </li>
    <li class="<?php echo $this->action->id == "myorders" ? "active" : ""; ?>">
        <a onclick="window.location = jQuery(this).attr('href')" href="<?php echo $this->createUrl("/web/userdata/myorders"); ?>" data-toggle="tab">My Orders <span><?php echo Yii::app()->user->user->numseller_orders + Yii::app()->user->user->numbuyer_orders; ?></span></a>
    </li>
    <li class="<?php echo $this->action->id == "settings" ? "active" : ""; ?>">
        <a onclick="window.location = jQuery(this).attr('href')" href="<?php echo $this->createUrl("/web/userdata/settings"); ?>" data-toggle="tab">Settings<span><?php echo $countper * 10; ?>%</a></span>
    </li>
    <li class="<?php echo $this->action->id == "payment" ? "active" : ""; ?>">
        <a onclick="window.location = jQuery(this).attr('href')" href="<?php echo $this->createUrl("/web/userdata/payment"); ?>" data-toggle="tab">Payment<span><?php echo Yii::app()->user->user->sellerPayment . " &euro;"; ?></span></a>
    </li>
    <li class="<?php echo $this->action->id == "ratings" ? "active" : ""; ?>">
        <a onclick="window.location = jQuery(this).attr('href')" href="<?php echo $this->createUrl("/web/userdata/ratings"); ?>" data-toggle="tab">Ratings<span><?php echo Yii::app()->user->user->getRatings(); ?></span></a>
    </li>

</ul>