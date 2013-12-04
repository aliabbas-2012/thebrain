<div class="form wide">


    <?php
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/functions.js');

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


    <div class="form-group">
        <?php echo $form->labelEx($model, 'group_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php
            echo $form->dropDownList($model, 'group_id', array("" => "Select") + BspCategory::model()->getRootCategories(), array(
                'class' => 'form-control',
                'onchange' => 'thepuzzleadmin.filldropDownField(this,"' . $this->createUrl("/bspItem/getChildrenCategories") . '","BspItem_category_id")'
            ));
            ?>
            <?php echo $form->error($model, 'group_id'); ?>

        </div>

    </div><!-- group -->

    <div class="form-group">
        <?php echo $form->labelEx($model, 'category_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php
            if (!$model->isNewRecord || $model->hasErrors()):
                $category_list = array("" => "Select") + BspCategory::model()->getChildrenCategories($model->group_id);
            else :
                $category_list = array("" => "Select");
            endif;

            echo $form->dropDownList($model, 'category_id', $category_list, array(
                'class' => 'form-control',
                'onchange' => 'thepuzzleadmin.filldropDownField(this,"' . $this->createUrl("/bspItem/getChildrenCategories") . '","BspItem_sub_category_id")'
            ));
            ?>
            <?php echo $form->error($model, 'category_id'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'sub_category_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php
            if (!$model->isNewRecord || $model->hasErrors()):
                $category_list = array("" => "Select") + BspCategory::model()->getChildrenCategories($model->category_id);
            else :
                $category_list = array("" => "Select");
            endif;

            echo $form->dropDownList($model, 'sub_category_id', $category_list, array('class' => 'form-control'));
            ?>
            <?php echo $form->error($model, 'sub_category_id'); ?>

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
        <?php echo $form->labelEx($model, 'per_price', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'per_price', $model->_per_price_options, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'per_price'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'currency_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'currency_id', BspCurrency::model()->getCurrencies(), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'currency_id'); ?>

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
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'description', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'special_deal', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->checkBox($model, 'special_deal'); ?>
            <?php echo $form->error($model, 'special_deal'); ?>

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
            <?php echo $form->dropDownList($model, 'is_public', $model->_ready_to_deliver, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_public'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'showlocation', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->checkBox($model, 'showlocation'); ?>
            <?php echo $form->error($model, 'showlocation'); ?>

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
        <?php echo $form->labelEx($model, 'my_other_price', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->checkBox($model, 'my_other_price'); ?>
            <?php echo $form->error($model, 'my_other_price'); ?>

        </div>

    </div><!-- group -->



    <div class="form-group">
        <?php echo $form->labelEx($model, 'iStatus', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'iStatus', array("0" => "Disabled", "1" => "Enabled"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'iStatus'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'background_image', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php
            echo zHtml::kendoUploader($model, 'background_image', 'background_image_name', $this->createUrl("/site/uploadTemp", array("model" => get_class($model), "attribute" => "BspItem_background_image"))
            );
            echo zHtml::imageLinkRemove($model, 'background_image', get_class($model));
            ?>
            <?php echo $form->error($model, 'background_image'); ?>

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

    <?php
    if ($this->action->id != "update") {
        $this->renderPartial('item_price_offers/_container', array('model' => $model, "type" => "field"));
        $this->renderPartial('item_video/_container', array('model' => $model, "type" => "field"));
        $this->renderPartial('image_items/_container', array('model' => $model, "type" => "field"));
        $this->renderPartial('item_related_sounds/_container', array('model' => $model, "type" => "field"));
        $this->renderPartial('item_keywords/_container', array('model' => $model, "type" => "field"));
    }
    ?>

    <div class='form-actions no-margin-bottom'>
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
    </div>      
    <?php
    $this->endWidget();
    ?>
</div><!-- form -->

