<?php
/* @var $this BspItemController */
/* @var $model BspItem */

$this->breadcrumbs=array(
	'Bsp Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BspItem', 'url'=>array('index')),
	array('label'=>'Manage BspItem', 'url'=>array('admin')),
);
?>

<h1>Create BspItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>