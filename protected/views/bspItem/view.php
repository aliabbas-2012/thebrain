<?php
/* @var $this BspItemController */
/* @var $model BspItem */

$this->breadcrumbs=array(
	'Bsp Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BspItem', 'url'=>array('index')),
	array('label'=>'Create BspItem', 'url'=>array('create')),
	array('label'=>'Update BspItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BspItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BspItem', 'url'=>array('admin')),
);
?>

<h1>View BspItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_id',
		'sub_category_id',
		'group_id',
		'name',
		'avatar_image',
		'description',
		'num_star',
		'num_like',
		'user_id',
		'date_create',
		'price',
		'num_review',
		'sound_id',
		'video_id',
		'item_image',
		'background_image',
		'discount_price',
		'is_public',
		'showlocation',
		'num_orders',
		'my_condition',
		'my_other_price',
		'iStatus',
		'iPayment',
		'special_deal',
		'currency_id',
		'per_price',
		'seo_title',
		'seo_description',
		'seo_keywords',
		'lat',
		'lng',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
