<div class="row-fluid profile-view">
    <h2>
        Profile
        <?php
        echo CHtml::link(CHtml::button("View Profile", array("class" => "btn btn-default")), $this->createUrl("/web/user/profileview"));
        ?>
    </h2>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'profile-form',
        //'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal'),
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    //CVarDumper::dump($model->getErrors(), 10, true);
    ?>

    <?php
    if (Yii::app()->user->hasFlash('success')) {
        echo "<span class='alert alert-success'>" . Yii::app()->user->getFlash('success') . "</span>";
    }
    ?>
    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title' => "Basic Information",
    ));
    ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'username', array("readonly" => "readonly", 'class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'username', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'user_email', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'user_email', array("readonly" => "readonly", 'class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'user_email', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'first_name', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'first_name', array("class" => 'alert alert-error')); ?> 
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'second_name', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'second_name', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'second_name', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'gender', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->dropDownList($model, 'gender', array("1" => "Male", "2" => "Female"), array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'gender', array("class" => 'alert alert-error')); ?>   
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'birthday', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php
            $this->widget('ItstJUIDatePicker', array(
                'model' => $model,
                'attribute' => 'birthday',
                'model_attribute' => 'birthday',
                'options' => array('showAnim' => 'fold',
                    'dateFormat' => Yii::app()->params['dateformat'],
                    'changeYear' => true,
                ),
                'htmlOptions' => array('class' => 'form-control')
            ));
            ?>

            <?php echo $form->error($model, 'gender', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'avatar', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php
            echo zHtml::kendoUploader($model, 'avatar', 'avatar', $this->createUrl("/site/uploadTemp", array("model" => get_class($model), "attribute" => "Users_avatar"))
            );
            echo zHtml::imageLinkRemove($model, 'avatar', get_class($model), "avatar");
            ?>
        </div>

        <?php echo $form->error($model, 'avatar', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'paypal_mail', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'paypal_mail', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'paypal_mail', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'fbmail', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'fbmail', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'fbmail', array("class" => 'alert alert-error')); ?>
        </div>

    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'background', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php
            echo zHtml::kendoMultiUploader(1, $model, 'background', 'background', $this->createUrl("/site/uploadTemp", array("index" => 1, "model" => get_class($model), "attribute" => "Users_background"))
            );
            echo zHtml::imageLinkRemove($model, 'background', get_class($model), 'background');
            ?>

        </div>

        <?php echo $form->error($model, 'background', array("class" => 'alert alert-error')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'address', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'address', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'address', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'country', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'country', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'country', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'city', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'city', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'city', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'zipcode', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'zipcode', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'zipcode', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'phone', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'phone', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'phone', array("class" => 'alert alert-error')); ?>    
        </div>

    </div>
    <?php echo $form->hiddenField($model, 'lat', array('class' => 'form-control')); ?> 
    <?php echo $form->hiddenField($model, 'lng', array('class' => 'form-control')); ?> 


    <div class="form-group">
        <?php echo $form->labelEx($model, 'store_url', array('class' => 'control-label col-sm-2')); ?>
        <?php echo Yii::app()->request->hostInfo . "/" . Yii::app()->baseUrl . "/"; ?>
        <div class="col-lg-4">
            <?php echo $form->textField($model, 'store_url', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'store_url', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-lg-4">
            <?php echo $form->textArea($model, 'description', array('class' => 'form-control')); ?> 
            <?php echo $form->error($model, 'description', array("class" => 'alert alert-error')); ?>
        </div>

    </div>
    <div class="form-group buttons">
        <div class="col-sm-offset-2 col-sm-1">
            <?php echo CHtml::submitButton('Update', array('class' => 'btn btn btn-default')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>

<script>
    function setCitySearch() {
        //city button

        var markers = [];
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        //                // Create the search box and link it to the UI element.
        var input = /** @type {HTMLInputElement} */(
                document.getElementById('Users_city'));

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var searchBox_city = new google.maps.places.SearchBox(
                /** @type {HTMLInputElement} */(input), {types: ['(cities)'], });




        // [START region_getplaces]
        // Listen for the event fired when the user selects an item from the
        // pick list. Retrieve the matching places for that item.
        google.maps.event.addListener(searchBox_city, 'places_changed', function() {
            var places = searchBox_city.getPlaces();

            if (typeof(places[0].geometry.location.nb) != "undefined") {
                jQuery("#Users_lat").val(places[0].geometry.location.nb);

            }
            if (typeof(places[0].geometry.location.ob) != "undefined") {
                jQuery("#Users_lng").val(places[0].geometry.location.ob);

            }

            //settting changed
            if (typeof(places[0].geometry.location.A) != "undefined") {
                jQuery("#Users_lat").val(places[0].geometry.location.A);

            }
            if (typeof(places[0].geometry.location.k) != "undefined") {
                jQuery("#Users_lng").val(places[0].geometry.location.k);

            }

            if (typeof(places[0].geometry.location.d) != "undefined") {
                jQuery("#Users_lat").val(places[0].geometry.location.d);

            }
            if (typeof(places[0].geometry.location.e) != "undefined") {
                jQuery("#Users_lng").val(places[0].geometry.location.e);

            }
        });
    }
    function setZipSearch() {
        //city button

        var markers = [];
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        //                // Create the search box and link it to the UI element.
        var input = /** @type {HTMLInputElement} */(
                document.getElementById('Users_zipcode'));

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var searchBox_city = new google.maps.places.SearchBox(
                /** @type {HTMLInputElement} */(input), {types: ['(zipcodes)'], });




        // [START region_getplaces]
        // Listen for the event fired when the user selects an item from the
        // pick list. Retrieve the matching places for that item.
        google.maps.event.addListener(searchBox_city, 'places_changed', function() {
            var places = searchBox_city.getPlaces();

            city = input.value;
            city = city.split(",");
            if (city.length == 2) {
                jQuery("#Users_country").val(jQuery.trim(city[1]));
            }
            else if (city.length == 3) {
                jQuery("#Users_country").val(jQuery.trim(city[2]));
            }

            if (typeof(places[0].geometry.location.nb) != "undefined") {
                jQuery("#Users_lat").val(places[0].geometry.location.nb);

            }
            if (typeof(places[0].geometry.location.ob) != "undefined") {
                jQuery("#Users_lng").val(places[0].geometry.location.ob);

            }

            //settting changed
            if (typeof(places[0].geometry.location.A) != "undefined") {
                jQuery("#Users_lat").val(places[0].geometry.location.A);

            }
            if (typeof(places[0].geometry.location.k) != "undefined") {
                jQuery("#Users_lng").val(places[0].geometry.location.k);

            }

            if (typeof(places[0].geometry.location.d) != "undefined") {
                jQuery("#Users_lat").val(places[0].geometry.location.d);

            }
            if (typeof(places[0].geometry.location.e) != "undefined") {
                jQuery("#Users_lng").val(places[0].geometry.location.e);

            }
        });
    }

</script>