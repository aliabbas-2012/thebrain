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