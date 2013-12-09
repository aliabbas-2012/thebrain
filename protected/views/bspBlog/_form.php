
<div class="form wide">


    <?php
    Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/editor/redactor.css');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/editor/redactor.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScript('editor_rel', "
      $('#BspBlog_detail').redactor({
                focus: true,
                autoresize: false,
                initCallback: function()
                {

                }
            });
      ", CClientScript::POS_READY);
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'bsp-blog-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>

    <p class="note">
        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
    </p>


    <div class="row">
        <?php echo $form->labelEx($model, 'user_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">

            <?php echo $form->dropDownList($model, 'user_id', Users::model()->getUsersArray(), array('class' => 'form-control', 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'user_id'); ?>

        </div>

    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'title', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'title'); ?>

        </div>

    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'img', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->fileField($model, 'img', array('class' => '')); ?>
            <?php echo zHtml::imageLink($model, 'img', "blog"); ?>
            <?php echo $form->error($model, 'img'); ?>

        </div>

    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'description', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description'); ?>

        </div>

    </div><!-- group -->
    <div class="row">
        <?php echo $form->labelEx($model, 'detail', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'detail', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'detail'); ?>

        </div>

    </div><!-- group -->



    <div class='form-actions no-margin-bottom'>
        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
    </div>      
    <?php
    $this->endWidget();
    ?>
</div><!-- form -->