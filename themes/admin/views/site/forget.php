<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Forgot';
$this->breadcrumbs = array(
    'Forgot',
);
?>
<div class="page-header">
    <h1>Forgot Password <small></small></h1>
</div>
<div class="row-fluid">

    <div class="span6 offset3">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => "Private access",
        ));
        ?>

        <?php
        if (Yii::app()->user->hasFlash('success')) {
            echo CHtml::openTag("div", array("class" => "alert alert-success"));
            echo Yii::app()->user->getFlash('success');
            echo CHtml::closeTag("div");
        }
        ?>

        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>

            <p class="note">Fields with <span class="required">*</span> are required.</p>

            <div class="row">
                <?php echo $form->labelEx($model, 'email'); ?>
                <?php echo $form->textField($model, 'email'); ?>
                <?php echo $form->error($model, 'email', array("class" => 'alert alert-error')); ?>
            </div>


            <div class="row buttons">
                <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn btn-primary')); ?>
                <?php
                echo CHtml::link("login", $this->createUrl("/site/login"));
                ?>
            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->

        <?php $this->endWidget(); ?>

    </div>

</div>