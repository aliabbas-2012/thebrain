<div class="form wide">


    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'bsp-blog-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal'
        )
    ));
    ?>

    <p class="note">
        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
    </p>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'user_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'user_id', array('class' => 'form-control', 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'user_id'); ?>

        </div>

    </div><!-- group -->
    <div class="form-group">
        <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'title', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'title'); ?>

        </div>

    </div><!-- group -->
    <div class="form-group">
        <?php echo $form->labelEx($model, 'img', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'img', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'img'); ?>

        </div>

    </div><!-- group -->
    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'description', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description'); ?>

        </div>

    </div><!-- group -->
    <div class="form-group">
        <?php echo $form->labelEx($model, 'detail', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'detail', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'detail'); ?>

        </div>

    </div><!-- group -->



    <div class='form-actions no-margin-bottom'>
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
    </div>      
    <?php
    $this->endWidget();
    ?>
</div><!-- form -->