<?php
/* @var $this BspItemController */
/* @var $this->model BspItem */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => $this->action,
        'method' => 'get',
    ));
    $alphabets = array();
    for ($i = 65; $i <= 90; $i++) {
        $alphabets[chr($i)] = chr($i);
    }
    ?>

    <div class="row">

        <?php echo $form->labelEx($this->model, 'start_price', array('class' => 'control-label col-lg-2')); ?>

        <?php echo $form->textField($this->model, 'start_price', array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($this->model, 'start_price'); ?>
    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($this->model, 'end_price', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->textField($this->model, 'end_price', array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($this->model, 'end_price'); ?>
    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($this->model, 'offer_name', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->dropDownList($this->model, 'offer_name', $alphabets, array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($this->model, 'offer_name'); ?>
    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($this->model, 'username', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->dropDownList($this->model, 'username', $alphabets, array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($this->model, 'username'); ?>
    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($this->model, 'most_visited', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->checkBox($this->model, 'most_visited'); ?>
        <?php echo $form->error($this->model, 'most_visited'); ?>
    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($this->model, 'most_visited', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->checkBox($this->model, 'most_visited'); ?>
        <?php echo $form->error($this->model, 'most_visited'); ?>
    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($this->model, 'most_visited', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->checkBox($this->model, 'most_visited'); ?>
        <?php echo $form->error($this->model, 'most_visited'); ?>
    </div><!-- group -->


    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array("class" => "btn btn-primary")); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->