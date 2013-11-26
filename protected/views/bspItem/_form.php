<div class="form wide">


    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'bsp-item-form',
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
        <?php echo $form->labelEx($model, 'category_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'category_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'category_id'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'sub_category_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'sub_category_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sub_category_id'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'group_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'group_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'group_id'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 200)); ?>
            <?php echo $form->error($model, 'name'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'avatar_image', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'avatar_image', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'avatar_image'); ?>

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
        <?php echo $form->labelEx($model, 'num_star', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'num_star', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'num_star'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'num_like', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'num_like', array('class' => 'form-control', 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'num_like'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'user_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'user_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'user_id'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'date_create', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'date_create', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'date_create'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'price', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'price', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'price'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'num_review', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'num_review', array('class' => 'form-control', 'maxlength' => 30)); ?>
            <?php echo $form->error($model, 'num_review'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'sound_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'sound_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'sound_id'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'video_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'video_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'video_id'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'item_image', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'item_image', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'item_image'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'background_image', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'background_image', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'background_image'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'discount_price', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'discount_price', array('class' => 'form-control', 'maxlength' => 30)); ?>
            <?php echo $form->error($model, 'discount_price'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'is_public', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'is_public', array('class' => 'form-control', 'maxlength' => 5)); ?>
            <?php echo $form->error($model, 'is_public'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'showlocation', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'showlocation', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'showlocation'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'num_orders', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'num_orders', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'num_orders'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'my_condition', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'my_condition', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'my_condition'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'my_other_price', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'my_other_price', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'my_other_price'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'iStatus', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'iStatus', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'iStatus'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'iPayment', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'iPayment', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'iPayment'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'special_deal', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'special_deal', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'special_deal'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'currency_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'currency_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'currency_id'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'per_price', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'per_price', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'per_price'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'seo_title', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'seo_title', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'seo_title'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'seo_description', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'seo_description', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'seo_description'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'seo_keywords', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'seo_keywords', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'seo_keywords'); ?>

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
        <?php echo $form->labelEx($model, 'create_time', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'create_time', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'create_time'); ?>

        </div>

    </div><!-- group -->


   


    <div class='form-actions no-margin-bottom'>
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
    </div>      
    <?php
    $this->endWidget();
    ?>
</div><!-- form -->