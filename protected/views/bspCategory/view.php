
<h1>View Bsp Category #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'name',
        'name_de',
        'parent_name',
    ),
));
?>
