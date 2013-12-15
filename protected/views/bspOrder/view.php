<?php
/* @var $this BspOrderController */
/* @var $model BspOrder */

$this->breadcrumbs = array(
    'Bsp Orders' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List BspOrder', 'url' => array('index')),
    array('label' => 'Create BspOrder', 'url' => array('create')),
    array('label' => 'Update BspOrder', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete BspOrder', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage BspOrder', 'url' => array('admin')),
);
?>

<h1>View Bsp Order #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
         array('name' => 'item_id', 'value' => !empty($model->item)?$model->item->name:"",),
        'buyer_id',
        'seller_id',
        'date_order',
        'date_start',
        'date_finish',
        'description',
        'pph',
        'comission',
        'amount',
        'payment',
        array('name' => 'status', 'value' => $model->status == 1 ? "Enabled" : "Disabled",),
        'create_time',
        'create_user_id',
        'update_time',
        'update_user_id',
    ),
));
?>
