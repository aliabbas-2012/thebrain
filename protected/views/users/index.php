<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = array(
    'Users' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Users', 'url' => array('index')),
    array('label' => 'Create Users', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>


<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'users-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'columns' => array(
        'id',
        'first_name',
        'second_name',
        'username',
        'user_email',
        'type',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
