<div class="form wide">


    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'bsp-message-form',
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

    <div class="form-group">
        <?php echo $form->labelEx($model, 'user_receive', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php
            /*
              $criteria = new CDbCriteria();
              $criteria->select = "id,name";
              $types = CHtml::listData(Technicians::model()->findAll(), "id", "name");
              echo $form->dropDownList($model, 'technician_id', $types);
             */

            echo $form->hiddenField($model, 'user_receive');
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => get_class($model) . "[user_receive_name]",
                'source' => $this->createUrl('/bspMessage/getUser'), // always define the correct path in Url..
                'value' => $model->user_receive_name,
                'options' => array(
                    'minChars' => 1,
                    'autoFill' => false,
                    'focus' => 'js:function( event, ui ) {
                        $( "#' . get_class($model) . '_user_receive_name" ).val( ui.item.label );
                        $( "#' . get_class($model) . '_user_receive" ).val( ui.item.value);
                        return false;
                    }',
                    'select' => 'js:function( event, ui ) {
                        return false;
                    }'
                ),
                'htmlOptions' => array('autocomplete' => 'off', 'class' => 'form-control'),
            ));
            ?>
            <?php echo $form->error($model, 'user_receive'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'subject', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'subject', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'subject'); ?>

        </div>

    </div><!-- group -->

    <div class="form-group">
        <?php echo $form->labelEx($model, 'sFile', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->fileField($model, 'sFile'); ?>
            <?php echo $form->error($model, 'sFile'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'detail', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'detail', array('class' => 'form-control', 'rows' => '10', 'cols' => '10')); ?>
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