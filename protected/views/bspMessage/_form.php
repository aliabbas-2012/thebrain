<div class="form wide">

    
    <?php     $form = $this->beginWidget('CActiveForm', array(
    'id' => 'bsp-message-form',
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
                <?php echo $form->labelEx($model,'user_send',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'user_send',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'user_send'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'user_receive',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'user_receive',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'user_receive'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'is_view',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'is_view',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'is_view'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'detail',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textArea($model, 'detail',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'detail'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'sFile',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'sFile', array('class' => 'form-control','maxlength' => 255)); ?>
                    <?php echo $form->error($model,'sFile'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'subject',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'subject', array('class' => 'form-control','maxlength' => 255)); ?>
                    <?php echo $form->error($model,'subject'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="form-group">
                <?php echo $form->labelEx($model,'date_time',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'date_time',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'date_time'); ?>
 
                </div>

            </div><!-- group -->
                                                            

    
  <div class='form-actions no-margin-bottom'>
    <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
</div>      
<?php
$this->endWidget();
?>
</div><!-- form -->