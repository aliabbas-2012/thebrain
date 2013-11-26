<?php
/* @var $this BspItemController */
/* @var $model BspItem */

$this->breadcrumbs=array(
	'Bsp Items'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BspItem', 'url'=>array('index')),
	array('label'=>'Create BspItem', 'url'=>array('create')),
	array('label'=>'View BspItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BspItem', 'url'=>array('admin')),
);
?>

<h1>Update BspItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>