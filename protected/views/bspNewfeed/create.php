<?php
/* @var $this BspNewfeedController */
/* @var $model BspNewfeed */

$this->breadcrumbs=array(
	'Bsp Newfeeds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BspNewfeed', 'url'=>array('index')),
	array('label'=>'Manage BspNewfeed', 'url'=>array('admin')),
);
?>

<h1>Create BspNewfeed</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>