<?php
/* @var $this BspFaqController */
/* @var $model BspFaq */

$this->breadcrumbs = array(
    'Bsp Faqs' => array('index'),
    $model->ID,
);
?>

<h1>View Bsp Faq #<?php echo $model->ID; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array('name' => 'userID', "value" => !empty($model->userID) ? $model->user->username : ""),
        array('name' => 'sQname', "value" => $model->sQname, "type" => "raw"),
        array('name' => 'sQdetails', "value" => $model->sQdetails, "type" => "raw"),
        array('name' => 'sAnswers', "value" => $model->sAnswers, "type" => "raw"),
        array('name' => 'sQname_en', "value" => $model->sQname_en, "type" => "raw"),
        array('name' => 'sQdetails_en', "value" => $model->sQdetails_en, "type" => "raw"),
        array('name' => 'sAnswers_en', "value" => $model->sAnswers_en, "type" => "raw"),
        'dDateposted',
        'dDateUpdate',
        array('name' => 'iStatus', 'value' => $model->iStatus == 1 ? "Active" : "InActive"),
    ),
));
?>
