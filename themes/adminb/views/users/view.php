<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = array(
    'Users' => array('index'),
    $model->username,
);
?>


<div class="pading-bottom-5">
    <div class="left_float">
        <h1>View Users #<?php echo $model->id; ?></h1>
    </div>

<?php /* Convert to Monitoring Log Buttons */ ?>
    <div class = "right_float">
        <span class="creatdate">
<?php
echo CHtml::link("Edit", $this->createUrl("update", array("id" => $model->primaryKey)), array('class' => "print_link_btn"));
?>
        </span>
    </div>
</div>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'first_name',
        'second_name',
        'username',
        'user_email',
        array('name' => 'birthday', 'value' => $model->birthday),
        array('name' => 'avatar', 'value' => zHtml::imageDoubleLink($model, "avatar", "Users", "avatar"), "type" => "raw"),
        'paypal_mail',
        'fbmail',
        array('name' => 'background', 'value' => zHtml::imageDoubleLink($model, "background", "Users", "background"), "type" => "raw"),
        'address',
        'country',
        'city',
        'zipcode',
        'phone',
        'lat',
        'lng',
        array('name' => 'store_url', 'value' => Yii::app()->request->hostInfo . "/" . Yii::app()->baseUrl . "/" . $model->store_url),
        'description',
    ),
));
?>
