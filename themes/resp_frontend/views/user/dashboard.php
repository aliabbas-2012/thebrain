<div class="tabs-container">

    <?php
    /**
     * tab bar
     */
    $this->renderPartial("//common/_tab_bar");
    ?>
    <!-- Tab panes -->

    <div class="clear" style="height: 20px;"></div>
    <label class="hellotext"><?php echo Yii::t('user', 'Hello again') ?> <?php echo Yii::app()->user->user->username; ?>!</label>
    <div class="clear" style="height: 20px;"></div>

    <div class="noteleft">
        <a href="<?php echo $this->createUrl('/web/user/profile'); ?>">
            <?php echo Yii::t('user', 'Complete your profile') ?>
        </a> 
        <?php echo Yii::t('user', 'and atract more interest') ?>
        <a class="del_box" href="javascript:void(0)" onclick="jQuery(this).parent().remove();">x</a>
    </div>
    <div class="noteleft"><a href="<?php echo $this->createUrl('/web/offer/'); ?>" class="post"><?php echo Yii::t('user', 'Post your offer') ?></a></div>

    <div class="clear"></div>  

    <div id="recentOrder" class="list-view">
        <?php
        $criteria = new CDbCriteria();
        $criteria->order = "id DESC";
        $criteria->limit = "10";
        $orders = BspOrder::model()->findAll($criteria);
        foreach ($orders as $order):
            ?>
            <div class="review">
                <div class="review-img">
                    <?php
                    if (!empty($order->item->image_offer->image_url)):
                        echo CHtml::image(Yii::app()->baseUrl . "/uploads/BspItemImage/" . $order->item->image_offer->id . "/" . $order->item->image_offer->image_url, '');
                    else :
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/post-avata.png");
                    endif;
                    ?>
                </div>
                <div class="review-content">
                    <div class="review-content-item"><?php echo isset($order->item) ? $order->item->name : "No Name"; ?></div>
                    <div class="review-content-amount"><?php echo $order->amount; ?> &euro;</div>
                </div>
                <div class="review-stats">
                    <div class="rating"> Order date:&nbsp;&nbsp;<?php echo date("d-m-Y", strtotime($order->date_order)); ?></div>
                    <div class="rating">Start date:&nbsp;&nbsp;<?php echo date("d-m-Y", strtotime($order->date_start)); ?></div>
                    <div class="rating"> Delivery date:&nbsp;&nbsp;<?php echo date("d-m-Y", strtotime($order->date_finish)); ?> </div>
                    <div class="seller"><?php echo Yii::t('user','Seller')?>:&nbsp;&nbsp; <?php echo ($order->seller != null) ? $order->seller->first_name : 'No Available'; ?> </div>
                </div>
            </div>
            <div class="clear"></div>
            <?php
        endforeach;
        ?>
    </div>

</div>

