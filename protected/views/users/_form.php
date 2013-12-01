<div class="form wide">


    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'users-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal'
        )
    ));
    ?>

    <p class="note">
        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
    </p>

    <?php echo $form->errorSummary($model); ?>



    <div class="form-group">
        <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'first_name', array('class' => 'form-control', 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'first_name'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'second_name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'second_name', array('class' => 'form-control', 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'second_name'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'username'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'user_email', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'user_email', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'user_email'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'type', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'type', array('class' => 'form-control', 'maxlength' => 9)); ?>
            <?php echo $form->error($model, 'type'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'phone', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'phone', array('class' => 'form-control', 'maxlength' => 30)); ?>
            <?php echo $form->error($model, 'phone'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'avatar', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'avatar', array('class' => 'form-control', 'maxlength' => 300)); ?>
            <?php echo $form->error($model, 'avatar'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'birthday', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php
            $form->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'birthday',
                'value' => $model->birthday,
                'options' => array(
                    'showButtonPanel' => true,
                    'changeYear' => true,
                    'dateFormat' => 'yy-mm-dd',
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
        <?php echo $form->labelEx($model, 'gender', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'gender', array('class' => 'form-control', 'maxlength' => 6)); ?>
            <?php echo $form->error($model, 'gender'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'store_url', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'store_url', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'store_url'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'paypal_mail', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'paypal_mail', array('class' => 'form-control', 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'paypal_mail'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'fbmail', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'fbmail', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'fbmail'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'password'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'password_hint', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'password_hint', array('class' => 'form-control', 'maxlength' => 200)); ?>
            <?php echo $form->error($model, 'password_hint'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'description', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'address', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'address', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'address'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'country', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'country', array('class' => 'form-control', 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'country'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'city', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'city', array('class' => 'form-control', 'maxlength' => 200)); ?>
            <?php echo $form->error($model, 'city'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'zipcode', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'zipcode', array('class' => 'form-control', 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'zipcode'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'lat', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'lat', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'lat'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'lng', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'lng', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'lng'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'background', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'background', array('class' => 'form-control', 'maxlength' => 300)); ?>
            <?php echo $form->error($model, 'background'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'sRecentList', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'sRecentList', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sRecentList'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'sWishList', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'sWishList', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sWishList'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'lastActiveTime', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'lastActiveTime', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'lastActiveTime'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'email_authenticate', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'email_authenticate', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'email_authenticate'); ?>

        </div>

    </div><!-- group -->



    <div class='form-actions no-margin-bottom'>
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
    </div>      
    <?php
    $this->endWidget();
    ?>
</div><!-- form -->