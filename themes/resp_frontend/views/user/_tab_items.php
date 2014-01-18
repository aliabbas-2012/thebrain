<?php
$total_likes = BspItemLike::model()->count();
$segments = array_chunk($items, 4);
foreach ($segments as $items) {
    ?>
    <div class="container marketing" style="margin-top: 10px;">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>

    <div class="container marketing">
        <div class="row">
            <?php
            foreach ($items as $item):
                //getting no of lykes
                $likes = BspItemLike::model()->count(array('condition' => "item_id='$item->id'"));
                $user = Users::model()->findByPk($item->user_id);
                $percent = 0;
                if ($likes == 0) {
                    $likes = '0000';
                } else {
                    $percent = ($likes * 100) / $total_likes;
                }
                if (!empty($user->avatar)) {
                    $avatar = CHtml::image(Yii::app()->baseUrl . '/uploads/Users/' . $user->id . '/avatar/' . $user->avatar, '', array("width" => "20"));
                } else {
                    $avatar = CHtml::image(Yii::app()->theme->baseUrl . '/images/noavatar.jpg', '', array("width" => "20"));
                }
                $city = isset($user->city) ? $user->city : "";
                ?>
                <div class="col-lg-3">
                    <div class="saved-offers-img">
                        <a href="javascript:void(0)" class="thumbnail">
                            <?php
                            if (!empty($item->image_offer->image_url)):
                                echo CHtml::image(Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item->image_offer->id . "/" . $item->image_offer->image_url, '');
                            else :
                                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/post-avata.png");
                            endif;
                            ?>
                        </a>
                        <div class="over-img1"></div>
                        <div style="display: none">
                            <div class="info-item hover-content">
                                <div class="offer_name">
                                    <a href="/offer-detail/598-1-stunde-gassi-f-hren"><?php echo substr($item->name, 0, 51) . '...'; ?></a>
                                </div>
                                <div class="offer_address">
                                    <?php echo $avatar . $city ?>
                                </div>
                                <div class="percentLike"><?php echo $percent; ?>%</div>
                                <div class="clear"></div>
                            </div>
                            <div class="hover-option hover-content">
                                <div class="watch">
                                    <a href="offer-detail/598-1-stunde-gassi-f-hren">More...</a>
                                </div>
                                <div class="delete">
                                    <a href="javascript:;" title="598">
                                        <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/images/x.png", '', array('class' => 'star')); ?>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <?php
                            $sItem = '<div class="cate-cotent">';

                            if ($item->group_id == 9)
                                $sItem.='<div class="catename">Service Offer</div>';
                            else {
                                $sItem.='<div class="catename">Rentals Offer</div>';
                            }
                            $currency_symbol = "&euro;";
                            if (!empty($item->currency->symbol)) {
                                $currency_symbol = $item->currency->symbol;
                            }
                            if ($item->special_deal == 1) {
                                $price = ' 
                                <div class="price-offer">
                                    <label class="item-discount">' . $item->price . '</label>
                                    <font size="2" class="item-discount"> ' . $currency_symbol . '</font>
                                    <label>' . $item->discount_price . '</label>
                                    <font size="2"> ' . $currency_symbol . '</font>
                                    
                                </div>
                                ';
                            } else {
                                $price = '<div class="price-offer">' . $item->price . '<font size="2"> ' . $currency_symbol . '</font></div>';
                            }
                            $sItem.= $price;
                            $sItem.='</div>';

                            echo $sItem;
                            ?>
                        </div>

                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>

    <?php
}//end of segments
?>