<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="my_offers">
        <h1>
            <?php
            if (Yii::app()->language == "en") {
                echo $model->article_name;
            } else {
                echo $model->article_name_de;
            }
            ?>
        </h1>
        <?php
        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog"));
        ?> 
        <div class="clear"></div>
        <div class="space-blog"></div>
    </div>
</div>
<div class="blogger">
    <div class="col-lg-10 blog-title">

        <?php
        if (Yii::app()->language == "en") {
            echo $model->details_en;
        } else {
            echo $model->details_de;
        }
        ?>

    </div>

</div>
<div class="clear"></div>
