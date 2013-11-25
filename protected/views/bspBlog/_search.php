<?php
/* @var $this BspBlogController */
/* @var $model BspBlog */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo  $form->textField($model, 'id',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model, 'user_id', array('class' => 'form-control','maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model, 'title', array('class' => 'form-control','maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img'); ?>
		<?php echo $form->textField($model, 'img', array('class' => 'form-control','maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model, 'description',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail'); ?>
		<?php echo $form->textArea($model, 'detail',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_create'); ?>
		<?php echo $form->textField($model, 'date_create',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model, 'create_time',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model, 'create_user_id', array('class' => 'form-control','maxlength' => 11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model, 'update_time',array('class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model, 'update_user_id', array('class' => 'form-control','maxlength' => 11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->