<?php
/* @var $this BspFaqController */
/* @var $model BspFaq */
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
        <?php echo $form->labelEx($model, 'userID', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'userID', array(""=>"All")+Users::model()->getUsersArray(), array('class' => 'form-control', 'maxlength' => 45)); ?>
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
        <?php echo $form->labelEx($model, 'iStatus', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'iStatus', array(""=>"All")+array("1" => "Active", "0" => "InActive"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'iStatus'); ?>

        </div>

    </div><!-- group -->
    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->