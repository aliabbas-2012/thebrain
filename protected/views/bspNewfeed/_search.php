<?php
/* @var $this BspNewfeedController */
/* @var $model BspNewfeed */
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
        <?php echo $form->labelEx($model, 'status', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'status', array(""=>"All")+array("1" => "Active", "0" => "Deactive"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>

        </div>

    </div><!-- group -->                                                                                
    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->