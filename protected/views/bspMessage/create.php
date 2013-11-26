<?php
/* @var $this BspMessageController */
/* @var $model BspMessage */

$this->breadcrumbs=array(
	'Bsp Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BspMessage', 'url'=>array('index')),
	array('label'=>'Manage BspMessage', 'url'=>array('admin')),
);
?>

<h1>Create BspMessage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>