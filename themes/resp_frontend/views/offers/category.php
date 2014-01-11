<div class="tabs-container">

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="my_offers">
            <?php
            $this->renderPartial("//offers/_category_tab_header", array("cat_arr" => $cat_arr));
            ?>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog-btm"));
            ?>` 
            <div class="clear"></div>

        </div>

        <div id="grid_content">

        </div>

    </div>
</div>

<script type="text/javascript">

</script>