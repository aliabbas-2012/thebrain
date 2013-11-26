<?php
/* @var $this BspCategoryController */
/* @var $model BspCategory */

$this->breadcrumbs=array(
	'Bsp Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BspCategory', 'url'=>array('index')),
	array('label'=>'Manage BspCategory', 'url'=>array('admin')),
);
?>

<h1>Create BspCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>