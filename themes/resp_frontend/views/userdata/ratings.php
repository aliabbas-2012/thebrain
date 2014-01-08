<div class="tabs-container">

    <?php
    /**
     * tab bar
     */
    $this->renderPartial("//common/_tab_bar");
    ?>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="my_offers">
            <h1><?php echo Yii::t('user', 'My Ratings') ?></h1>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog"));
            ?> 
            <div class="clear"></div>
        </div>
        <div id="grid_content">

            <?php
            foreach ($sellerComments as $data):
                $this->renderPartial("//userdata/_rating_comments", array("data" => $data));
            endforeach;
            ?>
        </div>

    </div>
</div>
