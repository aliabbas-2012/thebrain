<?php
/* @var $this BspNewfeedController */
/* @var $model BspNewfeed */

$this->breadcrumbs=array(
	'Bsp Newfeeds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BspNewfeed', 'url'=>array('index')),
	array('label'=>'Create BspNewfeed', 'url'=>array('create')),
	array('label'=>'Update BspNewfeed', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BspNewfeed', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BspNewfeed', 'url'=>array('admin')),
);
?>

<h1>View BspNewfeed #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status',
		'detail',
		'description',
		'detail_de',
		'description_de',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
