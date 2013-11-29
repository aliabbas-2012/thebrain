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

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
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
        'id',
        'item_id',
        'buyer_id',
        'seller_id',
        'date_order',
        'date_start',
        /*
          'date_finish',
          'description',
          'pph',
          'comission',
          'amount',
          'payment',
          'status',
          'create_time',
          'create_user_id',
          'update_time',
          'update_user_id',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
