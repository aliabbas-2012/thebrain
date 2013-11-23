<div class="row-fluid">


    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title' => "Change Password",
    ));
    ?>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'change-pass-form',
        //'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    //CVarDumper::dump($model->getErrors(),10,true);
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php
    if (Yii::app()->user->hasFlash('success')) {
        echo "<span class='alert alert-success'>" . Yii::app()->user->getFlash('success') . "</span>";
    }
    ?>

    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password', array("class" => 'alert alert-error')); ?>
    </div>

    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'pwd_repeat'); ?>
        <?php echo $form->passwordField($model, 'pwd_repeat'); ?>
        <?php echo $form->error($model, 'pwd_repeat', array("class" => 'alert alert-error')); ?>
        <p class="hint">
            Passwords must be minimum 6 characters and can contain alphabets, numbers and special characters.
        </p>
    </div>

    <div class="row-fluid buttons wide-button">
        <?php echo CHtml::submitButton('Change Password', array('class' => 'btn btn btn-primary')); ?>
    </div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>