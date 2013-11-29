<?php
/* @var $this BspNewfeedController */
/* @var $model BspNewfeed */

$this->breadcrumbs = array(
    'Bsp Newfeeds' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List BspNewfeed', 'url' => array('index')),
    array('label' => 'Create BspNewfeed', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bsp-newfeed-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bsp Newfeeds</h1>

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
    'id' => 'bsp-newfeed-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'columns' => array(
        'id',
        'status',
        'detail',
        'description',
        'detail_de',
        'description_de',
        /*
          'create_time',
          'create_user_id',
          'update_time',
          'update_user_id',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
