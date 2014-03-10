<div class="col-lg-3">
    <div id="Portfolio" ><?php echo Yii::t('detailOffer', 'Images & Videos') ?></div>
</div>

<div class="col-lg-12 detail-image-video">
    <?php
    foreach ($model->image_items as $item_img):

        $path = Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item_img->id . "/" . $item_img->image_url;
        ?>
        <div>
            <a href='<?php echo $path ?>' data-gallery="">
                <?php
                echo CHtml::image($path, '', array("height" => "200px"));
                ?>
            </a>
        </div>
        <?php
    endforeach;
    ?>

</div>
<div class="clear"></div>
<?php
$videos = $model->item_video_frnt;
$videos_url = array();
$count = 0;
foreach ($videos as $video) {
    $videos_url[$count]['title'] = '';
    $videos_url[$count]['href'] = $video->video_url;
    if ($video->image_url == "") {
        $videos_url[$count]['poster'] = Yii::app()->theme->baseUrl . "/images/video_thumb.jpg";
    }
    else  {
        $videos_url[$count]['poster'] = $video->image_url;
    }
    if (stristr($video->video_url, "mp4")) {
        $videos_url[$count]['type'] = 'video/mp4';
    } else if (stristr($video->video_url, "ogg")) {
        $videos_url[$count]['type'] = 'video/ogg';
    } else if (stristr($video->video_url, "webm")) {
        $videos_url[$count]['type'] = 'video/webm';
    } else if (stristr($video->video_url, "vimeo")) {
        $url_parts = explode("/", $video->video_url);

        $videos_url[$count]['type'] = 'text/html';
        $videos_url[$count]['vimeo'] = $url_parts[count($url_parts) - 1];
    } else if (stristr($video->video_url, "youtube")) {
        $url_parts = explode("/", $video->video_url);

        $videos_url[$count]['type'] = 'text/html';
        $videos_url[$count]['youtube'] = $url_parts[count($url_parts) - 1];
    }
    $count++;
}
if (!empty($videos_url)):
    $videos_url_json = CJSON::encode($videos_url);
    ?>
    <button id="video-gallery-button" type="button" class="btn btn-success btn-lg">
        <i class="glyphicon glyphicon-film"></i>

        <?php echo Yii::t('detailOffer', 'Launch Video Gallery') ?>
    </button>
    <script>
        var vidoes_url = <?php echo $videos_url_json ?>;
        jQuery(function() {
            jQuery('#video-gallery-button').on('click', function(event) {
                event.preventDefault();
                blueimp.Gallery(vidoes_url
                        , $('#blueimp-gallery').data());
            });
        })
    </script>
    <?php
endif;
?>