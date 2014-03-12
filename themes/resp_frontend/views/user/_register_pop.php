<div class="row-fluid profile-view model-container">
    <h3><?php echo Yii::t('user', "Register Yourself"); ?></h3>

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'pop-up-users-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal'
        ),
        "action" => $this->createUrl("/web/user/registerPopup")
    ));
    ?>
    <?php
    if (Yii::app()->user->hasFlash('success')):
        echo CHtml::openTag("div", array("class" => "alert-success col-lg-10"));
        echo Yii::app()->user->getFlash('success');
        echo CHtml::closeTag("div");
    endif;
    ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-sm-4')); ?>
        <div class="col-lg-6">
            <?php echo $form->textField($model, 'first_name', array('class' => 'form-control', 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'first_name'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'second_name', array('class' => 'control-label col-sm-4')); ?>
        <div class="col-lg-6">
            <?php echo $form->textField($model, 'second_name', array('class' => 'form-control', 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'second_name'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-sm-4')); ?>
        <div class="col-lg-6">
            <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'username'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'user_email', array('class' => 'control-label col-sm-4')); ?>
        <div class="col-lg-6">
            <?php echo $form->textField($model, 'user_email', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'user_email'); ?>

        </div>

    </div><!-- group -->





    <div class="form-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-sm-4')); ?>
        <div class="col-lg-6">
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'password'); ?>

        </div>

    </div><!-- group -->
    <div class="form-group">
        <?php echo $form->labelEx($model, 'password_repeat', array('class' => 'control-label col-sm-4')); ?>
        <div class="col-lg-6">
            <?php echo $form->passwordField($model, 'password_repeat', array('class' => 'form-control', 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'password_repeat'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group">
        <?php echo $form->labelEx($model, 'password_hint', array('class' => 'control-label col-sm-4')); ?>
        <div class="col-lg-6">
            <?php echo $form->textField($model, 'password_hint', array('class' => 'form-control', 'maxlength' => 200)); ?>
            <?php echo $form->error($model, 'password_hint'); ?>

        </div>

    </div><!-- group -->



    <div class="form-group">
        <?php echo $form->labelEx($model, 'gender', array('class' => 'control-label col-sm-4')); ?>
        <div class="col-lg-6">
            <?php echo $form->dropDownList($model, 'gender', array("1" => "Male", "2" => "Female"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'gender'); ?>

        </div>

    </div><!-- group -->


    <div class="form-group buttons">
        <div class="col-sm-offset-2 col-sm-4">
            <?php
            echo CHtml::submitButton('Register', array(
                "class" => "btn btn-default",
                "onclick" => '
                jQuery("#loading").show();
                $.ajax({
                type: "POST",
                url: jQuery("#pop-up-users-form").attr("action"),
                data: jQuery("#pop-up-users-form").serialize()
              })
                .done(function( resp ) {
                    
                    jQuery("#loading").hide();
                    jQuery(".modal-content").html(resp);
                    
                    setTimeout(function(){
                         if(jQuery.trim(jQuery("#pop-up-users-form .alert-success").html())!=""){
                            window.location.reload();
                         }
                    },1300);

                });
                
                return false;
            '
            ));
            ?>
        </div>
    </div>

    <?php
    $this->endWidget();
    ?>

</div>
