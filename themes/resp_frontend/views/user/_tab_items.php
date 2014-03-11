<?php
$total_likes = BspItemLike::model()->count();
$segments = array_chunk($items, 4);
foreach ($segments as $items) {
    ?>
    <div class="container marketing tab-items">
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
                $city = array();
                if (!empty($user->first_name)) {
                    $city [] = $user->first_name;
                } else if (!empty($user->second_name)) {
                    $city [] = $user->second_name;
                }

                if (isset($user->city)) {
                    $city [] = $user->city;
                }
                $city = implode(",", $city);

                if (!empty($user->avatar)) {
                    $avatar = CHtml::image(Yii::app()->baseUrl . '/uploads/Users/' . $user->id . '/avatar/' . $user->avatar, 'Avatar', array(
                                "width" => "20",
                                "title" => $city,
                                "data-toggle" => "tooltip",
                                "data-placement" => "top",
                    ));
                } else {
                    $avatar = CHtml::image(Yii::app()->theme->baseUrl . '/images/noavatar.jpg', '', array(
                                "width" => "20",
                                "title" => $city,
                                "data-toggle" => "tooltip",
                                "data-placement" => "top",
                    ));
                }
                ?>
                <div class="col-lg-3">
                    <div class="saved-offers-img">


                        <?php
                        $url = $this->createUrl("/web/offers/detail", array("slug" => $item->slug));

                        if (!empty($item->image_offer->image_url)):
                            $path = Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item->image_offer->id . "/" . $item->image_offer->image_url;
                            echo CHtml::link(CHtml::image($url, $item->name, array("title" => $item->name)), $url, array("class" => "thumbnail"));
                        else :
                            $path = Yii::app()->theme->baseUrl . "/images/post-avata.png";
                            echo CHtml::link(CHtml::image($path, $item->name, array("title" => $item->name)), $url, array("class" => "thumbnail"));
                        endif;
                        ?>

                        <div class="over-img1"></div>
                        <div style="display: none">
                            <div class="info-item hover-content">
                                <div class="offer_name">
                                    <a href="<?php echo $this->createUrl("/web/offers/detail", array("slug" => $item->slug)) ?>"><?php echo substr($item->name, 0, 51) . '...'; ?></a>
                                </div>
                                <div class="offer_address">
                                    <?php echo $avatar; ?>
                                </div>
                                <div class="percentLike"><?php echo $percent; ?>%</div>
                                <div class="clear"></div>
                            </div>
                            <div class="hover-option hover-content">
                                <div class="watch">
                                    <a href="<?php echo $this->createUrl("/web/offers/detail", array("slug" => $item->slug)) ?>">More...</a>
                                </div>
                                <div class="delete">
                                    <a href="javascript:;" title="598">
                                        <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/images/x.png", '', array('class' => 'star')); ?>
                                    </a>
                                </div>
                                <div class="clear"></div>

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
                                    <label class="font-label"> ' . $currency_symbol . '</label>
                                    
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
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>

    <?php
}//end of segments
?>
<script>
//    jQuery(".col-lg-3>div.saved-offers-img").hover(
//            function() {
//                jQuery(this).children().eq(2).show();
//            }, function() {
//        jQuery(this).children().eq(2).show();
//    });
</script>    