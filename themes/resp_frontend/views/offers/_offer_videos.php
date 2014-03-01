<?php
echo CHtml::activeTextField($model, '[' . $index . ']video_url', array("class" => "txtvideo1 textLink k-textbox", "placeholder" => "Youtube/Vimeo Video Link..."));
    if(!$model->isNewRecord){
        echo  CHtml::activeHiddenField($model,'[' . $index . ']id');
    }
?>