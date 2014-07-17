
<?php
$background = !empty($model->background_image) ? Yii::app()->baseUrl . "/uploads/BspItem/" . $model->id . "/" . $model->background_image : "";
?>
<?php
if (Yii::app()->user->hasFlash('success')) {
    echo "<span class='alert alert-success'>" . Yii::app()->user->getFlash('success') . "</span>";
    echo "<div class='clear'></div>";
}
?>
<div class="offer_item-top" style="background: url('<?php echo $background ?>')">
    <div class="container ">
        <div class="col-lg-12 offer_item">
            <div class="col-lg-8 offer_item-left">
                <div class="item_offer_name"><?php echo $model->name; ?></div>
                <div class="clear"></div>
                <div class="image-detail">
                    <div class="itemAvata col-lg-2">
                        <?php
                        $user = Users::model()->findByPk($model->user_id);
                        $avatar = CHtml::image(Yii::app()->theme->baseUrl . "/images/noavatar.jpg", 'Avatar', array("width" => "110", "title" => "Avatar"));
                        if (!empty($user->avatar)) {
                            $avatar = CHtml::image(Yii::app()->baseUrl . '/uploads/Users/' . $user->id . '/avatar/' . $user->avatar, 'Avatar', array("width" => "110", "title" => "Avatar"));
                        } else {
                            $avatar = CHtml::image(Yii::app()->theme->baseUrl . '/images/noavatar.jpg', 'Avatar', array("width" => "110", "title" => "Avatar"));
                        }
                        echo $avatar;
                        ?>

                        <div class="over-item-avata"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contactLink">
                            <?php
                            if (!empty(Yii::app()->user->id)):
                                ?>
                                <a id="contact-me"
                                   title ="Contact Me"   
                                   data-toggle ="tooltip" 
                                   data-placement ="top"
                                   onclick='jQuery("#myModal").modal()'
                                   href="javascript:void(0)"
                                   ><?php echo Yii::t('detailOffer', 'Contact Me'); ?></a>
                                   <?php
                               else:
                                   ?>
                                <a id="contact-me"
                                   title ="Contact Me"   
                                   data-toggle ="tooltip" 
                                   data-placement ="top"
                                   onclick=" $.alert.open({
                                               type: 'error',
                                               content: '<?php echo Yii::t('link', 'Please Login to continue'); ?>'
                                           });"
                                   ><?php echo Yii::t('detailOffer', 'Contact Me'); ?></a>
                               <?php
                               endif;
                               ?>
                        </div>
                        <div class = "clear"></div>
                        <div id = "offerDetail">
                            <?php
                            if (isset(Yii::app()->user->id)) {
                                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/online.png", '', array(
                                    "class" => "chk-online", "width" => "15", "height" => "15",
                                    "data-toggle" => "tooltip",
                                    "data-placement" => "top",
                                    "title" => "Online"
                                ));
                            } else {
                                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/offline.png", '', array(
                                    "class" => "chk-online", "width" => "15", "height" => "15",
                                    "data-toggle" => "tooltip",
                                    "data-placement" => "top",
                                    "title" => "Offline"
                                ));
                            }
                            ?>
                            <div>
                                <?php
                                if (isset($model->user_rel)):
                                    ?>
                                    <?php echo Yii::t('detailOffer', 'from') ?> <?php echo $model->user_rel->first_name; ?>, 
                                    <?php echo substr($model->user_rel->second_name, 0, 1) . '.' ?> / <?php echo $model->user_rel->city ?> 
                                    <?php echo $model->user_rel->zipcode ?>
                                    <div class="clear clear-four"></div>
                                    <?php echo $model->user_rel->description ?> <?php echo Yii::t('detailOffer', 'Last seen') ?>: 
                                    <?php echo date("Y.M.d", strtotime($model->user_rel->lastActiveTime)) ?>
                                    <?php
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item_offer_price">
                    <?php
                    if ($model->special_deal == 1) {
                        echo Yii::t('detailOffer', 'Special Deal /');
                    }
                    else
                        echo Yii::t('detailOffer', 'Price / ');
                    if ($model->per_price == 1) {
                        echo Yii::t('detailOffer', 'Fix');
                    }
                    if ($model->per_price == 2) {
                        echo Yii::t('detailOffer', 'Per Hour');
                    }
                    if ($model->per_price == 3) {
                        echo Yii::t('detailOffer', 'Per Day');
                    }
                    ?>
                    <label>
                        <?php
                        $currency_symbol = "&euro;";
                        if (!empty($model->currency->symbol)) {
                            $currency_symbol = $model->currency->symbol;
                        }
                        if ($model->special_deal == 1) {
                            $price = ' 
                                    <span id="item_offer_price_span" class="item_offer_price_span">' . $model->price . '</span>
                                    <label class="font-label item-discount"> ' . $currency_symbol . '</label>
                                    <span>' . $model->discount_price . '</span>
                                    
                                ';
                            echo $price;
                        } else {
                            echo "<span id='item_offer_price_span'>".$model->price."</span>";
                        }
                        ?>
                        <sup>
                            <?php
                            echo $currency_symbol;
                            ?>
                        </sup>
                    </label>
                </div>
                <div id='orderNowdiv'>
                    <?php
                    if (!empty(Yii::app()->user->id)):
                        if (Yii::app()->user->id == $model->user_id):
                            echo CHtml::link(
                                    Yii::t('link', 'Order Now'), "javascript:#", array(
                                "id" => "orderNow",
                                "onclick" => "$.alert.open({
                                        type: 'warning',
                                        content: '" . Yii::t('link', 'You are the owner of this offer') . "'
                                    });"
                            ));
                        else:
                            echo CHtml::hiddenField("_order_price", "");
                            echo CHtml::link(Yii::t('link', 'Order Now'), "javascript:void(0)", array(
                                "id" => "orderNow",
                                "onclick" => "thepuzzleadmin.buyOffer('" . $this->createUrl("/web/offers/orderOffer", array("id" => $model->id)) . "')"
                            ));
                        endif;
                    else :
                        echo CHtml::link(
                                Yii::t('link', 'Order Now'), "javascript:#", array(
                            "id" => "orderNow",
                            "onclick" => "$.alert.open({
                                        type: 'warning',
                                        content: '" . Yii::t('link', 'Please Login to continue') . "'
                                    });"
                        ));
                    endif;
                    ?>
                </div>
                <?php
                if (!empty($user->store_url)):
                    $store_url = str_replace(" ", "-", $user->store_url);
                    $store_url = $this->createSimpleUrl("/web/default/index/") . $store_url;
                    ?>
                    <div id='orderNowdiv'>
                        <a id="visitMystore" href="<?php echo $store_url ?>"><?php echo Yii::t('link', 'Visit My Store'); ?></a>
                    </div>
                    <?php
                endif;
                ?>
            </div>

        </div>
    </div>    

</div>