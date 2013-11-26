<?php
/* @var $this BspAdvertisingController */
/* @var $model BspAdvertising */

$this->breadcrumbs=array(
	'Bsp Advertisings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BspAdvertising', 'url'=>array('index')),
	array('label'=>'Create BspAdvertising', 'url'=>array('create')),
	array('label'=>'Update BspAdvertising', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BspAdvertising', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BspAdvertising', 'url'=>array('admin')),
);
?>

<h1>View BspAdvertising #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'adv_name',
		'adv_img',
		'adv_url',
		'adv_position',
		'iStatus',
		'adv_name_de',
		'adv_img_de',
		'adv_url_de',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
