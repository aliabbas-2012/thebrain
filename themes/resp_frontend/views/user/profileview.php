<h2>
    Profile 
    <?php
    echo CHtml::link(CHtml::button("Edit Profile", array("class" => "btn btn-primary")), $this->createUrl("/users/profile"), array("style" => "float:right"));
    ?>
</h2>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'username',
        'user_email',
        'first_name',
        'second_name',
        array('name' => 'gender', 'value' => $model->gender == 1 ? "Male" : "Female"),
        array('name' => 'birthday', 'value' => $model->birthday),
        array('name' => 'avatar', 'value' => zHtml::imageDoubleLink($model, "avatar", "Users","avatar"),"type"=>"raw"),
        'paypal_mail',
        'fbmail',
        array('name' => 'background', 'value' => zHtml::imageDoubleLink($model, "background", "Users","background"),"type"=>"raw"),
        'address',
        'country',
        'city',
        'zipcode',
        'phone',
        'lat',
        'lng',
        array('name' => 'store_url', 'value' => Yii::app()->request->hostInfo . "/" . Yii::app()->baseUrl . "/" . $model->store_url),
        'description',
    ),
));
?>

