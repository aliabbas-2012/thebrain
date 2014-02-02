<div class="space-blog"></div>
<div class='col-lg-12'>
    <div class="col-lg-3">
        <div class="detail-Likes">
            <?php
            $total_likes = BspItemLike::model()->count();
            $likes = BspItemLike::model()->count(array('condition' => "user_id='$model->id'"));
            $percent = 0;
            if ($likes == 0) {
                $likes = '0000';
            } else {
                $percent = ($likes * 100) / $total_likes;
            }
            ?>
            <div class="labeled"><?php echo Yii::t('detailOffer', 'Likes'); ?></div>
            <div class="valued"><?php echo $likes; ?></div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="detail-Likes">
            <div class="labeled"><?php echo Yii::t('detailOffer', 'Ratings'); ?> </div>
            <div class="valued">
                <?php
                $total_rating = 5;

                for ($i = 1; $i <= $total_rating - $model->avgRating; $i++) {
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/star2.jpg", '', array(
                        "id" => "star" . $i, "class" => "starclick"
                    ));
                }
                for ($i = 1; $i <= $model->avgRating; $i++) {
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/images.jpg", '', array(
                        "id" => "star" . $i, "class" => "starclick"
                    ));
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="detail-Likes">
            <div class="labeled"><?php echo Yii::t('detailOffer', 'Orders'); ?></div>
            <div class="valued"><?php echo $model->numseller_orders + $model->numbuyer_orders; ?></div>
        </div>
    </div>
    <div class="col-lg-1">
        <img item_id ="<?php echo $model->id ?>" class="add-wishlist" src="<?php echo Yii::app()->theme->baseUrl ?>/images/addtowishlist.png" 
             alt="add to wishlist" original-title="Save this offer">
    </div>
    <div class="col-lg-2">
        <a id="addlike" item_id ='<?php echo $model->id; ?>' class="detail-addlike" href="javascript:void(0);" status="2">+1 like</a>
    </div>

</div>
<div class="clear"></div>
<?php
$criteria = new CDbCriteria();
$criteria->limit = "16";
$criteria->order = "id DESC";
$criteria->addCondition("user_id =".$model->id);
$items = BspItem::model()->findAll($criteria);
$this->renderPartial("//user/_tab_items", array("items" => $items));
?>