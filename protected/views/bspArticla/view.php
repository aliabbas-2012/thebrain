<?php
/* @var $this BspArticlaController */
/* @var $model BspArticla */

$this->breadcrumbs=array(
	'Bsp Articlas'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List BspArticla', 'url'=>array('index')),
	array('label'=>'Create BspArticla', 'url'=>array('create')),
	array('label'=>'Update BspArticla', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete BspArticla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BspArticla', 'url'=>array('admin')),
);
?>

<h1>View BspArticla #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'article_name',
		'details_en',
		'details_de',
		'custom_url',
		'iStatus',
		'article_name_de',
		'custom_url_de',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
