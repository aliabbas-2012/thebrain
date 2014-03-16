<div class="login-header">Log in</div>
<div class="login-box">
    <div>
        <a href="<?php echo $this->createUrl("/web/hybrid/login", array("provider" => "facebook")) ?>">
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/login_fb.png");
            ?>
        </a>
    </div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        "action" => $this->createUrl("/web/default/login")
    ));
    ?>

    <?php
    echo $form->textField($model, 'username', array( "size" => "30", "placeholder" => "User Name"));

    echo $form->passwordField($model, 'password', array( "size" => "30", "placeholder" => "Password"));
    ?>
     <?php echo $form->checkBox($model, 'rememberMe'); ?>
    <?php echo $form->label($model, 'rememberMe', array("class" => "string optional")); ?>
    <?php
    echo CHtml::link(Yii::t('link', "Forget Password ?"), $this->createUrl("/web/user/forgetPass"), array("class" => "optional"));
    ?>
    <?php
    echo CHtml::submitButton('Login', array(
        "class" => "btn btn-primary",
        "onclick" => '
                jQuery("#loading").show();
                $.ajax({
                type: "POST",
                url: jQuery("#login-form").attr("action"),
                data: jQuery("#login-form").serialize()
              })
                .done(function( resp ) {
                    jQuery(".login-dropdown-menu").html(resp);
                    jQuery("#loading").hide();
                    if(jQuery.trim(jQuery(".login-box div.error").html()) == ""){
                        window.location.reload();
                    }
                    
                });
                
                return false;
            '
    ));
    ?>
    <?php $this->endWidget(); ?>   
    <div class="error">
        <?php
        if ($model->hasErrors()) {
            echo $model->getError('username');
            echo "<div class='clear'></div>";
            echo $model->getError('password');
        } else {
            echo "";
        }
        ?>
    </div>

</div>
<div class="login-border-top">
   <?php echo Yii::t('site', "Don't have an account"); ?> ? 
       <?php echo CHtml::link(Yii::t('link', "Sign Up"), $this->createUrl("/web/user/register"),array("onclick"=>'jQuery("#singUpModal").modal();return false;')) ?>
</div>
