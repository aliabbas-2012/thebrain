<?php
/* @var $this BspArticlaController */
/* @var $model BspArticla */

$this->breadcrumbs=array(
	'Bsp Articlas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BspArticla', 'url'=>array('index')),
	array('label'=>'Manage BspArticla', 'url'=>array('admin')),
);
?>

<h1>Create BspArticla</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>