<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'second_name',
		'username',
		'user_email',
		'type',
		'phone',
		'avatar',
		'birthday',
		'gender',
		'store_url',
		'paypal_mail',
		'fbmail',
		'password',
		'password_hint',
		'description',
		'address',
		'country',
		'city',
		'zipcode',
		'lat',
		'lng',
		'background',
		'sRecentList',
		'sWishList',
		'lastActiveTime',
		'email_authenticate',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
