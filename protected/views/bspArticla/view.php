
<h1>View Bsp Articla #<?php echo $model->ID; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array('name' => 'article_name', "value" => $model->article_name, "type" => "raw"),
        array('name' => 'article_name_de', "value" => $model->article_name_de, "type" => "raw"),
        array('name' => 'details_en', "value" => $model->details_en, "type" => "raw"),
        array('name' => 'details_de', "value" => $model->details_de, "type" => "raw"),
        'custom_url',
        'custom_url_de',
        array('name' => 'iStatus', 'value' => $model->iStatus == 1 ? "Active" : "InActive"),
    ),
));
?>
