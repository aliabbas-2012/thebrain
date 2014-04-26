<?php
$condition = Yii::app()->language == "en" ? "adv_img <> ''" : "adv_img_de <>''";

$items = BspAdvertising::model()->findAll($condition);
$segments = array_chunk($items, 2);
foreach ($segments as $items) {
    ?>

    <?php
    foreach ($items as $item):
        if (Yii::app()->language == "en") {
            $path = Yii::app()->baseUrl . "/uploads/adv_img/" . $item->id . "/" . $item->adv_img;
        } else if (Yii::app()->language == "de") {
            $path = Yii::app()->baseUrl . "/uploads/adv_img_de/" . $item->id . "/" . $item->adv_img_de;
        }
        ?>
        <div class="col-lg-12 no-margin advertising">
            <div class="saved-offers-img">
                <a href="<?php echo $path; ?>" class="thumbnail" data-gallery="">
                    <?php
                    if (Yii::app()->language == "en"):
                        echo CHtml::image($path, '');
                    elseif (Yii::app()->language == "de"):
                        echo CHtml::image($path, '');
                    else :
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/post-avata.png");
                    endif;
                    ?>
                </a>


            </div>
        </div>
        <?php
    endforeach;
    ?>



    <?php
}//end of segments
?>