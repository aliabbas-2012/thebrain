<div class="row">
    <div class="col-lg-12">
        <label class="titleOption">
            <?php echo Yii::t('postOffer', 'My Profile'); ?>
            <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/saydiv.png">
        </label>
        <label class="obligatory">(<?php echo Yii::t('postOffer', 'obligatory'); ?>)</label>
    </div>
    <div class="row" id="profile">
        <div class="col-lg-6">

            <?php
            //CVarDumper::dump($model->attributes,10,true);
            echo $form->textField($model, 'first_name', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 'first_name',
                'placeholder' => Yii::t('postOffer', "Type here your First Name...")));
            ?> 
            <label class="req-f font-req">(<?php echo Yii::t('postOffer', 'obligatory'); ?>)</label>

            <?php
            echo $form->textField($model, 'description', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 'description',
                'placeholder' => Yii::t('postOffer', "Type here your occupation, what describes you or your work...")));
            ?> 
            <?php
            echo $form->textField($model, 'country', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 'country',
                'placeholder' => Yii::t('postOffer', "Type here your Country...")));
            ?> 
            <?php
            echo $form->passwordField($model, 'password_new', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 'country',
                'placeholder' => Yii::t('postOffer', "Type here your Password...")));
            ?> 

            <label class="floatLeft">* <?php echo Yii::t('postOffer', 'To change your Password, Just enter your new Password'); ?></label>

            <?php
            echo $form->passwordField($model, 'pwd_repeat', array(
                'class' => 'k-textbox floatLeft profileBottom profileText',
                'id' => 're_pass',
                'placeholder' => Yii::t('postOffer', "Repeat here your Password...")));
            ?> 
            <label class="floatLeft">* <?php echo Yii::t('postOffer', 'and confirm it here'); ?></label>
        </div>
        <div class="col-lg-6">
            <div id="choose_radio">

                <?php
                echo $form->textField($model, 'second_name', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                    'id' => 'first_name',
                    'placeholder' => Yii::t('postOffer', "Type here your occupation, what describes you or your work...")));
                ?> 
                <label class="req-s font-req">(obligatory)</label>
                <?php
                echo $form->textField($model, 'city', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                    'placeholder' => Yii::t('postOffer', "Type City")));
                ?> 


                <?php
                echo $form->textField($model, 'zipcode', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                   
                    'placeholder' => Yii::t('postOffer', "Zip Code")));
                ?> 


                <?php
                echo $form->textField($model, 'phone', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                    'id' => 'country',
                    'placeholder' => Yii::t('postOffer', "Type here your Phone Number...")));
                ?> 

                <?php
                echo $form->textField($model, 'paypal_mail', array(
                    'class' => 'k-textbox floatLeft profileBottom profileText',
                    'id' => 'country',
                    'placeholder' => Yii::t('postOffer', "Type here your Pay Pal Email...")));

                echo $form->hiddenField($model, "lat");
                echo $form->hiddenField($model, "lng");
                ?> 
                <label class="req-m font-req">(<?php echo Yii::t('postOffer', 'obligatory'); ?>)</label>
            </div>
        </div>
    </div>
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
                document.getElementById('ChangeUser_city'));
       
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var searchBox_city = new google.maps.places.SearchBox(
                /** @type {HTMLInputElement} */(input),{types: ['(cities)'],});




        // [START region_getplaces]
        // Listen for the event fired when the user selects an item from the
        // pick list. Retrieve the matching places for that item.
        google.maps.event.addListener(searchBox_city, 'places_changed', function() {
            var places = searchBox_city.getPlaces();

            if (typeof(places[0].geometry.location.nb) != "undefined") {
                jQuery("#ChangeUser_lat").val(places[0].geometry.location.nb);
                jQuery("#BspItemFrontEnd_lat").val(places[0].geometry.location.nb);
            }
            if (typeof(places[0].geometry.location.ob) != "undefined") {
                jQuery("#ChangeUser_lng").val(places[0].geometry.location.ob);
                jQuery("#BspItemFrontEnd_lng").val(places[0].geometry.location.ob);
            }

            //settting changed
            if (typeof(places[0].geometry.location.A) != "undefined") {
                jQuery("#ChangeUser_lat").val(places[0].geometry.location.A);
                jQuery("#BspItemFrontEnd_lat").val(places[0].geometry.location.A);
            }
            if (typeof(places[0].geometry.location.k) != "undefined") {
                jQuery("#ChangeUser_lng").val(places[0].geometry.location.k);
                jQuery("#BspItemFrontEnd_lng").val(places[0].geometry.location.k);
            }

            if (typeof(places[0].geometry.location.d) != "undefined") {
                jQuery("#ChangeUser_lat").val(places[0].geometry.location.d);
                jQuery("#BspItemFrontEnd_lat").val(places[0].geometry.location.nb);
            }
            if (typeof(places[0].geometry.location.e) != "undefined") {
                jQuery("#ChangeUser_lng").val(places[0].geometry.location.e);
                jQuery("#BspItemFrontEnd_lng").val(places[0].geometry.location.e);
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
                document.getElementById('ChangeUser_zipcode'));

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var searchBox_city = new google.maps.places.SearchBox(
                /** @type {HTMLInputElement} */(input),{types: ['(zipcodes)'],});




        // [START region_getplaces]
        // Listen for the event fired when the user selects an item from the
        // pick list. Retrieve the matching places for that item.
        google.maps.event.addListener(searchBox_city, 'places_changed', function() {
            var places = searchBox_city.getPlaces();

            if (typeof(places[0].geometry.location.nb) != "undefined") {
                jQuery("#ChangeUser_lat").val(places[0].geometry.location.nb);
                jQuery("#BspItemFrontEnd_lat").val(places[0].geometry.location.nb);
            }
            if (typeof(places[0].geometry.location.ob) != "undefined") {
                jQuery("#ChangeUser_lng").val(places[0].geometry.location.ob);
                jQuery("#BspItemFrontEnd_lng").val(places[0].geometry.location.ob);
            }

            //settting changed
            if (typeof(places[0].geometry.location.A) != "undefined") {
                jQuery("#ChangeUser_lat").val(places[0].geometry.location.A);
                jQuery("#BspItemFrontEnd_lat").val(places[0].geometry.location.A);
            }
            if (typeof(places[0].geometry.location.k) != "undefined") {
                jQuery("#ChangeUser_lng").val(places[0].geometry.location.k);
                jQuery("#BspItemFrontEnd_lng").val(places[0].geometry.location.k);
            }

            if (typeof(places[0].geometry.location.d) != "undefined") {
                jQuery("#ChangeUser_lat").val(places[0].geometry.location.d);
                jQuery("#BspItemFrontEnd_lat").val(places[0].geometry.location.d);
            }
            if (typeof(places[0].geometry.location.e) != "undefined") {
                jQuery("#ChangeUser_lng").val(places[0].geometry.location.e);
                jQuery("#BspItemFrontEnd_lng").val(places[0].geometry.location.e);
            }
        });
    }
    
</script>