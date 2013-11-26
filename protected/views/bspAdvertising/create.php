<?php
/* @var $this BspAdvertisingController */
/* @var $model BspAdvertising */

$this->breadcrumbs=array(
	'Bsp Advertisings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BspAdvertising', 'url'=>array('index')),
	array('label'=>'Manage BspAdvertising', 'url'=>array('admin')),
);
?>

<h1>Create BspAdvertising</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>