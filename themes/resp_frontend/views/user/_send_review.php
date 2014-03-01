<div class="row-fluid profile-view model-container">
    <h2>
        <?php echo Yii::t('user', 'Please send your review for USERNAME'); ?>

    </h2>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'review-form',
        'htmlOptions' => array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal'),
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        "action" => $this->createUrl("/web/user/sendReview", array("id" => $id, "item_id" => $item_id))
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
        'title' => "",
    ));
    ?>


  
    <div class="form-group">
        <?php echo $form->labelEx($model, 'rating', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-8">
            <?php echo $form->hiddenField($model, 'rating', array('class' => 'form-control')); ?> 
              <div id="rating-div"></div>
            <?php echo $form->error($model, 'rating', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'comment', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-8">
            <?php echo $form->textArea($model, 'comment', array('class' => 'form-control', 'cols' => '10', 'rows' => '10')); ?> 
            <?php echo $form->error($model, 'comment', array("class" => 'alert alert-error')); ?>
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
                url: jQuery("#review-form").attr("action"),
                data: jQuery("#review-form").serialize()
              })
                .done(function( resp ) {
                    
                    jQuery("#loading").hide();
                    jQuery("#reveiwModel-content").html(resp);
                    
                    setTimeout(function(){
                         if(jQuery.trim(jQuery("#review-form .alert-success").html())!=""){
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

    $('#rating-div').ratings(5).bind('ratingchanged', function(event, data) {
        jQuery("#BspComment_rating").val(data.rating);
    })
</script>