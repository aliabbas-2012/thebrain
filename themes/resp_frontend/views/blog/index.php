<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="my_offers">
        <h1><?php echo Yii::t('user', 'Blog') ?></h1>
        <?php
        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog"));
        ?> 
        <div class="clear"></div>
        <div class="space-blog"></div>
    </div>
</div>
<?php
foreach ($dataProvider->getData() as $data):
    ?>
    <div class="blogger">
        <div class="col-lg-4 blog-title">
            <?php
            echo CHtml::link($data->title, $this->createUrl("/web/blog/detail", array("slug" => $data->slug)));
            ?>

            <div class="clear-title"></div>
            <span><?php echo $data->date_create; ?></span>
        </div>
        <div class="col-lg-7 blog-des">
            <?php
            $image = Yii::app()->baseUrl . "/uploads/blog/" . $data->id . "/" . $data->img;
            $base_image = $this->basePath . "/uploads/blog/" . $data->id . "/" . $data->img;
            $noImage = Yii::app()->theme->baseUrl . "/images/no_image.jpg";
            if (!is_file($base_image) || empty($data->img)) {
                echo CHtml::image($noImage, '', array("height" => "300",));
            } else {
                echo CHtml::image($image, '', array("height" => "300",));
            }
            ?>
        </div>
    </div>
    <div class="clear"></div>
    <?php
endforeach;
?>
