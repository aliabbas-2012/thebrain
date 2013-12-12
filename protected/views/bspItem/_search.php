<?php
/* @var $this BspItemController */
/* @var $model BspItem */
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

        <?php echo $form->labelEx($model, 'loc_name', array('class' => 'control-label col-lg-2')); ?>

        <?php echo $form->textField($model, 'loc_name', array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'loc_name'); ?>
    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'group_id', array('class' => 'control-label col-lg-2')); ?>

        <?php
        echo $form->dropDownList($model, 'group_id', array("" => "Select") + BspCategory::model()->getRootCategories(), array(
            'class' => 'form-control',
            'onchange' => 'thepuzzleadmin.filldropDownField(this,"' . $this->createUrl("/bspItem/getChildrenCategories") . '","BspItem_category_id")'
        ));
        ?>
        <?php echo $form->error($model, 'group_id'); ?>


    </div><!-- row -->

    <div class="row">
        <?php echo $form->labelEx($model, 'category_id', array('class' => 'control-label col-lg-2')); ?>

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



    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'sub_category_id', array('class' => 'control-label col-lg-2')); ?>

        <?php
        if (!$model->isNewRecord || $model->hasErrors()):
            $category_list = array("" => "Select") + BspCategory::model()->getChildrenCategories($model->category_id);
        else :
            $category_list = array("" => "Select");
        endif;

        echo $form->dropDownList($model, 'sub_category_id', $category_list, array('class' => 'form-control'));
        ?>
        <?php echo $form->error($model, 'sub_category_id'); ?>



    </div><!-- group -->

    <div class="row">

        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>

        <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'name'); ?>


    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'per_price', array('class' => 'control-label col-lg-2')); ?>

        <?php
        echo $form->dropDownList($model, 'per_price', array("" => "All") + $model->_per_price_options, array(
            'class' => 'form-control',
        ));
        ?>
        <?php echo $form->error($model, 'per_price'); ?>



    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'currency_id', array('class' => 'control-label col-lg-2')); ?>

        <?php echo $form->dropDownList($model, 'currency_id', array("" => "All") + BspCurrency::model()->getCurrencies(), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'currency_id'); ?>



    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'price', array('class' => 'control-label col-lg-2')); ?>

        <?php echo $form->textField($model, 'price', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'price'); ?>



    </div><!-- group -->



    <div class="row">
        <?php echo $form->labelEx($model, 'special_deal', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->checkBox($model, 'special_deal'); ?>
            <?php echo $form->error($model, 'special_deal'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'discount_price', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->textField($model, 'discount_price', array('class' => 'form-control', 'maxlength' => 30)); ?>
            <?php echo $form->error($model, 'discount_price'); ?>

        </div>

    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($model, 'is_public', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->dropDownList($model, 'is_public', array("" => "All") + $model->_ready_to_deliver, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_public'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'showlocation', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->checkBox($model, 'showlocation'); ?>
            <?php echo $form->error($model, 'showlocation'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'lat', array('class' => 'control-label col-lg-2',)); ?>
        <div class="">
            <?php echo $form->textField($model, 'lat', array('class' => 'form-control', 'onFocus' => "geolocate()")); ?>
            <?php echo $form->error($model, 'lat'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'lng', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->textField($model, 'lng', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'lng'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'my_other_price', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->checkBox($model, 'my_other_price'); ?>
            <?php echo $form->error($model, 'my_other_price'); ?>

        </div>

    </div><!-- group -->



    <div class="row">
        <?php echo $form->labelEx($model, 'iStatus', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->dropDownList($model, 'iStatus', array("" => "All") + array("0" => "Disabled", "1" => "Enabled"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'iStatus'); ?>

        </div>

    </div><!-- group -->


    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array("class" => "btn btn-primary")); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->