<header>

    <h1>Login </h1>

</header>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => false,
    'htmlOptions' => array(
        'class' => 'form-horizontal'
    )
        ));
?>
<div class="form-group">
    <?php echo $form->labelEx($model, 'username', array("class" => "control-label col-sm-2")); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'username', array("class" => 'form-control')); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'password', array("class" => "control-label col-sm-2")); ?>
    <div class="col-lg-4">
        <?php echo $form->passwordField($model, 'password', array("class" => 'form-control')); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->label($model, 'rememberMe', array("class" => "control-label col-sm-2")); ?>

    <div class="col-lg-4">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </div>
</div>


<div class="form-group buttons">
    <div class="col-sm-offset-2 col-sm-10">

        <?php echo CHtml::submitButton('Login', array("class" => "btn btn-default")); ?>
    </div>

</div>
<?php $this->endWidget(); ?>