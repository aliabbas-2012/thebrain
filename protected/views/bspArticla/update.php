<?php
/* @var $this BspArticlaController */
/* @var $model BspArticla */

$this->breadcrumbs=array(
	'Bsp Articlas'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List BspArticla', 'url'=>array('index')),
	array('label'=>'Create BspArticla', 'url'=>array('create')),
	array('label'=>'View BspArticla', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage BspArticla', 'url'=>array('admin')),
);
?>

<h1>Update BspArticla <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>