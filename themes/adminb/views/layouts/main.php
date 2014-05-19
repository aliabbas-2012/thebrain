
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <?php
        $baseUrl = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        // $cs->registerScriptFile($baseUrl . '/js/jquery1.8.js', CClientScript::POS_HEAD);
        ?>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery1.8.js"></script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Free yii themes, free web application theme">
        <meta name="author" content="Webapplicationthemes.com">
        <!--        <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>-->

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


        <!-- Fav and Touch and touch icons -->
        <link rel="shortcut icon" href="<?php echo $baseUrl; ?>/img/icons/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $baseUrl; ?>/img/icons/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseUrl; ?>/img/icons/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $baseUrl; ?>/img/icons/apple-touch-icon-57-precomposed.png">
        <?php
        $cs->registerCssFile($baseUrl . '/css/bootstrap.min.css');
        $cs->registerCssFile($baseUrl . '/css/bootstrap-responsive.min.css');
        $cs->registerCssFile($baseUrl . '/css/abound.css');
        //$cs->registerCssFile($baseUrl.'/css/style-blue.css');
        ?>
        <!-- styles for style switcher -->
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/style-blue.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style2" href="<?php echo $baseUrl; ?>/css/style-brown.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style3" href="<?php echo $baseUrl; ?>/css/style-green.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style4" href="<?php echo $baseUrl; ?>/css/style-grey.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style5" href="<?php echo $baseUrl; ?>/css/style-orange.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style6" href="<?php echo $baseUrl; ?>/css/style-purple.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style7" href="<?php echo $baseUrl; ?>/css/style-red.css" />
        <?php
        $cs->registerScriptFile($baseUrl . '/js/bootstrap.min.js');
        $cs->registerScriptFile($baseUrl . '/js/plugins/jquery.sparkline.js');
        $cs->registerScriptFile($baseUrl . '/js/plugins/jquery.flot.min.js');
        $cs->registerScriptFile($baseUrl . '/js/plugins/jquery.flot.pie.min.js');
        $cs->registerScriptFile($baseUrl . '/js/charts.js');
        $cs->registerScriptFile($baseUrl . '/js/plugins/jquery.knob.js');
        $cs->registerScriptFile($baseUrl . '/js/plugins/jquery.masonry.min.js');
        $cs->registerScriptFile($baseUrl . '/js/styleswitcher.js');
        ?>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/thepuzzleadmin.js"></script>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->baseUrl ?>/css/Kendo/kendo.common.min.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->baseUrl ?>/css/Kendo/kendo.metro.min.css"/>
        <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->baseUrl ?>/js/Kendo/kendo.web.min.js"></script>

    </head>

    <body>
        <div id="loading" align="center">
            Please Wait

        </div>

        <section id="navigation-main">   
            <!-- Require the navigation -->
            <?php require_once('tpl_navigation.php') ?>
        </section><!-- /#navigation-main -->

        <section class="main-body">
            <div class="container-fluid">
                <!-- Include content pages -->
                <?php echo $content; ?>
            </div>
        </section>
        <div id="map-canvas"></div>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places"></script>
        <script>
            // This example adds a search box to a map, using the Google Place Autocomplete
            // feature. People can enter geographical searches. The search box will return a
            // pick list containing a mix of places and predicted search terms.

            function initialize() {

                var markers = [];
                var map = new google.maps.Map(document.getElementById('map-canvas'), {
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                //                // Create the search box and link it to the UI element.
                var input = /** @type {HTMLInputElement} */(
                        document.getElementById('OfferSearch_location'));
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                var searchBox = new google.maps.places.SearchBox(
                        /** @type {HTMLInputElement} */(input));




                // [START region_getplaces]
                // Listen for the event fired when the user selects an item from the
                // pick list. Retrieve the matching places for that item.
                google.maps.event.addListener(searchBox, 'places_changed', function() {
                    var places = searchBox.getPlaces();

                    if (typeof(places[0].geometry.location.nb) != "undefined") {
                        jQuery("#OfferSearch_lat").val(places[0].geometry.location.nb);
                    }
                    if (typeof(places[0].geometry.location.ob) != "undefined") {
                        jQuery("#OfferSearch_lng").val(places[0].geometry.location.ob);
                    }

                    //settting changed
                    if (typeof(places[0].geometry.location.A) != "undefined") {
                        jQuery("#OfferSearch_lat").val(places[0].geometry.location.A);
                    }
                    if (typeof(places[0].geometry.location.k) != "undefined") {
                        jQuery("#OfferSearch_lng").val(places[0].geometry.location.k);
                    }

                    if (typeof(places[0].geometry.location.d) != "undefined") {
                        jQuery("#OfferSearch_lat").val(places[0].geometry.location.d);
                    }
                    if (typeof(places[0].geometry.location.e) != "undefined") {
                        jQuery("#OfferSearch_lng").val(places[0].geometry.location.e);
                    }




                });
                // [END region_getplaces]

                // Bias the SearchBox results towards places that are within the bounds of the

            }
            if (typeof(google) != "undefined") {
                google.maps.event.addDomListener(window, 'load', initialize);
            }
            if (typeof(google) != "undefined" && typeof(setCitySearch) == "function") {
                google.maps.event.addDomListener(window, 'load', setCitySearch);
            }
            if (typeof(google) != "undefined" && typeof(setZipSearch) == "function") {
                google.maps.event.addDomListener(window, 'load', setZipSearch);
            }

        </script>  
        <!-- Require the footer -->
        <?php require_once('tpl_footer.php') ?>
        
    </body>
</html>