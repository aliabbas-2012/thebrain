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
<div id="page-contents">
    <?php
    $this->renderPartial("//faq/_index", array("dataProvider" => $dataProvider));
    ?>
</div>

<?php
$this->widget('DTScroller', array(
    'pages' => $dataProvider->pagination,
    'ajax' => true,
    'jsMethod' => "thepuzzleadmin.updateElementAjax(jQuery(this).attr('href'),'page-contents','','" . $this->action->id . "',true);return false;",
        )
);
?>