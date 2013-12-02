<?php
/* mean it is called by ajax. */
if (!isset($display)) {
    $display = 'none';
}
$mName = "BspItemImage";
$relationName = "image_items";
?>
<tr class="even grid_fields" style="display:<?php echo $display; ?>">



    <td class="field">
        <?php
        if ($load_for == "view") {
            echo CHtml::activeHiddenField($model, '[' . $index . ']id');
        }
        ?>
        <?php
        //echo CHtml::activeTextField($model, '[' . $index . ']image_url', array("class" => "form-control"));
        ?>
        <?php
        echo zHtml::kendoMultiUploader($index, $model, '[' . $index . ']image_url', '[' . $index . ']image_url', $this->createUrl("/site/uploadTemp", array("index" => $index, "model" => get_class($model), "attribute" => "BspItemImage_" . $index . "_image_url"))
        );
        echo zHtml::imageLinkRemove($model,  'image_url', get_class($model));
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
