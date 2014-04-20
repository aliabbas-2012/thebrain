<?php
/* @var $this BspOrderController */
/* @var $model BspOrder */

$this->breadcrumbs = array(
    'Payments',
);

$this->PcmWidget['filter'] = array('name' => 'ItstLeftFilter',
    'attributes' => array(
        'model' => $model,
        'filters' => $this->filters,
        'keyUrl' => true,
        'action' => Yii::app()->createUrl($this->route),
        'grid_id' => 'payment-grid',
        "view"=>"paymentNotifications"
        ));
?>

<h1>Manage Payments</h1>



<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'payment-grid',
    'dataProvider' => $dataProvider,
    'filter' => $model,
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'columns' => array(
        array(
            'name' => 'item_id',
            "type" => "raw",
            'value' => '!empty($data->offer)?CHtml::link($data->offer->name,Yii::app()->controller->createUrl("/item/view",array("id"=>$data->id))):""',
        ),
        array('name' => 'buyer_id', 'value' => '!empty($data->buyer)?$data->buyer->_name:""',),
        array('name' => 'sender_id', 'value' => '!empty($data->seller)?$data->seller->_name:""',),
        array('name' => 'sender_id', 'value' => '!empty($data->seller)?$data->seller->_name:""',),
        array('name' => 'amount', 'value' => '$data->amount',),
        array('name' => 'puzzzle_commission', 'value' => '$data->puzzzle_commission',),
        array('name' => '_transfer_amount', 'value' => '$data->amount -  $data->puzzzle_commission',),
        'buyer_status',
        'seller_status',
        'puzzzle_admin_status',
        'ip_address',
    ),
));
?>
