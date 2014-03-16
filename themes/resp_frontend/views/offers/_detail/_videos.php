<div class="col-lg-12 detail-image-video">
    <?php
    foreach ($model->item_video_frnt as $_video):

        $path = Yii::app()->theme->baseUrl . "/images/video_thumb.jpg";
       
        ?>
        <div>
            <a href='http://vimeo.com/73686146' data-gallery="" data-gallery="" vimeo="73686146">
                <?php
                echo CHtml::image($path, '', array("height" => "150", 'widht' => '160'));
                ?>
            </a>
        </div>
        <?php
    endforeach;
    ?>
</div>
