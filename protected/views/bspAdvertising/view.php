<?php
/* @var $this BspAdvertisingController */
/* @var $model BspAdvertising */

$this->breadcrumbs = array(
    'Bsp Advertisings' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List BspAdvertising', 'url' => array('index')),
    array('label' => 'Create BspAdvertising', 'url' => array('create')),
    array('label' => 'Update BspAdvertising', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete BspAdvertising', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage BspAdvertising', 'url' => array('admin')),
);
?>

<h1>View Bsp Advertising #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'adv_name',
        array("name" => 'adv_img', 'value' => zHtml::imageLink($model, 'adv_img', "adv_img"),"type"=>"raw"),
        'adv_url',
        'adv_name_de',
        array("name" => 'adv_img_de', 'value' => zHtml::imageLink($model, 'adv_img_de', "adv_img_de"),"type"=>"raw"),
        'adv_url_de',
        array("name" => 'adv_position', 'value' => $model->all_positions[$model->adv_position]),
        array("name" => 'iStatus', 'value' => $model->all_status[$model->iStatus]),
    ),
));
?>
