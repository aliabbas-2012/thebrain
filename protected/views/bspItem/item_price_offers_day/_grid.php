<?php
$relationName = "item_price_offers_day";
$mName = "BspItemPriceOfferDay";
?>
<div class="<?php echo $relationName; ?> child" style="<?php echo 'display:block'; ?>">
    <?php
    $config = array(
        'criteria' => array(
            'condition' => 'item_id=' . $model->id . " AND period = 3",
        )
    );
    $mNameobj = new $mName;
    $mName_provider = new CActiveDataProvider($mName, $config);
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => $mName . '-grid',
        'dataProvider' => $mName_provider,
        'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
        'pager' => array(
            'cssFile' => '',
        ),
        'columns' => array(
            array(
                'name' => 'id',
                'value' => '$data->id'
            ),
            array(
                'name' => 'option',
                'value' => '$data->all_offers[$data->option]'
            ),
            array(
                'name' => 'start',
                'value' => '$data->start'
            ),
            array(
                'name' => 'end',
                'value' => '$data->end'
            ),
            array(
                'name' => 'price',
                'value' => '$data->price'
            ),
            array
                (
                'class' => 'CButtonColumn',
                'template' => '{update} {delete}',
                'buttons' => array
                    (
                    'update' => array
                        (
                        'label' => 'update',
//                                'url' => 'Yii::app()->controller->createUrl("laborForm",array("id"=> $data->id, "daily_report_id"=>' . $model->id . '))',
                        'url' => 'Yii::app()->controller->createUrl("editChild", array("id"=> $data->id, "mName"=>get_class($data), "dir" => "' . $dir . '"))',
                        'click' => "js:function() {
                                            $('#loading').toggle();
                                            $.ajax({
                                                url: $(this).attr('href'),
                                                success: function(response)
                                                {
                                                    $('#$relationName-form').css('display', 'block');
                                                    $('#" . $dir . "_fields').html(response);
                                                    $('#" . $dir . "_fields .grid_fields').last().animate({
                                                            opacity:1, left: '+50', height: 'toggle'
                                                        });
                                                    $('#loading').toggle();
                                                    add_mode = false;
                                                }
                                            }); return false; }",
                    ),
                    'delete' => array(
                        'label' => 'Delete',
                        'url' => 'Yii::app()->controller->createUrl("deleteChildByAjax",array("id" => $data->id, "mName" => "' . $mName . '"))',
                    ),
                ),
            ),
        ),
    ));
    ?>
</div>
