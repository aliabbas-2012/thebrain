<div id="detail_sub">
    <div class='detail-tab-part'>
        <div class='col-lg-4 actived' tab-no='1'>

            <?php echo Yii::t('user', 'About'); ?> 
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("width" => "23"));
            ?>
        </div>
        <div class='col-lg-4' tab-no='2'>

            <?php echo Yii::t('user', 'Comments'); ?> 
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("width" => "23"));
            ?>
        </div>
        <div class='col-lg-4' tab-no='3'>

        </div>

    </div>
    <div class='clear'></div>
    <div class='tab-1-data tab-data' >
        <div>
            <div class='col-lg-10 des-title'>
                <?php echo $model->description ?>
            </div>
            <div class='col-lg-2'>

            </div>
        </div>
        <div class='clear'></div>
        <div class='col-lg-12 des-content'>
            <?php echo $model->description ?>
        </div>
    </div>
    <div class='tab-2-data tab-data' style='display:none'>
        <div class='col-lg-12'>
            <!--                        <div class="space-blog"></div>
                                    <div class="space-blog"></div>-->
            <div class="space-blog"></div>
            <div class='col-lg-12'>
                <?php
                if ($model->numComments > 0) {
                    
                    foreach ($model->comments as $comment) {
                        $total_rating = 5;
                        echo "<div class='col-lg-12'>";
                        echo "<div class='col-lg-9'>";
                        echo $comment->comment;
                        echo "</div>";
                        echo "<div class='col-lg-3'>";
                        for ($i = 1; $i <= $total_rating - $comment->rating; $i++) {
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/star2.jpg", '', array(
                                "id" => "star" . $i, "class" => "starclick"
                            ));
                        }
                        for ($i = 1; $i <= $comment->rating; $i++) {
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/images.jpg", '', array(
                                "id" => "star" . $i, "class" => "starclick"
                            ));
                        }
                        echo "</div>";
                        echo "</div>";
                    }
                    
                } else {
                    echo Yii::t("user", "Not Found");
                }
                ?>
            </div>
        </div>
        <div class='tab-3-data tab-data' style='display:none'>
            <div class='col-lg-12'>
                <div class="space-blog"></div>
                <div class="space-blog"></div>

            </div>
        </div>

    </div>
    <script>
        jQuery(function() {
            jQuery(".detail-tab-part>div").click(function() {
                jQuery(".detail-tab-part>div").removeClass("actived");
                jQuery(this).addClass("actived");
                jQuery(".tab-data").hide();
                jQuery(".tab-" + jQuery(this).attr("tab-no") + "-data").show();
            })
        })
    </script>