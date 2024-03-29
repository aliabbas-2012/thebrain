<div id="recentOrder" class="list-view">
    <?php
    $alphabets = range("A", "Z");

    $total_likes = BspItemLike::model()->count();
    $items = $dataProvider->getData();
    $i = 0;
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
                        echo CHtml::image(Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item->image_offer->id . "/" . $item->image_offer->image_url, $item->name, array("title" => $item->name, "width" => "150", "height" => "150"));
                    else :
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/post-avata.png", $item->name, array("title" => $item->name));
                    endif;
                    ?>
                </a>
            </div>
            <div class="review-content col-lg-6">
                <div class="review-content-item">
                    <a href='<?php echo $this->createUrl("/web/offers/detail", array('slug' => $item->slug)); ?>'>
                        <?php echo isset($item->name) ? substr($item->name, 0, 20) . '...' : "No Name"; ?>
                    </a>

                </div>
                <div class="review-content-desc">
                    <?php
                    $offer_search = new OfferSearch;
                    $distance = $offer_search->getDistance($search_model->lat, $search_model->lng, $item->lat, $item->lng, "Both");

                    echo ceil($distance['m']) . " miles / " . ceil($distance['k']) . " km ";
                    ?>
                </div>
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
                    $marksrc = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=".$alphabets[$i]."|daeafb|000000";
                    $mark_alt = "map pin " . $alphabets[$i];
                    if ($item->special_deal == 1) {
                        ?>
                        <div class="itemPrice">
                            <span class="span-price dis-price"><?php echo $item->price; ?></span>
                            <label class="dis-price"><?php echo $item->currency->symbol; ?></label>
                            <span class="span-price" >
                                <?php echo!empty($item->discount_price) ? $item->discount_price : 0; ?>

                            </span>
                            <label><?php echo $item->currency->symbol; ?></label>
                            <span>
                                <?php
                                echo CHtml::image($marksrc, $mark_alt);
                                ?>

                            </span>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="itemPrice">
                            <span class="span-price" ><?php echo isset($item->price) ? $item->price : 0; ?></span>
                            <label><?php echo isset($item->currency) ? $item->currency->symbol : ""; ?></label>
                            <span>
                                <?php
                                echo CHtml::image($marksrc, $mark_alt);
                                ?>

                            </span>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="clear"></div>
        <?php
        $i++;
    endforeach;
    if (count($items) == 0) {
        echo "<div class='clear'></div>";
        echo Yii::t('detailOffer', 'No result');
    }
    ?>
</div>
<div  class="thumb-view" style="display: none">
    <div class="space-blog"></div>
    <?php
    $this->renderPartial("//default/_tab_items", array("items" => $items));
    ?>
</div>