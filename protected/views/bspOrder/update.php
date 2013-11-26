<?php
/* @var $this BspOrderController */
/* @var $model BspOrder */

$this->breadcrumbs=array(
	'Bsp Orders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BspOrder', 'url'=>array('index')),
	array('label'=>'Create BspOrder', 'url'=>array('create')),
	array('label'=>'View BspOrder', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BspOrder', 'url'=>array('admin')),
);
?>

<h1>Update BspOrder <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>