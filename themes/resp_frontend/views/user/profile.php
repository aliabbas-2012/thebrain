<div class="row-fluid profile-view">
    <h2>
        Profile
        <?php
        echo CHtml::link(CHtml::button("View Profile", array("class" => "btn btn-default")), 
                $this->createUrl("/web/user/profileview"));
        ?>
    </h2>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'profile-form',
        //'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal'),
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

    <div class="form-group">
        <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'username', array("readonly" => "readonly", 'class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'username', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'user_email', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'user_email', array("readonly" => "readonly", 'class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'user_email', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'first_name', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'first_name', array("class" => 'alert alert-error')); ?> 
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'second_name', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'second_name', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'second_name', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'gender', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'gender', array("1" => "Male", "2" => "Female"), array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'gender', array("class" => 'alert alert-error')); ?>   
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'birthday', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php
            $this->widget('ItstJUIDatePicker', array(
                'model' => $model,
                'attribute' => 'birthday',
                'model_attribute' => 'birthday',
                'options' => array('showAnim' => 'fold',
                    'dateFormat' => Yii::app()->params['dateformat'],
                    'changeYear' => true,
                ),
                'htmlOptions' => array('class' => 'form-control')
            ));
            ?>

            <?php echo $form->error($model, 'gender', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'avatar', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php
            echo zHtml::kendoUploader($model, 'avatar', 'avatar', $this->createUrl("/site/uploadTemp", array("model" => get_class($model), "attribute" => "Users_avatar"))
            );
            echo zHtml::imageLinkRemove($model, 'avatar', get_class($model),"avatar");
            ?>
        </div>

        <?php echo $form->error($model, 'avatar', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'paypal_mail', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'paypal_mail', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'paypal_mail', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'fbmail', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'fbmail', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'fbmail', array("class" => 'alert alert-error')); ?>
        </div>

    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'background', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php
            echo zHtml::kendoMultiUploader(1, $model, 'background', 'background', $this->createUrl("/site/uploadTemp", array("index" => 1, "model" => get_class($model), "attribute" => "Users_background"))
            );
            echo zHtml::imageLinkRemove($model, 'background', get_class($model),'background');
            ?>

        </div>

        <?php echo $form->error($model, 'background', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'address', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'address', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'address', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'country', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'country', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'country', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'city', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'city', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'city', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'zipcode', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'zipcode', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'zipcode', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'phone', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'phone', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'phone', array("class" => 'alert alert-error')); ?>    
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'lat', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'lat', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'lat', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'lng', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'lng', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'lng', array("class" => 'alert alert-error')); ?>     
        </div> 

    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'store_url', array('class' => 'control-label col-sm-2')); ?>
        <?php echo Yii::app()->request->hostInfo . "/" . Yii::app()->baseUrl . "/"; ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'store_url', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'store_url', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'description', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'description', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group buttons">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo CHtml::submitButton('Update', array('class' => 'btn btn btn-default')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>