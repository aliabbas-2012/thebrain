<?php
/* @var $this BspFaqController */
/* @var $model BspFaq */

$this->breadcrumbs=array(
	'Bsp Faqs'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List BspFaq', 'url'=>array('index')),
	array('label'=>'Create BspFaq', 'url'=>array('create')),
	array('label'=>'View BspFaq', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage BspFaq', 'url'=>array('admin')),
);
?>

<h1>Update BspFaq <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>