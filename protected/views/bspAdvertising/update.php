<?php
/* @var $this BspAdvertisingController */
/* @var $model BspAdvertising */

$this->breadcrumbs=array(
	'Bsp Advertisings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BspAdvertising', 'url'=>array('index')),
	array('label'=>'Create BspAdvertising', 'url'=>array('create')),
	array('label'=>'View BspAdvertising', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BspAdvertising', 'url'=>array('admin')),
);
?>

<h1>Update BspAdvertising <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>