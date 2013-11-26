<?php
/* @var $this BspCategoryController */
/* @var $model BspCategory */

$this->breadcrumbs=array(
	'Bsp Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BspCategory', 'url'=>array('index')),
	array('label'=>'Create BspCategory', 'url'=>array('create')),
	array('label'=>'Update BspCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BspCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BspCategory', 'url'=>array('admin')),
);
?>

<h1>View BspCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'parent_name',
		'parent_id',
		'level',
		'num_post',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
