<?php
/* @var $this BspCategoryController */
/* @var $model BspCategory */

$this->breadcrumbs=array(
	'Bsp Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BspCategory', 'url'=>array('index')),
	array('label'=>'Create BspCategory', 'url'=>array('create')),
	array('label'=>'View BspCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BspCategory', 'url'=>array('admin')),
);
?>

<h1>Update BspCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>