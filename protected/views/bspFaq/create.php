<?php
/* @var $this BspFaqController */
/* @var $model BspFaq */

$this->breadcrumbs=array(
	'Bsp Faqs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BspFaq', 'url'=>array('index')),
	array('label'=>'Manage BspFaq', 'url'=>array('admin')),
);
?>

<h1>Create BspFaq</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>