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
        'htmlOptions' => array(
            'class' => 'form-horizontal'
        )
    ));
    ?>

    <p class="note"><?php echo Yii::t('user', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('user', 'are required'); ?>.</p>

    <?php
    if (Yii::app()->user->hasFlash('success')) {
        echo "<span class='alert alert-success'>" . Yii::app()->user->getFlash('success') . "</span>";
    }
    ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'old_pwd', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->passwordField($model, 'old_pwd', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'old_pwd', array("class" => 'alert alert-error')); ?>
        </div>

    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'password', array("class" => 'alert alert-error')); ?>
        </div>

    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'pwd_repeat', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->passwordField($model, 'pwd_repeat', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'pwd_repeat', array("class" => 'alert alert-error')); ?>
        </div>

        <p class="hint">
            <?php echo Yii::t('user', 'Passwords must be minimum 6'); ?>
            <?php echo Yii::t('user', 'characters and can contain alphabets, numbers and special characters'); ?>.
        </p>
    </div>

    <div class="form-group buttons">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo CHtml::submitButton('Change Password', array('class' => 'btn-default')); ?>
        </div>

    </div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>