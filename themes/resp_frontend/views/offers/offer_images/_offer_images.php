<?php
$index = 0;
foreach ($model->image_items as $child_model):
    ?>
    <div class='col-lg-4'>

        <?php
        $path = "";
        if ($child_model->image_url != "") {
            if (!$child_model->isNewRecord) {
                $path = Yii::app()->baseUrl . "/uploads/BspItemImage/" . $child_model->id . "/" . $child_model->image_url;
            }
            if ($model->hasErrors()) {
                $path = Yii::app()->baseUrl . "/uploads/temp/" . Yii::app()->user->id . "/BspItemFrontEnd/BspItemFrontEnd_upload_images/" . $child_model->image_url;
            }
        }
        echo CHtml::activeHiddenField($child_model, '[' . $index . ']image_url', array("class" => "form-control"));
        echo CHtml::image($path, '', array("style" => "width:100%"));
        echo CHtml::activeCheckBox($child_model, '[' . $index . ']is_offer', array("onclick" => "doOfferCheckBox(this)"));
        ?>
    </div>
    <?php
    $index++;
endforeach;
?>