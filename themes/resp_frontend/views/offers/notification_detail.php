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
        echo $model->message;
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
                    $model->payment_adaptive->buyer_status != "completed" 
            ) {
                $update_url = $this->createUrl("/web/offers/payPallPayment", array("id" => $model->Id, "status" => "completed"));
                echo CHtml::button('Complete', array(
                    "class" => "btn btn btn-default",
                    "onclick" => "window.location.href='" . $update_url . "'",
                    "title"=>"Make Complete to transfer money",
                    "alt"=>"Make Complete to transfer money",
                ));
                echo " (Make Complete to transfer money) ";
                echo "&nbsp;&nbsp;";
       
            }
            echo "&nbsp;&nbsp;";
           
        }
        ?>
    </div>
</div>
