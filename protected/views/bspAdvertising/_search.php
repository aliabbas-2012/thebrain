<?php
/* @var $this BspAdvertisingController */
/* @var $model BspAdvertising */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'adv_name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'adv_name', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'adv_name'); ?>

        </div>

    </div><!-- group -->      

    <div class="row">
        <?php echo $form->labelEx($model, 'adv_name_de', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'adv_name_de', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'adv_name_de'); ?>

        </div>

    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($model, 'adv_position', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'adv_position', $model->all_positions, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'adv_position'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'iStatus', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'iStatus', $model->all_status, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'iStatus'); ?>

        </div>
    </div><!-- group -->

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array("class" => "btn btn-primary")); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->