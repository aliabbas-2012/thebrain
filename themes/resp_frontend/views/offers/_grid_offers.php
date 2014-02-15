<?php
$total_likes = BspItemLike::model()->count();
$items = $dataProvider->getData();
foreach ($items as $item):
    $likes = BspItemLike::model()->count(array('condition' => "item_id='$item->id'"));
    $user = Users::model()->findByPk($item->user_id);
    $percent = 0;
    if ($likes == 0) {
        $likes = '0000';
    } else {
        $percent = ($likes * 100) / $total_likes;
    }
    if (!empty($user->avatar)) {
        $avatar = CHtml::image(Yii::app()->baseUrl . '/uploads/Users/' . $user->id . '/avatar/' . $user->avatar, '', array("id" => "image_avatar"));
    } else {
        $avatar = CHtml::image(Yii::app()->theme->baseUrl . '/images/noavatar.jpg', '', array("id" => "image_avatar"));
    }
    ?>
    <div class="review">
        <div class="review-img col-lg-2">
            <a href='<?php echo $this->createUrl("/web/offers/detail", array('slug' => $item->slug)); ?>'>
                <?php
                if (!empty($item->image_offer->image_url)):
                    echo CHtml::image(Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item->image_offer->id . "/" . $item->image_offer->image_url, '');
                else :
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/post-avata.png");
                endif;
                ?>
            </a>
        </div>
        <div class="review-content col-lg-6">
            <div class="review-content-item"><?php echo isset($item->name) ? substr($item->name, 0, 20) . '...' : "No Name"; ?></div>
            <div class="review-content-desc"><?php echo isset($item->description) ? substr($item->description, 0, 20) . '...' : "Not Available"; ?></div>
            <div class="review-content-other">

                <?php echo $avatar ?>
                <label class='city'><?php echo isset($user->city) ? $user->city : "None"; ?></label>
                <img class="like-icon" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/like.png" />
                <label class='city'>,<?php echo (($item->num_star) / 5) * 100; ?><?php echo " % " . Yii::t('global', 'by review') ?> </label>

            </div>
        </div>
        <div class="review-stats col-lg-2">
            <div class="review-content-amount">
                <?php
                if ($item->special_deal == 1) {
                    ?>
                    <div class="itemPrice">
                        <span class="span-price dis-price"><?php echo $item->price; ?></span>
                        <label class="dis-price"><?php echo $item->currency->symbol; ?></label>
                        <span class="span-price" style="color: #000;">
                            <?php echo!empty($item->discount_price) ? $item->discount_price : 0; ?>
                        </span>
                        <label><?php echo $item->currency->symbol; ?></label>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="itemPrice">
                        <span class="span-price" style="color: #000;"><?php echo isset($item->price) ? $item->price : 0; ?></span>
                        <label><?php echo isset($item->currency) ? $item->currency->symbol : ""; ?></label>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    <div class="clear"></div>
    <?php
endforeach;
?>