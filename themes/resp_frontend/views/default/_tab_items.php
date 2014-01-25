<?php
$total_likes = BspItemLike::model()->count();
$segments = array_chunk($items, 4);
foreach ($segments as $items) {
    ?>
    <div class="row">
        <?php
        foreach ($items as $item):
            $avatar = "";
            $link = $this->createUrl("/web/offers/detail",array("slug"=>$item->slug));
            $user = Users::model()->findByPk($item->user_id);
            //getting no of lykes
            $likes = BspItemLike::model()->count(array('condition' => "item_id='$item->id'"));
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

            $sItem = '<div class="item-img-content">';
            $sItem.= '<div class="info-item hover-content">';
            $sItem.='<div class="offer_name"><a href="javascript:void(0)">' . substr($item->name, 0, 51) . '...</a></div>';
            $sItem.='<div class="offer_address">' . $avatar . $city . '</div>';
            $sItem.= CHtml::image(Yii::app()->theme->baseUrl . '/images/handLike.png', 'Like', array("title" => "Like", "class" => "offer_like", "id" => $item->id));
            $sItem.='<div class="percentLike">' . $percent . '%</div>';
            $sItem.='<a class="favorAdd" title="' . $item->id . '">' . CHtml::image(Yii::app()->theme->baseUrl . '/images/start.png', 'Save this offer', array("title" => "Save this offer", "class" => "star add-wishlist")) . '</a>';
            $sItem.='<div class="offer_numlike show_far_num_' . $item->id . '">' . $likes . '</div>';
            $sItem.='<div class="clear"></div>';
            $sItem.='</div>'; // end of info-item
            $sItem.='<div class="hover-option hover-content">';

            $sItem.='<div class="watch"><a href="'.$this->createUrl("/web/offers/detail",array("slug"=>$item->slug)).'">Watching</a></div>';

           
            $sItem.='<div class="delete"><a title="rand' . $item->id . '" href="javascript:;"><img class="star" src="' . Yii::app()->theme->baseUrl . '/images/x.png" /></a></div>';
            $sItem.='<div class="clear"></div>';
            $sItem.='</div>';
            $sItem.='</div>';
            $sItem.='<div class="cate-cotent">';

            if ($item->group_id == 9)
                $sItem.='<div class="catename">Service Offer</div>';
            else {
                $sItem.='<div class="catename">Rentals Offer</div>';
            }
            if (!isset($item->currency->symbol)) {
                $item->currency->symbol = "&euro;";
            }
            if ($item->special_deal == 1) {
                $price = ' 
                                <div class="price-offer">
                                    <label class="item-discount">' . $item->price . '</label>
                                    <font size="2" class="item-discount"> ' . $item->currency->symbol . '</font>
                                    <label>' . $item->discount_price . '</label>
                                    <font size="2"> ' . $item->currency->symbol . '</font>
                                    
                                </div>
                                ';
            } else {
                $price = '<div class="price-offer">' . $item->price . '<font size="2"> ' . ($item->currency->symbol) . '</font></div>';
            }
            $sItem.= $price;
            $sItem.='</div>';
            ?>
            <div class="col-xs-6 col-md-3">
                <a href="javascript:void(0)" class="thumbnail">

                    <?php
                    if (!empty($item->image_offer->image_url)):
                        echo CHtml::image(Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item->image_offer->id . "/" . $item->image_offer->image_url, '');
                    else :
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/post-avata.png");
                    endif;
                    ?>
                </a>
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