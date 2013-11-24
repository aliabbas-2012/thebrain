<div class="row-fluid">
    <h2>
        Profile
        <?php
        echo CHtml::link(CHtml::button("View Profile", array("class" => "btn btn-primary")), $this->createUrl("/users/profileview"), array("style" => "float:right"));
        ?>
    </h2>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'profile-form',
        //'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    //CVarDumper::dump($model->getErrors(), 10, true);
    ?>

    <?php
    if (Yii::app()->user->hasFlash('success'))
    {
        echo "<span class='alert alert-success'>" . Yii::app()->user->getFlash('success') . "</span>";
    }
    ?>
    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title' => "Basic Information",
    ));
    ?>

    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title'); ?> 
       
        <?php echo $form->error($model, 'photo', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="row-fluid wide-fluid">
        <?php echo $form->labelEx($model, 'photo'); ?>
        <?php echo $form->fileField($model, 'photo'); ?> 
        <?php
        echo CHtml::link(CHtml::image($model->photo_img, '',array("width"=>"50","height"=>"50")), $model->photo_img, array("target" => "_blank",
            "rel" => "lightbox[_default]"))
        ?>
        <?php echo $form->error($model, 'photo', array("class" => 'alert alert-error')); ?>
    </div>

    <div class="row-fluid buttons wide-button">
        <?php echo CHtml::submitButton('Update', array('class' => 'btn btn btn-primary')); ?>
    </div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>