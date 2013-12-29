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
    <li class="active"><a href="#my_mails" data-toggle="tab">My Mails <span><?php echo Yii::app()->user->user->statmessagesRecv; ?></span></a></li>
    <li><a href="#my_offers" data-toggle="tab">My Offers <span> <?php echo Yii::app()->user->user->numitems; ?> </span></a></li>
    <li><a href="#my_orders" data-toggle="tab">My Orders <span><?php echo Yii::app()->user->user->numseller_orders + Yii::app()->user->user->numbuyer_orders; ?></span></a></li>
    <li><a href="#settings" data-toggle="tab">Settings<span><?php echo $countper * 10; ?>%</a></span></li>
    <li><a href="#payment" data-toggle="tab">Payment<span><?php echo Yii::app()->user->user->sellerPayment . " &euro;"; ?></span></a></li>
    <li><a href="#ratings" data-toggle="tab">Ratings<span><?php echo Yii::app()->user->user->getRatings(); ?></span></a></li>

</ul>