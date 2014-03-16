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

<div class="blogger">
    <div class="col-lg-4 blog-title">
        <span class="span-detail">
            <?php echo $model->title; ?>
        </span>

        <div class="clear-title"></div>
        <span><?php echo $model->date_create; ?></span>
        
        <div class="content-detail">
            <?php echo $model->detail; ?>
        </div>
    </div>
    <div class="col-lg-7 blog-des">
        <?php
        $image = Yii::app()->baseUrl . "/uploads/blog/" . $model->id . "/" . $model->img;
        $base_image = $this->basePath . "/uploads/blog/" . $model->id . "/" . $model->img;
        $noImage = Yii::app()->theme->baseUrl . "/images/no_image.jpg";
        if (!is_file($base_image) || empty($model->img)) {
            echo CHtml::image($noImage, '', array("height" => "300",));
        } else {
            echo CHtml::image($image, '', array("height" => "300",));
        }
        ?>
    </div>
</div>
<div class="clear"></div>
