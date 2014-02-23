<div class="row-fluid profile-view">
    <h2>
        <?php echo Yii::t('detailOffer', 'Contact Seller'); ?>

    </h2>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'message-form',
        'htmlOptions' => array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal'),
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        "action" => $this->createUrl("/web/offers/sentMessage")
    ));
    ?>

    <?php
    if (Yii::app()->user->hasFlash('success')) {
        echo "<span class='alert alert-success col-lg-12'>" . Yii::app()->user->getFlash('success') . "</span>";
    }
    ?>
    <div class="clear"></div>
    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title' => "Basic Information",
    ));
    ?>


    <div class="form-group">
        <label class="control-label col-sm-2"></label>
        <div class="col-lg-4">

            <?php
            if (!empty($recieve_user)) {
                echo $form->hiddenField($model, 'user_receive', array('class' => 'form-control', "value" => $recieve_user->id));
                echo $recieve_user->username;
            }
            ?>
            <?php echo $form->error($model, 'user_receive', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'subject', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'subject', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'subject', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'detail', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'detail', array('class' => 'form-control', 'cols' => '10', 'rows' => '10')); ?> 
            <?php echo $form->error($model, 'detail', array("class" => 'alert alert-error')); ?>
        </div>

    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'attachment', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->hiddenField($model, 'attachment', array('class' => 'form-control')); ?> 
            <?php
            $uploadTemp = new UploadTemp();
            echo zHtml::activeFileField($uploadTemp, '[' . 1 . ']upload_temp_image');
            ?>
            <?php echo $form->error($model, 'attachment', array("class" => 'alert alert-error')); ?>
        </div>

    </div>

    <div class="form-group buttons">
        <div class="col-sm-offset-2 col-sm-2">

            <?php
            echo CHtml::submitButton('Send', array(
                "class" => "btn btn-default",
                "onclick" => '
                jQuery("#loading").show();
                $.ajax({
                type: "POST",
                url: jQuery("#message-form").attr("action"),
                data: jQuery("#message-form").serialize()
              })
                .done(function( resp ) {
                    
                    jQuery("#loading").hide();
                    jQuery(".modal-content").html(resp);
                    
                    setTimeout(function(){
                         if(jQuery.trim(jQuery("#message-form .alert-success").html())!=""){
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
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>
<script>

    var file_url = "<?php
    echo $this->createUrl("/site/uploadTemp", array(
        "index" => 1,
        "model" => get_class($model), "attribute" => "BspMessage_attachment")
    );
    ?>";
    jQuery(function() {
        jQuery("#UploadTemp_1_upload_temp_image").kendoUpload({
            async: {
                saveUrl: file_url,
                autoUpload: true
            },
            localization: {
                "select": "Attach File"
            },
            cancel: function(e) {

            },
            complete: function(e) {

            },
            error: function(e) {

            },
            progress: function(e) {

            },
            remove: function(e) {

            },
            select: function(e) {
                jQuery("#loading").show();

            },
            success: function(e) {

                path = "<?php echo Yii::app()->baseUrl . "/uploads/temp/" . Yii::app()->user->id . "/BspMessage/BspMessage_attachment/" ?>" + e.response.file;
                jQuery("#loading").hide();
                jQuery("#BspMessage_attachment").val(e.response.file);



            },
            upload: function(e) {

            },
        })
    })

</script>    