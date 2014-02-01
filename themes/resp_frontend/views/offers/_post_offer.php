<?php
$background = "";
if ($model->background_image != "") {
    if (!$model->isNewRecord) {
        $background = Yii::app()->baseUrl . "/uploads/BspItem/" . $model->id . "/" . $model->background_image;
    }
    if ($model->hasErrors()) {
        $background = Yii::app()->baseUrl . "/uploads/temp/" . Yii::app()->user->id . "/BspItemFrontEnd/BspItemFrontEnd_background_image/" . $model->background_image;
    }
}
?>
<div class="i_offer" style="background:url(<?php echo $background ?>)">
    <div class="container">
        <div class="row">
            <div class="offer_wrap">
                <div class="col-lg-8">
                    <div id="offer1">
                        <p class="floatLeft">I offer  </p>

                        <?php
                        echo $form->textField($model, 'name', array('id' => 'txtoffer', "class" => "k-textbox floatLeft", 'placeholder' => "Type here your offer"));
                        ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="offer2">
                        <?php
                        echo $form->dropDownList($model, 'per_price', $model->_per_price_options, array("class" => "select1"));
                        ?>

                        <?php echo zHtml::activeDropDownList($model, 'currency_id', (BspCurrency::model()->getCurrencies()), array('class' => 'select2', 'encode' => true)); ?>

                        <?php
                        echo $form->textField($model, 'price', array(
                            'class' => 'k-textbox',
                            "id" => "txtprice",
                            'placeholder' => "Your Price?...",
                            "pattern" => "\d{1,11}",
                            "style" => "width: 24%; height: 39px !important; margin-top: 15px"
                        ));
                        ?>
                    </div>
                </div>
                <div class="col-lg-12">

                    <div class="select-bg-img">
                        <span><a href="javascript:void(0)">Select your background image</a></span>
                        <?php
                        $uploadTemp = new UploadTemp();
                        echo zHtml::activeFileField($uploadTemp, '[' . 1 . ']upload_temp_image');
                        ?>
                        <?php echo $form->hiddenField($model, 'background_image'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div>
                            <p>
                                <?php
                                $avatar = "";
                                if ($model->avatar_image != "" && $model->hasErrors()) {
                                    echo CHtml::image(Yii::app()->baseUrl . "/uploads/temp/" . Yii::app()->user->id . "/BspItemFrontEnd/BspItemFrontEnd_avatar_image/" . $model->avatar_image, '', array("class" => "over-post-avata"));
                                } else if (!empty($user->avatar)) {
                                    $avatar = CHtml::image(Yii::app()->baseUrl . '/uploads/Users/' . $user->id . '/avatar/' . $user->avatar, '', array("class" => "over-post-avata"));
                                } else {
                                    $avatar = CHtml::image(Yii::app()->theme->baseUrl . '/images/noavatar.jpg', '', array("class" => "over-post-avata"));
                                }
                                echo $avatar;
                                ?>

                            </p> 
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="select-avatar-img">
                            <span><a href="javascript:void(0)">Select your avatar</a></span>
                            <?php
                            $uploadTemp = new UploadTemp();
                            echo zHtml::activeFileField($uploadTemp, '[' . 2 . ']upload_temp_image');
                            ?>
                            <?php echo $form->hiddenField($model, 'avatar_image'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>