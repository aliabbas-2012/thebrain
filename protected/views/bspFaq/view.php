<?php
/* @var $this BspFaqController */
/* @var $model BspFaq */

$this->breadcrumbs=array(
	'Bsp Faqs'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List BspFaq', 'url'=>array('index')),
	array('label'=>'Create BspFaq', 'url'=>array('create')),
	array('label'=>'Update BspFaq', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete BspFaq', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BspFaq', 'url'=>array('admin')),
);
?>

<h1>View BspFaq #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'userID',
		'sQname',
		'sQdetails',
		'dDateposted',
		'sAnswers',
		'dDateUpdate',
		'iStatus',
		'sQname_en',
		'sQdetails_en',
		'sAnswers_en',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
