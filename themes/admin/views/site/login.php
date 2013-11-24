<header>

    <h5>Login </h5>

</header>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions' => array(
        'class' => 'form-horizontal'
    )
        ));
?>
<div class="form-group">
    <?php echo $form->labelEx($model, 'username', array("class" => "control-label col-lg-4")); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'username', array("class" => 'form-control')); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'password', array("class" => "control-label col-lg-4")); ?>
    <div class="col-lg-4">
        <?php echo $form->passwordField($model, 'password', array("class" => 'form-control')); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->label($model, 'rememberMe', array("class" => "control-label col-lg-4")); ?>

    <div class="col-lg-4">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </div>
</div>


<div class="form-actions no-margin-bottom">
    <?php echo CHtml::submitButton('Login', array("class" => "btn btn-primary")); ?>
</div>
<?php $this->endWidget(); ?>