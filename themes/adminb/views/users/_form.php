<div class="row-fluid">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'profile-form',
        //'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    //CVarDumper::dump($model->getErrors(), 10, true);
    ?>

    <?php
    if (Yii::app()->user->hasFlash('success')) {
        echo "<span class='alert alert-success'>" . Yii::app()->user->getFlash('success') . "</span>";
    }
    ?>
    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title' => "Basic Information",
    ));
    ?>

    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username'); ?> 

        <?php echo $form->error($model, 'username', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'user_email'); ?>
        <?php echo $form->textField($model, 'user_email'); ?> 

        <?php echo $form->error($model, 'user_email', array("class" => 'alert alert-error')); ?>
    </div>
    <?php
    if ($model->isNewRecord):
        ?>
        <div class="row-fluid wide-fluid">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password'); ?>  

            <?php echo $form->error($model, 'password', array("class" => 'alert alert-error')); ?>
        </div>
        <div class="row-fluid wide-fluid">
            <?php echo $form->labelEx($model, 'password_repeat'); ?>
            <?php echo $form->passwordField($model, 'password_repeat'); ?> 

            <?php echo $form->error($model, 'password_repeat', array("class" => 'alert alert-error')); ?>
        </div>
        <?php
    endif;
    ?>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textField($model, 'first_name'); ?> 

        <?php echo $form->error($model, 'first_name', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'password_hint'); ?>
        <?php echo $form->textField($model, 'password_hint'); ?> 

        <?php echo $form->error($model, 'password_hint', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'second_name'); ?>
        <?php echo $form->textField($model, 'second_name'); ?> 

        <?php echo $form->error($model, 'second_name', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'gender'); ?>
        <?php echo $form->dropDownList($model, 'gender', array("1" => "Male", "2" => "Female")); ?>  

        <?php echo $form->error($model, 'gender', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'birthday'); ?>
        <?php
        $this->widget('ItstJUIDatePicker', array('model' => $model,
            'attribute' => 'birthday',
            'model_attribute' => 'birthday',
            'options' => array('showAnim' => 'fold',
                'dateFormat' => Yii::app()->params['dateformat'],
                'changeYear' => true,
            ),
        ));
        ?>

        <?php echo $form->error($model, 'birthday', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'avatar'); ?>
        <?php
        echo zHtml::kendoUploader($model, 'avatar', 'avatar', $this->createUrl("/site/uploadTemp", array("model" => get_class($model), "attribute" => "Users_avatar"))
        );
        echo zHtml::imageLinkRemove($model, 'avatar', get_class($model));
        ?>
        <?php echo $form->error($model, 'avatar', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'paypal_mail'); ?>
        <?php echo $form->textField($model, 'paypal_mail'); ?> 

        <?php echo $form->error($model, 'paypal_mail', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'fbmail'); ?> 
        <?php echo $form->textField($model, 'fbmail'); ?> 

        <?php echo $form->error($model, 'fbmail', array("class" => 'alert alert-error')); ?> 
    </div>

    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'background'); ?> 
        <?php
        echo zHtml::kendoMultiUploader(1, $model, 'background', 'background', $this->createUrl("/site/uploadTemp", array("index" => 1, "model" => get_class($model), "attribute" => "Users_background"))
        );
        echo zHtml::imageLinkRemove($model, 'background', get_class($model));
        ?>

        <?php echo $form->error($model, 'background', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'address'); ?> 
        <?php echo $form->textArea($model, 'address'); ?> 

        <?php echo $form->error($model, 'address', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'country'); ?> 
        <?php echo $form->textField($model, 'country'); ?> 

        <?php echo $form->error($model, 'country', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'city'); ?> 
        <?php echo $form->textField($model, 'city'); ?> 

        <?php echo $form->error($model, 'city', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'zipcode'); ?> 
        <?php echo $form->textField($model, 'zipcode'); ?> 

        <?php echo $form->error($model, 'zipcode', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'phone'); ?>
        <?php echo $form->textField($model, 'phone'); ?> 

        <?php echo $form->error($model, 'phone', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'lat'); ?>
        <?php echo $form->textField($model, 'lat'); ?> 

        <?php echo $form->error($model, 'lat', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'lng'); ?>
        <?php echo $form->textField($model, 'lng'); ?> 

        <?php echo $form->error($model, 'lng', array("class" => 'alert alert-error')); ?>
    </div>

    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'store_url'); ?>
        <?php echo Yii::app()->request->hostInfo . "/" . Yii::app()->baseUrl . "/"; ?>
        <?php echo $form->textField($model, 'store_url'); ?>
        <?php echo $form->error($model, 'store_url', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description'); ?> 

        <?php echo $form->error($model, 'description', array("class" => 'alert alert-error')); ?>
    </div>



    <div class="row-fluid buttons wide-button">
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn btn-primary')); ?>
    </div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>