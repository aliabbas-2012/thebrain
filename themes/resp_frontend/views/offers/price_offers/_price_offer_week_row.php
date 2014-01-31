<div id="price-row" style="display: block;">
    <div class="col-lg-2">
        <?php
        echo CHtml::activeTextField($model, '[' . $index . ']start', array("class" => "form-control"));
        echo CHtml::activeHiddenField($model, '[' . $index . ']option', array("class" => "form-control change_price_option"));
        ?>
    </div>
    <div class="col-lg-2 end_field">
        <?php
        echo CHtml::activeTextField($model, '[' . $index . ']end', array("class" => "form-control"));
        ?>
    </div>
    <div class="col-lg-2">
        <?php
        echo CHtml::hiddenField("current_index", $index, array("class" => "current_index"));
        echo CHtml::activeDropDownList($model, '[' . $index . ']period', array("3" => "Day"), array("class" => "form-control"));
        ?>
    </div>
    <div class="col-lg-3">

        <?php
        echo CHtml::activeTextField($model, '[' . $index . ']price', array("style" => "height: 36px; border-radius: 3px;", "class" => "floatLeft fontstyleItalic price"));
        ?>
    </div>
    <div class="col-lg-3">
        <button 
            class="k-button remove" style="float:right; clear: right; " 
            type="button" onclick="jQuery(this).parent().parent().remove()">Remove</button>
    </div>
</div>
<script>
                jQuery(function() {
                    jQuery("#"<?php echo get_class($model) . "_" . $index . "_period" ?>).kendoDropDownList();
                    jQuery("#<?php echo get_class($model); ?>_<?php echo $index; ?>_start").kendoNumericTextBox({min: 1});
                    jQuery("#<?php echo get_class($model); ?>_<?php echo $index; ?>_end").kendoNumericTextBox({min: 1});
                })
</script>  