<?php
/* @var $this BspOrderController */
/* @var $model BspOrder */

$this->breadcrumbs = array(
    'Bsp Orders' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List BspOrder', 'url' => array('index')),
    array('label' => 'Create BspOrder', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bsp-order-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bsp Orders</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php //echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
//    $this->renderPartial('_search', array(
//        'model' => $model,
//    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'bsp-order-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'columns' => array(
        array('name' => 'item_id', 'value' => '!empty($data->item)?$data->item->name:""',),
        array('name' => 'buyer_id', 'value' => '!empty($data->buyer)?$data->buyer->username:""',),
        array('name' => 'seller_id', 'value' => '!empty($data->seller)?$data->seller->username:""',),
        'date_order',
        'date_start',
        'date_finish',
        'pph',
        'comission',
        'amount',
        'payment',
        array('name' => 'status', 'value' => '$data->status == 1 ? "Enabled" : "Disabled"',),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
