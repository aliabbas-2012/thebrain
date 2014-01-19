<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="my_offers">
        <h1><?php echo Yii::t('user', 'Faq') ?></h1>
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
    <div class="faq">
        <div class="col-lg-4 blog-title">
            <span class="span-detail">
                <?php
                if (Yii::app()->language == "en") {
                    echo $data->sQname_en;
                } else {
                    echo $data->sQname;
                }
                ?>
            </span>
        </div>
        <div class="clear"></div>
        <div class="space-des"></div>
        <div class="col-lg-10 blog-des des-faq">
            <?php
            if (Yii::app()->language == "en") {
                echo $data->sQdetails_en;
            } else {
                echo $data->sQdetails;
            }
            ?>
        </div>
    </div>
    <div class="clear"></div>
    <?php
endforeach;
?>