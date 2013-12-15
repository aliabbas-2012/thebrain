<?php
/* @var $this BspArticlaController */
/* @var $model BspArticla */
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
        <?php echo $form->labelEx($model, 'article_name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'article_name', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'article_name'); ?>

        </div>

    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'custom_url', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'custom_url', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'custom_url'); ?>

        </div>

    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($model, 'custom_url_de', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'custom_url_de', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'custom_url_de'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'iStatus', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'iStatus', array("1" => "Active", "0" => "InActive"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'iStatus'); ?>

        </div>

    </div><!-- group -->
    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->