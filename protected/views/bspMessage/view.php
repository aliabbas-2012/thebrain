<?php
/* @var $this BspMessageController */
/* @var $model BspMessage */

$this->breadcrumbs = array(
    'Bsp Messages' => array('index'),
    $model->Id,
);

$this->menu = array(
    array('label' => 'List BspMessage', 'url' => array('index')),
    array('label' => 'Create BspMessage', 'url' => array('create')),
    array('label' => 'Update BspMessage', 'url' => array('update', 'id' => $model->Id)),
    array('label' => 'Delete BspMessage', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->Id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage BspMessage', 'url' => array('admin')),
);
?>

<h1>View Bsp Message #<?php echo $model->Id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array('name' => 'user_send', 'value' => !empty($model->sent_user) ? $model->sent_user->user_email : ""),
        'user_receive_name',
        'subject',
        array('name' => 'sFile', "value" => zHtml::imageLink($model, "sFile", "message"), "type" => "raw"),
        array('name' => 'is_view', 'value' => $model->is_view == 1 ? "Viewed" : "Not Viewed"),
        'detail',
        'date_time',
    ),
));
?>
