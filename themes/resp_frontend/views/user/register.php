<h3>Register Yourself</h3>
<?php
if (Yii::app()->user->hasFlash('success')):
    echo CHtml::openTag("div", array("class" => "alert-success"));
    echo Yii::app()->user->getFlash('success');
    echo CHtml::closeTag("div");
endif;

?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'users-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'class' => 'form-horizontal'
    )
        ));
?>

<div class="form-group">
    <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'first_name', array('class' => 'form-control', 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'first_name'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'second_name', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'second_name', array('class' => 'form-control', 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'second_name'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'username'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'user_email', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'user_email', array('class' => 'form-control', 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'user_email'); ?>

    </div>

</div><!-- group -->





<div class="form-group">
    <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'password'); ?>

    </div>

</div><!-- group -->
<div class="form-group">
    <?php echo $form->labelEx($model, 'password_repeat', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->passwordField($model, 'password_repeat', array('class' => 'form-control', 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'password_repeat'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'password_hint', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'password_hint', array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'password_hint'); ?>

    </div>

</div><!-- group -->

<div class="form-group">
    <?php echo $form->labelEx($model, 'phone', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'phone', array('class' => 'form-control', 'maxlength' => 30)); ?>
        <?php echo $form->error($model, 'phone'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'avatar', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">

        <?php
        echo zHtml::kendoUploader($model, 'avatar', 'avatar', $this->createUrl("/site/uploadTemp", array("model" => get_class($model), "attribute" => "RegisterUsers_avatar"))
        );
        echo zHtml::imageLinkRemove($model, 'avatar', get_class($model));
        ?>
        <?php echo $form->error($model, 'avatar'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'background', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">

        <?php
        echo zHtml::kendoMultiUploader(1, $model, 'background', 'background', $this->createUrl("/site/uploadTemp", array("index" => 1, "model" => get_class($model), "attribute" => "RegisterUsers_background"))
        );
        echo zHtml::imageLinkRemove($model, 'background', get_class($model));
        ?>
        <?php echo $form->error($model, 'background'); ?>

    </div>

</div><!-- group -->



<div class="form-group">
    <?php echo $form->labelEx($model, 'birthday', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php
        $form->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'birthday',
            'value' => $model->birthday,
            'options' => array(
                'showButtonPanel' => true,
                'changeYear' => true,
                'dateFormat' => 'y/m/d',
            ),
            'htmlOptions' => array(
                'class' => 'form-control'
            ),
        ));
        ;
        ?>
        <?php echo $form->error($model, 'birthday'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'gender', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->dropDownList($model, 'gender', array("1" => "Male", "2" => "Female"), array('class' => 'form-control', 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'gender'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'store_url', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'store_url', array('class' => 'form-control', 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'store_url'); ?>

    </div>

</div><!-- group -->

<div class="form-group">
    <?php echo $form->labelEx($model, 'address', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textArea($model, 'address', array('class' => 'form-control', 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'address'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'country', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'country', array('class' => 'form-control', 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'country'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'city', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'city', array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'city'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'zipcode', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'zipcode', array('class' => 'form-control', 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'zipcode'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'lat', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'lat', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'lat'); ?>

    </div>

</div><!-- group -->


<div class="form-group">
    <?php echo $form->labelEx($model, 'lng', array('class' => 'control-label col-sm-2')); ?>
    <div class="col-lg-4">
        <?php echo $form->textField($model, 'lng', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'lng'); ?>

    </div>

</div><!-- group -->

<div class="form-group buttons">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Sign in</button>
    </div>
</div>

<?php
$this->endWidget();
?>
