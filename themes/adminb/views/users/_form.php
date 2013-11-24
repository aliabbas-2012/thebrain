<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form wide">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'users-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>
    <?php
    if ($model->isNewRecord):
        ?>
        <div classh="row">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>
        <?php
    endif;
    ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <?php $this->renderPartial("//common/_company_field", array("form" => $form, "model" => $model)); ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'access_control_id'); ?>
        <?php
        $acc_list = array("" => "Select ") + CHtml::listDAta(AccessControl::model()->findAll("name!='SuperAdmin'"), "id", "name");
        echo $form->dropDownList($model, 'access_control_id', array("" => "Select ") + $acc_list);
        ?>
        <?php echo $form->error($model, 'access_control_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'is_active'); ?>
        <?php echo $form->checkBox($model, 'is_active'); ?>
        <?php echo $form->error($model, 'is_active'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'group_id'); ?>
        <?php
        $criteria = new CDbCriteria();
        $criteria->select = "id,name";
        $grp_list = array("" => "Select ") + CHtml::listDAta(UserGroups::model()->findAll($criteria), "id", "name");
        echo $form->dropDownList($model, 'group_id', $grp_list);
        ?>
        <?php echo $form->error($model, 'group_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array("class" => "btn-info")); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->