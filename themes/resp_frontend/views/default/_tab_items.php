<?php
$segments = array_chunk($items, 4);
foreach ($segments as $items) {
    ?>
    <div class="row">
        <?php
        foreach ($items as $item):
            $avatar = "";
            $link = Yii::app()->baseUrl . '/offer-detail/' . $item->id . '-' . MyHelper::convert_no_sign($item->name);
            $user = Users::model()->findByPk($item->user_id);
            $number = BspFarvorite::model()->count(array('condition' => "item_id='$item->id'"));
            if ($number == 0)
                $number = '0000';
            if ($user != null) {
                $avatar = Yii::app()->baseUrl . '/uploads/Users/' . $user->id . '/avatar/' . $user->avatar;
                $city = $user->city;
            } else {
                $avatar = '';
                $city = '';
            }
            $sItem = '<div class="item-img-content">';
            $sItem.= '<div class="info-item hover-content">';
            $sItem.='<div class="offer_name"><a href="javascript:void(0)">' . substr($item->name, 0, 51) . '...</a></div>';
            $sItem.='<div class="offer_address"><img src="' . $avatar . '" width"20" />, ' . $city . ',</div>';
            $sItem.='<img class="offer_like" src="' . Yii::app()->theme->baseUrl . '/images/handLike.png" />';
            $sItem.='<div class="percentLike">100%</div>';
            $sItem.='<a class="favorAdd" title="' . $item->id . '"><img class="star add-wishlist" title="Save this offer" src="' . Yii::app()->theme->baseUrl . '/images/start.png" /></a>';
            $sItem.='<div class="offer_numlike show_far_num_' . $item->id . '">' . $number . '</div>';
            $sItem.='<div class="clear"></div>';
            $sItem.='</div>'; // end of info-item
            $sItem.='<div class="hover-option hover-content">';
            $str = '';

            $yourinfo = Users::model()->findByPk(Yii::app()->user->id);
            $str = str_replace("|", ",", $yourinfo->sWishList);

            $array_col = explode(',', $str);

         
            $sItem.='<div class="watch"><a href="offer-detail/' . $item->id . '-' . MyHelper::convert_no_sign($item->name) . '">Watching</a></div>';
       

            $sItem.='<div class="delete"><a title="rand' . $item->id . '" href="javascript:;"><img class="star" src="' . Yii::app()->theme->baseUrl . '/images/x.png" /></a></div>';
            $sItem.='<div class="clear"></div>';
            $sItem.='</div>';
            $sItem.='</div>';
            $sItem.='<div class="cate-cotent">';
            $root = $item->group_id;
            if ($root == 9)
                $sItem.='<div class="catename">Service Offer</div>';
            else {
                $sItem.='<div class="catename">Rentals Offer</div>';
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
                $price = '<div class="price-offer">' . $item->price . '<font size="2"> ' . $item->currency->symbol . '</font></div>';
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
                        echo CHtml::image(Yii::app()->theme->baseUrl."/images/post-avata.png");
                    endif;
                    ?>
                </a>
                <?php
                echo $sItem;
                ?>
            </div>
            <?php
        endforeach;
        ?>
    </div>
    <?php
}
?>