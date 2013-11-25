<?php
/* @var $this BspBlogController */
/* @var $model BspBlog */


?>

<h1>Update Bsp Blog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>