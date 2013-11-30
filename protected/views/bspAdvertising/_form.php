<div class="form wide">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'bsp-advertising-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>

    <p class="note">
        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
    </p>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'adv_name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'adv_name', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'adv_name'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'adv_img', array('class' => 'control-label col-lg-2')); ?>
         <div class="col-lg-4">
            <?php echo $form->fileField($model, 'adv_img', array('class' => '')); ?>
            <?php echo zHtml::imageLink($model, 'adv_img', "adv_img"); ?>
            <?php echo $form->error($model, 'adv_img'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'adv_url', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'adv_url', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'adv_url'); ?>

        </div>

    </div><!-- group -->

    <div class="form-group">
        <?php echo $form->labelEx($model, 'adv_name_de', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'adv_name_de', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'adv_name_de'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'adv_img_de', array('class' => 'control-label col-lg-2')); ?>
          <div class="col-lg-4">
            <?php echo $form->fileField($model, 'adv_img_de', array('class' => '')); ?>
            <?php echo zHtml::imageLink($model, 'adv_img_de', "adv_img_de"); ?>
            <?php echo $form->error($model, 'adv_img_de'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'adv_url_de', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'adv_url_de', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'adv_url_de'); ?>

        </div>

    </div><!-- group -->

    <div class="form-group">
        <?php echo $form->labelEx($model, 'adv_position', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'adv_position', $model->all_positions,array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'adv_position'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'iStatus', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'iStatus',$model->all_status, array('class' => 'form-control')); ?>
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