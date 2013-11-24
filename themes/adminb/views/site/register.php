<div class="row-fluid">


    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title' => "Employer Registeration",
    ));
    ?>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'emp-reg-form',
        //'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
      //CVarDumper::dump($model->getErrors(),10,true);
    ?>

    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username', array("class" => 'alert alert-error')); ?>
        <?php echo $form->hiddenField($model, 'type', array('value' => 'employer')) ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'confirm_password'); ?>
        <?php echo $form->passwordField($model, 'confirm_password'); ?>
        <?php echo $form->error($model, 'confirm_password', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email'); ?>
        <?php echo $form->error($model, 'email', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textField($model, 'first_name'); ?>
        <?php echo $form->error($model, 'first_name', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'last_name'); ?>
        <?php echo $form->textField($model, 'last_name'); ?>
        <?php echo $form->error($model, 'last_name', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'gender'); ?>
        <?php echo $form->dropDownList($model, 'gender', Yii::app()->params['gender']); ?>
        <?php echo $form->error($model, 'gender', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'location'); ?>
        <?php echo $form->textArea($model, 'location'); ?>
        <?php echo $form->error($model, 'location', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        
        <?php echo $form->labelEx($model, 'dob'); ?>
        <?php
        $this->widget('ItstJUIDatePicker', array(
            'model' => $model,
            'attribute' => 'dob',
            'model_attribute' => 'dob',
            'options' => array('showAnim' => 'fold',
                'dateFormat' => Yii::app()->params['dateformat'],
                'changeYear' => true,
            ),
        ));
        ?>
        <?php echo $form->error($model, 'dob', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'home_phone'); ?>
        <?php echo $form->textField($model, 'home_phone'); ?>
        <?php echo $form->error($model, 'home_phone', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'mobile_phone'); ?>
        <?php echo $form->textField($model, 'mobile_phone'); ?>
        <?php echo $form->error($model, 'mobile_phone', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'listen_about_us'); ?>
        <?php echo $form->textArea($model, 'listen_about_us'); ?>
        <?php echo $form->error($model, 'listen_about_us', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid buttons wide-button">
        <?php echo CHtml::submitButton('Register', array('class' => 'btn btn btn-primary')); ?>
        <?php
        echo CHtml::link("Login", $this->createUrl("/site/login"));
        ?>
    </div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>