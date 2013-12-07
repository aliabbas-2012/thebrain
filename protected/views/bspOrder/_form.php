<div class="form wide">

    
    <?php     $form = $this->beginWidget('CActiveForm', array(
    'id' => 'bsp-order-form',
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
                <?php echo $form->labelEx($model,'item_id',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'item_id',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'item_id'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'buyer_id',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'buyer_id',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'buyer_id'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'seller_id',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'seller_id',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'seller_id'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'date_order',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'date_order',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'date_order'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'date_start',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'date_start',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'date_start'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'date_finish',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'date_finish',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'date_finish'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'description',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'description', array('class' => 'form-control','maxlength' => 300)); ?>
                    <?php echo $form->error($model,'description'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'pph',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'pph',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'pph'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'comission',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'comission',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'comission'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'amount',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'amount',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'amount'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'payment',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'payment',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'payment'); ?>
 
                </div>

            </div><!-- group -->
                      
            
            <div class="row">
                <?php echo $form->labelEx($model,'status',array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'status',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'status'); ?>
 
                </div>

            </div><!-- group -->
                                                            

    
  <div class='form-actions no-margin-bottom'>
    <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
</div>      
<?php
$this->endWidget();
?>
</div><!-- form -->