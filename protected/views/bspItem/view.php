<h1>View Bsp Item #<?php echo $model->id; ?></h1>

<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/functions.js');
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array('name' => 'group_id', 'value' => !empty($model->group) ? $model->group->name : ""),
        array('name' => 'category_id', 'value' => !empty($model->category) ? $model->category->name : ""),
        array('name' => 'sub_category_id', 'value' => !empty($model->sub_category) ? $model->sub_category->name : ""),
        array('name' => 'name', 'value' => $model->name,),
        array('name' => 'currency_id', 'value' => !empty($model->currency) ? $model->currency->symbol : ""),
        array('name' => 'per_price', 'value' => !empty($model->_per_price_options[$model->per_price]) ? $model->_per_price_options[$model->per_price] : ""),
        array('name' => 'special_deal', 'value' => $model->special_deal,),
        array('name' => 'discount_price', 'value' => $model->discount_price,),
        array('name' => 'is_public', 'value' => !empty($model->_ready_to_deliver[$model->is_public]) ? $model->_ready_to_deliver[$model->is_public] : "",),
        array('name' => 'showlocation', 'value' => $model->showlocation == 1 ? "Yes" : "No",),
        array('name' => 'lat', 'value' => $model->lat,),
        array('name' => 'lng', 'value' => $model->lng,),
        array('name' => 'my_other_price', 'value' => $model->my_other_price == 1 ? "Yes" : "No",),
        array('name' => 'iStatus', 'value' => $model->iStatus == 1 ? "Enabled" : "Disabled",),
        array('name' => 'background_image', 'value' => zHtml::imageLink($model, 'background_image', get_class($model)), "type" => "raw"),
        array('name' => 'seo_title', 'value' => $model->seo_title,),
        array('name' => 'seo_description', 'value' => $model->seo_description,),
        array('name' => 'seo_keywords', 'value' => $model->seo_keywords,),
    ),
));

$this->renderPartial('item_video/_container', array('model' => $model, "type" => "form"));
$this->renderPartial('image_items/_container', array('model' => $model, "type" => "form"));
?>
