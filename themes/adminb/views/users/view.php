<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = array(
    'Users' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'List Users', 'url' => array('index')),
    array('label' => 'Create Users', 'url' => array('create')),
    array('label' => 'Update Users', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Users', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Users', 'url' => array('admin')),
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
        'id',
        'username',
        'title',
        'email',
        array(
            'name' => 'is_active',
            'value' => $model->is_active == 1 ? "Yes" : "No",
            'type' => "raw",
        ),
        array(
            'name' => 'group_id',
            'value' => !empty($model->group) ? $model->group->name : "",
            'type' => "raw",
        ),
        array(
            'name' => 'access_control_id',
            'value' => !empty($model->access_contol) ? $model->access_contol->name : "",
            'type' => "raw",
        ),
        array(
            'name' => 'company_id',
            'value' => !empty($this->list_companies[$model->company_id]) ? $this->list_companies[$model->company_id] : "",
            'type' => "raw",
        ),
    ),
));
?>
