<div class="form wide">

    
    <?php     $form = $this->beginWidget('CActiveForm', array(
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

    <?php echo $form->errorSummary($model); ?>

                          
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'name',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'name', array('class' => 'form-control','maxlength' => 45)); ?>
                    <?php echo $form->error($model,'name'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'parent_name',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'parent_name', array('class' => 'form-control','maxlength' => 225)); ?>
                    <?php echo $form->error($model,'parent_name'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'parent_id',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'parent_id',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'parent_id'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'level',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'level',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'level'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'num_post',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'num_post', array('class' => 'form-control','maxlength' => 30)); ?>
                    <?php echo $form->error($model,'num_post'); ?>
 
                </div>

            </div><!-- group -->
                                                            

    
  <div class='form-actions no-margin-bottom'>
    <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
</div>      
<?php
$this->endWidget();
?>
</div><!-- form -->