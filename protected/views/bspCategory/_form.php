<div class="form wide">


    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'bsp-category-form',
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
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'name'); ?>

        </div>

    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'name_de', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'name_de', array('class' => 'form-control', 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'name_de'); ?>

        </div>

    </div><!-- group -->



    <div class="row">
        <?php echo $form->labelEx($model, 'parent_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'parent_id', array("" => "None") + BspCategory::model()->getCategoryList(), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'parent_id'); ?>

        </div>

    </div><!-- group -->



    <div class='form-actions no-margin-bottom'>
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
    </div>      
    <?php
    $this->endWidget();
    ?>
</div><!-- form -->