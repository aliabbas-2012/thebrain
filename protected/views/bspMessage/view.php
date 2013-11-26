<?php
/* @var $this BspMessageController */
/* @var $model BspMessage */

$this->breadcrumbs=array(
	'Bsp Messages'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List BspMessage', 'url'=>array('index')),
	array('label'=>'Create BspMessage', 'url'=>array('create')),
	array('label'=>'Update BspMessage', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete BspMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BspMessage', 'url'=>array('admin')),
);
?>

<h1>View BspMessage #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'user_send',
		'user_receive',
		'is_view',
		'detail',
		'sFile',
		'subject',
		'date_time',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
