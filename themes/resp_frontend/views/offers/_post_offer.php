<div class="i_offer">
    <div class="container">
        <div class="row">
            <div class="offer_wrap">
                <div class="col-lg-8">
                    <div id="offer1">
                        <p class="floatLeft">I offer  </p>
                        <input id="txtoffer" class="k-textbox floatLeft" type="text" placeholder="Type here your offer" name="txtoffer">
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
                            "style" => "width: 34%; height: 39px !important; margin-top: 15px"
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
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/avtar.png" alt="Avatar" class="over-post-avata" />
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