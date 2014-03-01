<div class="col-lg-3">
    <div id="Portfolio" ><?php echo Yii::t('detailOffer', 'Images & Videos') ?></div>
</div>

<div class="col-lg-12 detail-image-video">
    <?php
    foreach ($model->image_items as $item_img):

        $path = Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item_img->id . "/" . $item_img->image_url;
        ?>
        <div>
            <a href='<?php echo $path ?>'>
                <?php
                echo CHtml::image($path, '', array("height" => "200px"));
                ?>
            </a>
        </div>
        <?php
    endforeach;
    ?>
</div>
