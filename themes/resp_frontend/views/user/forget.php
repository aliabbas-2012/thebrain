<div class="page-header">
    <h1>Forgot Password <small></small></h1>
</div>
<div class="form-group-fluid">

    <div class="span6 offset3">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => "Private access",
        ));
        ?>

        <?php
        if (Yii::app()->user->hasFlash('success')) {
            echo CHtml::openTag("div", array("class" => "alert alert-success"));
            echo Yii::app()->user->getFlash('success');
            echo CHtml::closeTag("div");
        }
        ?>

        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => false,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                'htmlOptions' => array(
                    'class' => 'form-horizontal'
                )
            ));
            ?>

            <p class="note"><?php echo Yii::t('user', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('user', 'are required'); ?>.</p>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-sm-2')); ?>
                <div class="col-lg-4">
                    <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'email', array("class" => 'alert alert-error')); ?>
                </div>

            </div>


            <div class="form-group buttons">
                <div class="col-sm-offset-2 col-sm-10">
                    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-default')); ?>
                    <?php
                    echo CHtml::link(Yii::t("user","login"), $this->createUrl("/web/user/login"));
                    ?>
                </div>

            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->

        <?php $this->endWidget(); ?>

    </div>

</div>