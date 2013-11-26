<?php
/* @var $this BspMessageController */
/* @var $model BspMessage */

$this->breadcrumbs=array(
	'Bsp Messages'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BspMessage', 'url'=>array('index')),
	array('label'=>'Create BspMessage', 'url'=>array('create')),
	array('label'=>'View BspMessage', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage BspMessage', 'url'=>array('admin')),
);
?>

<h1>Update BspMessage <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>