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
        array(
            'name' => 'item.name',
            'value' => 'isset($data->item)?$data->item->name:""',
            'headerHtmlOptions' => array("class" => "not_responsive"),
            'htmlOptions' => array("class" => "not_responsive")
        ),
        array('header' => 'Available', 'name' => 'item.price', 'value' => 'isset($data->item)?$data->item->price:""'),
        array('header' => 'Amount', 'value' => 'isset($data->amount)?$data->amount:""'),
        array('header' => 'Currency', 'value' => 'html_entity_decode("Euro &euro;")'),
        array('header' => 'Withdraw Funds', "type" => "raw", 'value' => 'CHtml::button("Withdraw", array("disabled" => "disabled"))'),
    ),
));
;
?>