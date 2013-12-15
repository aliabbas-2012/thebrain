<?php
/* @var $this BspCategoryController */
/* @var $model BspCategory */
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
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'name'); ?>

        </div>

    </div><!-- group -->



    <div class="row">
        <?php echo $form->labelEx($model, 'parent_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'parent_id', array("" => "None") + BspCategory::model()->getCategoryList(), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'parent_id'); ?>

        </div>

    </div><!-- group -->

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->