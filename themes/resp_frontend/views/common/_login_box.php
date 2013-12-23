<div class="login-header">Log in</div>
<div class="login-box">
    <div>
        <?php
        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/login_fb.png");
        ?>
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
    echo $form->textField($model, 'username', array("style" => "margin-top:15px", "size" => "30", "placeholder" => "User Name"));

    echo $form->passwordField($model, 'password', array("style" => "margin-bottom:15px", "size" => "30", "placeholder" => "Password"));
    ?>
     <?php echo $form->checkBox($model, 'rememberMe', array("style" => "float: left; margin-right: 10px;")); ?>
    <?php echo $form->label($model, 'rememberMe', array("class" => "string optional")); ?>
    <?php
    echo CHtml::link("Forget Password ?", $this->createUrl("/web/user/forgetPass"), array("class" => "optional"));
    ?>
    <?php
    echo CHtml::submitButton('Login', array(
        "class" => "btn btn-primary",
        "style" => "clear: left; width: 100%; height: 32px; font-size: 13px;",
        "onclick" => '
                $.ajax({
                type: "POST",
                url: jQuery("#login-form").attr("action"),
                data: jQuery("#login-form").serialize()
              })
                .done(function( resp ) {
                    jQuery(".login-dropdown-menu").html(resp);
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
    Don't have an account ? <?php echo CHtml::link("Sign Up", $this->createUrl("/web/user/register")) ?>
</div>
