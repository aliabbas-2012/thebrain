<?php
/* @var $this BspNewfeedController */
/* @var $model BspNewfeed */

$this->breadcrumbs=array(
	'Bsp Newfeeds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BspNewfeed', 'url'=>array('index')),
	array('label'=>'Create BspNewfeed', 'url'=>array('create')),
	array('label'=>'View BspNewfeed', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BspNewfeed', 'url'=>array('admin')),
);
?>

<h1>Update BspNewfeed <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>