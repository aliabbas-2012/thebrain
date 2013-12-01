<?php
/* @var $this BspItemController */
/* @var $model BspItem */

$this->breadcrumbs = array(
    'Bsp Items' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List BspItem', 'url' => array('index')),
    array('label' => 'Create BspItem', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bsp-item-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bsp Items</h1>

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
    'id' => 'bsp-item-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'columns' => array(
        array('name' => 'group_id', 'value' => '!empty($data->group) ? $data->group->name : ""'),
        array('name' => 'category_id', 'value' => !empty($data->category) ? $data->category->name : ""),
        array('name' => 'sub_category_id', 'value' => '!empty($data->sub_category) ? $data->sub_category->name : ""'),
        'name',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
