<?php
$dir = "item_video";
$fields_div_id = $dir . '_fields';
$heading = "Item Videos";
$mName = "BspItemVideo";

/* when page is rediretc it contains #relation name use same name to go at that child at page */
$relationName = $dir;
echo '<a name="' . $relationName . '"></a>';
$plus_image = Yii::app()->theme->baseUrl . '/images/icons/plus.gif';
$minus_image = Yii::app()->theme->baseUrl . '/images/icons/minus.gif';
if (!$model->isNewRecord) {
    $plusImage = "<div class='left_float' style='padding-top:8px;float:left'>" .
            CHtml::image($minus_image, 'bingo', array('class' => 'rotate_iamge', 'id' => $relationName . '-plus', 'class' => 'plus')) .
            "</div>";
} else {
    $plusImage = " ";
}
?>

<div class="child-container child-container-nth" id ="<?php echo $dir; ?>">
    <div class="subsection-header">
        <table class="table table-bordered table-condensed table-hover table-striped dataTable">
            <tr>
                <td>
                    <div class="left_float">
                        <?php
                        $heading = " <h4 style='float:left;margin-left:4px;'>" . $heading . "</h4>";
                        if ($this->action->id == 'view') {
                            echo CHtml::link($plusImage . ' ' . $heading, 'javascript:;', array('class' => $relationName . '-buttonsc'));
                        }
                        else
                            echo $plusImage . $heading;
                        ?>
                    </div>
                </td>
                <td>
                    <div class="right_float">
                        <?php
                        echo CHtml::link('Add New', '#', array(
                            'onclick' => "
					
                    u = '" . $this->createUrl("loadChildByAjax", array("mName" => "$mName", "dir" => $dir,
                                "load_for" => $this->action->id,)) . "&index=' +  " . $relationName . "_index_sc;
                   
                    
                    add_newSub_child_row(u, '" . $dir . "', '" . $fields_div_id . "', 'grid_fields', true);
                    jQuery('#" . $relationName . "-plus').attr('class', 'plus_rotate');
              
                     
                    " . $relationName . "_index_sc++;
                        
                    return false;
                    ", "class" => "plus_bind"
                        ))
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <?php
    /* Hide or show this div */
    $basic_feature_div = "none";
    if (isset($_POST[$mName]) || ($this->action->id == 'create' && count($model->$relationName) > 0)) {
        $basic_feature_div = "block";
    }

    $relateModelobj = new $mName;
    ?>
    <div id="<?php echo $relationName ?>-form" class="subform" style="display:<?php echo $basic_feature_div; ?>">
        <div class="main">
            <!--        <div class="head">Field Force Labors</div>-->
            <div class="form_body">
                <?php
                /* If type is form then set form html tag */
                if ($type == "form") {
                    /* Start Form */
                    $form = $this->beginWidget('CActiveForm', array(
                        'action' => '#' . $relationName,
                        'id' => $relationName,
                        'enableAjaxValidation' => true,
                        'htmlOptions' => array(
                            'enctype' => 'multipart/form-data',
                            'class' => 'form-horizontal'
                        ),
                    ));
                }
                ?>
                <table class="table table-bordered table-condensed table-hover table-striped dataTable">
                    <thead>
                        <tr class="odd grid_title">
                            <td class=" sorting_1"> <div class="title" style="width:300px"><?php echo CHtml::activeLabel($relateModelobj, 'video_url'); ?></div></td>

                        </tr>
                    </thead>

                    <tbody id="<?php echo $fields_div_id; ?>" class="form">
                        <?php
                        /* for loading with js */
                        $relationName_index_sc = -1;
                        if (isset($_POST[$mName]) || ($this->action->id == 'create' && count($model->$relationName) > 0)) {
                            foreach ($model->$relationName as $key => $relationModel) {

                                $this->renderPartial($dir . '/_fields_row', array('index' => $key, 'model' => $relationModel,
                                    "load_for" => $this->action->id,
                                    'display' => '',
                                    'dir' => $dir,
                                    'fields_div_id' => $fields_div_id));
                                $relationName_index_sc = $key;
                            }
                        }
                        ?>

                    </tbody>
                </table>

                <?php
                /* End form */
                if ($type == "form") {
                    ?>
                    <div class="form submit-btn-div">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
                        or
                        <?php
                        echo CHtml::link('Cancel', '#', array('onClick' => "
                                jQuery(this).parent().parent().parent().parent().parent().animate({opacity: 1, left: '+=50', height: 'toggle'}, 500,
                                    function() {
                                        jQuery('#" . $fields_div_id . "').html('');
                                    });

                                        return false;"));
                        ?>
                    </div>

                    <?php
                    $this->endWidget();
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    /* Load grid if page is open in detail view mode */
    if ($this->action->id == "view") {
        $this->renderPartial($dir . "/_grid", array('model' => $model, "dir" => $dir,));
    }
    /* Only need when new record is being created. so that's why it is in this if. */
    Yii::app()->clientScript->registerScript($relationName . '_sc_script_define', $relationName . "_index_sc =  " . $relationName_index_sc . " + 1;
                add_mode = true;", CClientScript::POS_HEAD
    );

    Yii::app()->clientScript->registerScript($relationName . '_sc_script', "
            jQuery('.$relationName-buttonsc').click(function(){
               
                jQuery('#" . $relationName . "-plus').toggleClass('plus_rotate');
                jQuery('.$relationName').animate(
                        {opacity: 'toggle', left: '+=50', height: 'toggle'}, 500, 
                        function(){
                                if(jQuery('.$relationName').is(':visible')){
                                    jQuery('#" . $relationName . "-plus').attr('src','$minus_image');
                                }
                                else {
                                    jQuery('#" . $relationName . "-plus').attr('src','$plus_image');
                                }
                            }
                    );
                return false;
            });
            ");
    ?>
</div>
