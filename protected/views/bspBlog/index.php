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
    'cssFile'=>Yii::app()->theme->baseUrl."/assets/css/gridview.css",
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'title',
        'img',
        'user_id',
        array(
            'class' => 'CButtonColumn',
            
        ),
    ),
));
?>
