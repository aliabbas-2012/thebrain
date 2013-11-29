<?php
/* @var $this BspFaqController */
/* @var $model BspFaq */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bsp-faq-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bsp Faqs</h1>

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
    'id' => 'bsp-faq-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'columns' => array(
        array('name' => 'userID', "value" => '!empty($data->userID) ? $data->user->username : ""'),
        'sQname',
        array('name' => 'sQdetails', 'value' => '$data->sQdetails', 'type' => "raw"),
        'dDateposted',
        'dDateUpdate',
        array('name' => 'sAnswers', 'value' => '$data->sAnswers', 'type' => "raw"),
        array('name' => 'iStatus', 'value' => '$data->iStatus==1?"Active":"InActive"'),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
