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
        'birthday',
        array(
            'name' => 'gender',
            'value' => $model->gender ==1?"Male":"Female",
            'type' => "raw",
        ),
        'fbmail',
        'paypal_mail',
        'country',
        'city',
    ),
));
?>
