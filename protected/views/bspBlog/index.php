<?php
/* @var $this BspBlogController */
/* @var $model BspBlog */



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bsp-blog-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bsp Blogs</h1>



<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'bsp-blog-grid',
    'dataProvider' => $model->search(),
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'filter' => $model,
    'columns' => array(
        'title',
        array('name' => 'img', "value" => 'zHtml::imageLink($data, "img", "blog")', "type" => "raw"),
        array('name' => 'user_id', "value" => '!empty($data->user_id) ? $data->user->username : ""'),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
