<div class="row-fluid ">


    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title' => "Change Password",
    ));
    ?>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'change-pass-form',
        'htmlOptions' => array(
            'class' => 'form-horizontal'
        ),
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

    <div class="form-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->passwordField($model, 'password', array("class" => "form-control")); ?>
        </div>

        <?php echo $form->error($model, 'password', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="clear"></div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'pwd_repeat', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->passwordField($model, 'pwd_repeat', array("class" => "form-control")); ?>
        </div>

        <?php echo $form->error($model, 'pwd_repeat', array("class" => 'alert alert-error')); ?>
        <div class="clear"></div>
        <p class="hint">
            Passwords must be minimum 6 characters and can contain alphabets, numbers and special characters.
        </p>
    </div>
    <div class="clear"></div>
    <div class="form-group buttons">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo CHtml::submitButton(Yii::t("user", 'Change Password'), array('class' => 'btn btn btn-primary')); ?>
        </div>

    </div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>