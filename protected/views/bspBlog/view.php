<?php
/* @var $this BspBlogController */
/* @var $model BspBlog */
?>

<h1>View Bsp Blog #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array('name' => 'user_id', "value" => !empty($model->user_id) ? $model->user->username : ""),
        'title',
        array('name' => 'img', "value" => zHtml::imageLink($model, "img", "blog"), "type" => "raw"),
        'description',
        array('name' => 'detail', 'value' => $model->detail, 'type' => 'raw'),
    ),
));
?>
