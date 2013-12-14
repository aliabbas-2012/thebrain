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
    $alphabets = array(""=>"All");
    for ($i = 65; $i <= 90; $i++) {
        $alphabets[chr($i)] = chr($i);
    }
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
        <?php echo $form->labelEx($model, 'start_price', array('class' => 'control-label col-lg-2')); ?>

        <?php echo $form->textField($model, 'start_price', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'start_price'); ?>
    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'end_price', array('class' => 'control-label col-lg-2')); ?>

        <?php echo $form->textField($model, 'end_price', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'end_price'); ?>
    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'offer_name', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->dropDownList($model, 'offer_name', $alphabets, array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'offer_name'); ?>
    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->dropDownList($model, 'username', $alphabets, array('class' => 'form-control', 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($model, 'num_star', array('class' => 'control-label col-lg-2')); ?>
        <?php
        echo $form->dropDownList($model, 'num_star', array("" => "--", "0"=>"No Star","1" => "1 Star", "2" => "2 Stars", "3" => "3 Stars", "4" => "4 Stars", 5 => "5 Stars"), array('class' => 'form-control', 'maxlength' => 200));
        ?>
        <?php echo $form->error($model, 'num_star'); ?>
    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($model, 'most_visited', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->checkBox($model, 'most_visited'); ?>
        <?php echo $form->error($model, 'most_visited'); ?>
    </div><!-- group -->

    <div class="row">
        <?php echo $form->labelEx($model, 'most_bought', array('class' => 'control-label col-lg-2')); ?>
        <?php echo $form->checkBox($model, 'most_bought'); ?>
        <?php echo $form->error($model, 'most_bought'); ?>
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
        <?php echo $form->labelEx($model, 'iStatus', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->dropDownList($model, 'iStatus', array("" => "All") + array("0" => "Disabled", "1" => "Enabled"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'iStatus'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'showlocation', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->dropDownList($model, 'showlocation',array(""=>"All","0"=>"No","1"=>"Yes")); ?>
            <?php echo $form->error($model, 'showlocation'); ?>

        </div>

    </div><!-- group -->


    <div class="row">
        <?php echo $form->labelEx($model, 'special_deal', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->dropDownList($model, 'special_deal',array(""=>"All","0"=>"No","1"=>"Yes")); ?>
            <?php echo $form->error($model, 'special_deal'); ?>

        </div>

    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'my_other_price', array('class' => 'control-label col-lg-2')); ?>
        <div class="">
            <?php echo $form->dropDownList($model, 'my_other_price',array(""=>"All","0"=>"No","1"=>"Yes")); ?>
            <?php echo $form->error($model, 'my_other_price'); ?>

        </div>

    </div><!-- group -->

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array("class" => "btn btn-primary")); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->