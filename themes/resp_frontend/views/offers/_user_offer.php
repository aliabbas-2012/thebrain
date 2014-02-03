<div class="row">
    <div class="col-lg-12">
        <label class="titleOption">
            <?php echo Yii::t('postOffer', 'My Profile'); ?>
            <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
        </label>
        <label class="obligatory">(<?php echo Yii::t('postOffer', 'obligatory'); ?>)</label>
    </div>
    <div class="row" id="profile">
        <div class="col-lg-6">

            <?php
            //CVarDumper::dump($model->attributes,10,true);
            echo $form->textField($model, 'first_name', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 'first_name',
                'placeholder' => "Type here your First Name..."));
            ?> 
            <label class="req-f font-req">(<?php echo Yii::t('postOffer', 'obligatory'); ?>)</label>

            <?php
            echo $form->textField($model, 'description', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 'description',
                'placeholder' => "Type here your occupation, what describes you or your work..."));
            ?> 
            <?php
            echo $form->textField($model, 'country', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 'country',
                'placeholder' => "Type here your Country..."));
            ?> 
            <?php
            echo $form->passwordField($model, 'password_new', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 'country',
                'placeholder' => "Type here your Password..."));
            ?> 

            <label class="floatLeft">* <?php echo Yii::t('postOffer', 'To change your Password, Just enter your new Password'); ?></label>

            <?php
            echo $form->passwordField($model, 'pwd_repeat', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 're_pass',
                'placeholder' => "Repeat here your Password..."));
            ?> 
            <label class="floatLeft">* <?php echo Yii::t('postOffer', 'and confirm it here'); ?></label>
        </div>
        <div class="col-lg-6">
            <div id="choose_radio">

                <?php
                echo $form->textField($model, 'second_name', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                    'id' => 'first_name',
                    'placeholder' => "Type here your occupation, what describes you or your work..."));
                ?> 
                <label class="req-s font-req">(obligatory)</label>
                <?php
                echo $form->textField($model, 'city', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                    'id' => 'first_name',
                    'placeholder' => "Type City"));
                ?> 


                <?php
                echo $form->textField($model, 'zipcode', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                    'id' => 'country',
                    'placeholder' => "Zip Code"));
                ?> 


                <?php
                echo $form->textField($model, 'phone', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                    'id' => 'country',
                    'placeholder' => "Type here your Phone Number..."));
                ?> 

                <?php
                echo $form->textField($model, 'paypal_mail', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                    'id' => 'country',
                    'placeholder' => "Type here your Pay Pal Email..."));
                ?> 
                <label class="req-m font-req">(<?php echo Yii::t('postOffer', 'obligatory'); ?>)</label>
            </div>
        </div>
    </div>
</div>