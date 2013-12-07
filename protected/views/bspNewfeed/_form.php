<div class="form wide">


    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'bsp-newfeed-form',
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
        <?php echo $form->labelEx($model, 'detail', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'detail', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'detail'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'description', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'detail_de', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'detail_de', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'detail_de'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'description_de', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'description_de', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description_de'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'status', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'status', array("1"=>"Active","0"=>"Deactive"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>

        </div>

    </div><!-- group -->



    <div class='form-actions no-margin-bottom'>
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
    </div>      
    <?php
    $this->endWidget();
    ?>
</div><!-- form -->