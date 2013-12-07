<h1>Change Password</h1>
<?php
if (Yii::app()->user->hasFlash('success')) {
    echo "<span class='alert alert-success'>" . Yii::app()->user->getFlash('success') . "</span>";
    echo CHtml::tag("div", array('class' => "clear"),false);
}
?>
<div class="form wide">


    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'change-pass-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal'
        )
    ));
    ?>

    <p class="note">
        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
    </p>



    <div class="row">
        <?php echo $form->labelEx($model, 'old_pwd', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->passwordField($model, 'old_pwd', array('class' => 'form-control', 'maxlength' => 200)); ?>
            <?php echo $form->error($model, 'old_pwd'); ?>

        </div>

    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'maxlength' => 200)); ?>
            <?php echo $form->error($model, 'password'); ?>

        </div>

    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'pwd_repeat', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->passwordField($model, 'pwd_repeat', array('class' => 'form-control', 'maxlength' => 200)); ?>
            <?php echo $form->error($model, 'pwd_repeat'); ?>

        </div>

    </div><!-- group -->



    <div class='form-actions no-margin-bottom'>
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
    </div> 
    <?php $this->endWidget(); ?>

</div>