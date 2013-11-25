<?php
/* @var $this BspBlogController */
/* @var $model BspBlog */
?>

<h1>View Bsp Blog #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'user_id',
        'title',
        'img',
        'description',
        array('name' => 'detail', 'value' => $model->detail, 'type' => 'raw'),
    ),
));
?>
