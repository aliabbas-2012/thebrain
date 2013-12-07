<div class="form wide">


    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'bsp-faq-form',
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
        <?php echo $form->labelEx($model, 'userID', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'userID', Users::model()->getUsersArray(), array('class' => 'form-control', 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'userID'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'sQname', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'sQname', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'sQname'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'sQdetails', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'sQdetails', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sQdetails'); ?>

        </div>

    </div><!-- group -->



    <div class="row">
        <?php echo $form->labelEx($model, 'sAnswers', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'sAnswers', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sAnswers'); ?>

        </div>

    </div><!-- group -->




    <div class="row">
        <?php echo $form->labelEx($model, 'sQname_en', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'sQname_en', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'sQname_en'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'sQdetails_en', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'sQdetails_en', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sQdetails_en'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'sAnswers_en', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'sAnswers_en', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sAnswers_en'); ?>

        </div>

    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($model, 'iStatus', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'iStatus', array("1" => "Active", "0" => "InActive"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'iStatus'); ?>

        </div>

    </div><!-- group -->



    <div class='form-actions no-margin-bottom'>
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
    </div>      
    <?php
    $this->endWidget();
    ?>
</div><!-- form -->