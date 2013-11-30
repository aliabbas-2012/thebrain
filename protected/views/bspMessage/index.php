<?php
/* @var $this BspMessageController */
/* @var $model BspMessage */

$this->breadcrumbs = array(
    'Bsp Messages' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List BspMessage', 'url' => array('index')),
    array('label' => 'Create BspMessage', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bsp-message-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bsp Messages</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'bsp-message-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'columns' => array(
        array(
            'name' => 'user_send',
            'value' => '!empty($data->sent_user) ? $data->sent_user->user_email : ""'
        ),
        'user_receive_name',
        'subject',
        'sFile',
        array('name' => 'is_view', 'value' => '$data->is_view == 1 ? "Viewed" : "Not Viewed"'),
        'date_time',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
