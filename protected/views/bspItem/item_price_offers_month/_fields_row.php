<?php
/* mean it is called by ajax. */
if (!isset($display)) {
    $display = 'none';
}
$mName = "BspItemPriceOfferMonth";
$relationName = "item_price_offers_month";
?>
<tr class="even grid_fields" style="display:<?php echo $display; ?>">


    <td class="field">

    </td>
    <td class="field">
        <?php
        if ($load_for == "view") {
            echo CHtml::activeHiddenField($model, '[' . $index . ']id');
        }
        ?>
        <?php
        //extra option
        if (isset($_REQUEST['option']) && $_REQUEST['option'] == 'extra') {
            echo CHtml::activeHiddenField($model, '[' . $index . ']option', array("value" => $_REQUEST['option'], "class" => "form-control"));
            echo CHtml::label("Extra", "Extra", array("id" => "extra_id"));
        } else {
            $dropDown_arr = array(
                "abs" => "Absolute Rate",
                "range" => "Breakdown Rate",
                    //"extra"=>"Each Extra",
            );
            echo CHtml::activeDropDownList($model, '[' . $index . ']option', $dropDown_arr, array("class" => "form-control"));
        }
        ?>
    </td>
    <td class="field">

        <?php
        echo CHtml::activeTextField($model, '[' . $index . ']start', array("class" => "form-control"));
        ?>
    </td>
    <td class="field">

        <?php
        echo CHtml::activeTextField($model, '[' . $index . ']end', array("class" => "form-control"));
        ?>
    </td>
    <td class="field">

        <?php
        echo CHtml::activeTextField($model, '[' . $index . ']price', array("class" => "form-control"));
        ?>
    </td>


    <td class="del del-icon" >
        <?php
        echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/plus.gif', 'Add'), '#', array(
            'class' => 'plus',
            'onclick' =>
            "
                
					u = '" . Yii::app()->controller->createUrl("loadChildByAjax", array("mName" => "$mName", "dir" => $dir, "load_for" => $load_for,)) . "&index=' + " . $relationName . "_index_sc;
                    add_new_child_row(u, '" . $dir . "', '" . $fields_div_id . "', 'grid_fields', true);
                    
                    " . $relationName . "_index_sc++;
                    return false;
                    "
        ));
        ?>
        <?php
        echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/cross.gif', 'Delete'), '#', array('onclick' => 'delete_fields(this, 2, "#' . $relationName . '-form", ".grid_fields"); return false;', 'title' => 'sc'));
        ?>
    </td>

</tr>
