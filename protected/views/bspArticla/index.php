<?php
/* @var $this BspArticlaController */
/* @var $model BspArticla */

$this->breadcrumbs = array(
    'Bsp Articlas' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List BspArticla', 'url' => array('index')),
    array('label' => 'Create BspArticla', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bsp-articla-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bsp Articlas</h1>

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
    'id' => 'bsp-articla-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'columns' => array(
        'article_name',
        'article_name_de',
        'custom_url',
        'custom_url_de',
        array('name' => 'iStatus', 'value' => '$data->iStatus==1?"Active":"InActive"'),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
