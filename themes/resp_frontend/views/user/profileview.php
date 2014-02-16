<h2>
    Profile 
    <?php
    echo CHtml::link(CHtml::button(Yii::t('user', "Edit Profile"), array("class" => "btn btn-default profile-btn")), $this->createUrl("/web/user/profile"), array("style" => "float:right"));
    ?>
</h2>
<?php
$store_url = "";
if (!empty($model->store_url)) {
    $store_url = str_replace(" ", "-", $model->store_url);
    $store_url = $this->createUrl("/web/userdata/store", array("id" => $model->id, "storeurl" => $store_url));
    echo CHtml::link(Yii::app()->request->hostInfo . $store_url, $store_url);
}
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'username',
        'user_email',
        'first_name',
        'second_name',
        array('name' => 'gender', 'value' => $model->gender == 1 ? "Male" : "Female"),
        array('name' => 'birthday', 'value' => $model->birthday),
        array('name' => 'avatar', 'value' => zHtml::imageDoubleLink($model, "avatar", "Users", "avatar"), "type" => "raw"),
        'paypal_mail',
        'fbmail',
        array('name' => 'background', 'value' => zHtml::imageDoubleLink($model, "background", "Users", "background"), "type" => "raw"),
        'address',
        'country',
        'city',
        'zipcode',
        'phone',
        'lat',
        'lng',
        array('name' => 'store_url', 'value' => $store_url),
        'description',
    ),
));
?>

