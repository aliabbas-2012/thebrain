<?php
if (Yii::app()->user->hasFlash('success')):
    echo CHtml::openTag("div", array("class" => "alert alert-success col-lg-10"));
    echo Yii::app()->user->getFlash('success');
    echo CHtml::closeTag("div");
endif;
?>
<div class="clear"></div>
<h2><?php echo Yii::t("notify", "Notifications"); ?></h2>

<div class="notifcation-bar">

    <div class="col-lg-6 notifcation-bar-message">
        <?php
        echo CHtml::link($model->message, $this->createUrl("/web/offers/detail", array("slug" => $model->payment_adaptive->offer->slug)), array("target" => "_blank")
        );
        ?>
    </div>
    <div class="col-lg-6">
<?php
if ($model->user_type == "seller") {
    //it is the case when no paypall account
    if ($model->user->paypal_mail == "") {
        $update_url = $this->createUrl("/web/user/profile", array("source" => $model->Id));
        echo CHtml::button('Update PayPall Email', array(
            "class" => "btn btn btn-default",
            "onclick" => "window.location.href='" . $update_url . "'",
        ));
    } else if (
            $model->payment_adaptive->seller_status != "rejected" &&
            $model->payment_adaptive->seller_status != "confirmed"
    ) {
        $update_url = $this->createUrl("/web/offers/setPaymentStatus", array("id" => $model->Id, "status" => "rejected"));
        echo CHtml::button('Reject', array(
            "class" => "btn btn btn-default",
            "onclick" => "window.location.href='" . $update_url . "'",
        ));
        echo "&nbsp;&nbsp;";
        $update_url = $this->createUrl("/web/offers/setPaymentStatus", array("id" => $model->Id, "status" => "confirmed"));
        echo CHtml::button('Confirm', array(
            "class" => "btn btn btn-default",
            "onclick" => "window.location.href='" . $update_url . "'",
        ));
    }
    echo "&nbsp;&nbsp;";
    echo "<div>" . ucfirst($model->payment_adaptive->seller_status) . "</div>";
} else if ($model->user_type == "buyer") {
    //it is the case when no paypall account
    if ($model->user->paypal_mail == "") {
        $update_url = $this->createUrl("/web/user/profile", array("source" => $model->Id));
        echo CHtml::button('Update PayPall Email', array(
            "class" => "btn btn btn-default",
            "onclick" => "window.location.href='" . $update_url . "'",
        ));
    } else if (
            $model->payment_adaptive->buyer_status != "paying" &&
            $model->payment_adaptive->buyer_status != "completed" &&
            $model->payment_adaptive->buyer_status == "initiated"
    ) {
        $update_url = $this->createUrl("/web/offers/payPallPayment", array("id" => $model->Id, "status" => "paying"));
        echo CHtml::button('Pay', array(
            "class" => "btn btn btn-default",
            "onclick" => "window.location.href='" . $update_url . "'",
            "title" => "Make Payment to transfer money",
            "alt" => "Make Payment to transfer money",
        ));
        echo " (Make Payment) ";
        echo "&nbsp;&nbsp;";
        
        $update_url = $this->createUrl("/web/offers/payPallPayment", array("id" => $model->Id, "status" => "cancelled"));
        
        echo CHtml::button('Cancel', array(
            "class" => "btn btn btn-default",
            "onclick" => "window.location.href='" . $update_url . "'",
            "title" => "Make Payment to transfer money",
            "alt" => "Make Payment to transfer money",
        ));
    } else if ($model->payment_adaptive->buyer_status == "paying") {

        echo CHtml::button('Confirm to PayPall', array(
            "class" => "btn btn btn-default",
            "onclick" => "window.location.href='" . $model->payment_adaptive->paypall_response->RedirectURL . "'",
            "title" => "Confirm",
            "alt" => "Confirm to PayPall",
        ));
    }
    echo "&nbsp;&nbsp;";
}
?>
    </div>
</div>
