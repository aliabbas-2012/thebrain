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
            <h1><?php echo Yii::t('user', 'Payment') ?></h1>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog"));
            ?>
            <div class="space-blog"></div>
            <?php
            $this->renderPartial("//userdata/_payment_tab_header", array("type" => $type));
            ?>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog-btm"));
            ?>` 
            <div class="clear"></div>

        </div>

        <div id="grid_content">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'bsp-my-order-grid',
                'itemsCssClass' => 'table table-bordered',
                'dataProvider' => $dataProvider,
                'cssFile' => Yii::app()->theme->baseUrl . "/dist/css/gridview.css",
                'pager' => array(
                    'cssFile' => '',
                ),
                'columns' => array(
                    array('name' => 'item', 'value' => 'isset($data["item"])?$data["item"]:"&nbsp;"',"type"=>"raw"),
                    array('name' => 'net', 'value' => 'isset($data["net"])?$data["net"]:0'),
                    array('name' => 'vat', 'value' => 'isset($data["vat"])?$data["vat"]:0'),
                    array('name' => 'total', 'value' => 'isset($data["total"])?$data["total"]:0'),

                ),
            ));
            ;
            ?>
        </div>

    </div>
</div>

<script type="text/javascript">

</script>