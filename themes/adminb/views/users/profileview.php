<h2>
    Profile 
    <?php
    echo CHtml::link(CHtml::button("Edit Profile", array("class" => "btn btn-primary")), $this->createUrl("/users/profile"), array("style" => "float:right"));
    ?>
</h2>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'cssFile' => Yii::app()->baseURL . '/css/detailview.css',
    'attributes' => array(
        'username',
        'email',
        'title',
        array(
            'name' => 'group',
            'value' => isset($model->group) ? $model->group->name : ""
        ),
        array(
            "name" => "photo",
            "value" => CHtml::link(CHtml::image($model->photo_img, '', array("width" => "50", "height" => "50")), $model->photo_img, array("target" => "_blank",
                "rel" => "lightbox[_default]")),
            "type"=>"raw"
        )
    ),
));
?>

