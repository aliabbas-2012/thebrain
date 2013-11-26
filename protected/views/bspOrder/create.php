<?php
/* @var $this BspOrderController */
/* @var $model BspOrder */

$this->breadcrumbs=array(
	'Bsp Orders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BspOrder', 'url'=>array('index')),
	array('label'=>'Manage BspOrder', 'url'=>array('admin')),
);
?>

<h1>Create BspOrder</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>