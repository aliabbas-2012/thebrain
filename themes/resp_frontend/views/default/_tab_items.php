<?php
$total_likes = BspItemLike::model()->count();
$segments = array_chunk($items, 3);
foreach ($segments as $items) {
    ?>
    <div class="row">
        <?php
        foreach ($items as $item):
            $avatar = "";
            $link = $this->createUrl("/web/offers/detail", array("slug" => $item->slug));
            $user = Users::model()->findByPk($item->user_id);
            //getting no of lykes
            $likes = BspItemLike::model()->count(array('condition' => "item_id='$item->id'"));
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
                $avatar = CHtml::image(Yii::app()->theme->baseUrl . '/images/noavatar.jpg', 'Avatar', array(
                            "width" => "20",
                            "title" => 'Avatar',
                            "title" => $city,
                            "data-toggle" => "tooltip",
                            "data-placement" => "top",
                ));
            }


            $sItem = '<div class="item-img-content">';
            $sItem.= '<div class="info-item hover-content">';
            $sItem.='<div class="offer_name"><a href="javascript:void(0)">' . substr($item->name, 0, 51) . '...</a></div>';
            $sItem.='<div class="offer_address"  title="' . $city . '">' . $avatar . '</div>';
            $sItem.= CHtml::image(Yii::app()->theme->baseUrl . '/images/handLike.png', 'Like', array(
                        "title" => "Like",
                        "class" => "offer_like",
                        "data-toggle" => "tooltip",
                        "data-placement" => "top",
                        "id" => $item->id.rand(0,5)));
            $sItem.='<div class="percentLike">' . $percent . '%</div>';
            $sItem.='<a class="favorAdd" title="' . $item->id . '">' . CHtml::image(Yii::app()->theme->baseUrl . '/images/start.png', 'Save this offer', array(
                        "title" => "Save this offer", "class" => "star add-wishlist",
                        "data-toggle" => "tooltip",
                        "data-placement" => "top",
                    )) . '</a>';
            $sItem.='<div class="offer_numlike show_far_num_' . $item->id . '">' . $likes . '</div>';
            $sItem.='<div class="clear"></div>';
            $sItem.='</div>'; // end of info-item
            $sItem.='<div class="hover-option hover-content">';

            $sItem.='<div class="watch"><a href="' . $this->createUrl("/web/offers/detail", array("slug" => $item->slug)) . '">Watching</a></div>';

            if (!empty(Yii::app()->user->id)):
                $sItem.='<div class="delete"><a title="rand' . $item->id . '" href="javascript:;"><img alt="star" 
                        data-toggle = "tooltip"
                        onclick = "deleteOffer(' . $item->id . ')"
                        data-placement ="top" title="Delete" class="star" src="' . Yii::app()->theme->baseUrl . '/images/x.png" /></a></div>';
            else :
                $sItem.='<div class="delete"><a title="rand' . $item->id . '" href="javascript:;"><img alt="star" 
                        data-toggle = "tooltip"
                        
                        data-placement ="top" title="Delete" class="star" src="' . Yii::app()->theme->baseUrl . '/images/x.png" /></a></div>';
            endif;
            $sItem.='<div class="clear"></div>';
            $sItem.='</div>';
            $sItem.='<div class="cate-cotent">';

            if ($item->group_id == 9)
                $sItem.='<div class="catename">Service Offer</div>';
            else {
                $sItem.='<div class="catename">Rentals Offer</div>';
            }
            $currency = "&euro;";
            if (!isset($item->currency->symbol)) {
                $currency = "&euro;";
            } else {
                $currency = $item->currency->symbol;
            }
            if ($item->special_deal == 1) {
                $price = ' 
                                <div class="price-offer">
                                    <label class="item-discount">' . $item->price . '</label>
                                    <label class="font-label item-discount"> ' . $currency . '</label>
                                    <label>' . $item->discount_price . '</label>
                                    <label class="font-label" >' . $currency . '</label>
                                    
                                </div>
                                ';
            } else {
                $price = '<div class="price-offer">' . $item->price . '<label class="font-label"> ' . ($currency) . '</label></div>';
            }
            $sItem.= $price;
            $sItem.='</div>';
            $sItem.='</div>';
            
            ?>
            <div class="col-xs-6 col-md-4">


                <?php
                if (!empty($item->image_offer->image_url)):
                    $url = $this->createUrl("/web/offers/detail", array("slug" => $item->slug));
                    $path = Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item->image_offer->id . "/" . $item->image_offer->image_url;
                    ?>
                    <a href="<?php echo $url; ?>" class="thumbnail"  >
                        <?php
                        echo CHtml::image($path, $item->name, array(
                            "title" => $item->name,
                            "data-toggle" => "tooltip",
                            "data-placement" => "top",
                            
                        ));
                        ?>
                    </a>
                    <?php
                else :
                    $url = $this->createUrl("/web/offers/detail", array("slug" => $item->slug));
                    $path = Yii::app()->theme->baseUrl . "/images/post-avata.png";
                    ?>
                    <a href="<?php echo $url; ?>" class="thumbnail">
                        <?php
                        echo CHtml::image($path, $item->name, array(
                            "title" => $item->name,
                            "data-toggle" => "tooltip",
                            "data-placement" => "top",
                            
                        ));
                        ?>
                    </a>   
                <?php
                endif;
                ?>

                <?php
                echo $sItem;

                //die;
                ?>
            </div>
            <?php
        endforeach;
        ?>
    </div>
    <?php
}
?>
<script>
    jQuery(".col-xs-6").hover(
            function() {
                jQuery(this).children().eq(1).children().eq(0).show();
            }, function() {
        jQuery(this).children().eq(1).children().eq(0).hide();
    }
    );
</script>