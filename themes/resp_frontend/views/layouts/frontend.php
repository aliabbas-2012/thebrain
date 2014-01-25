<!DOCTYPE html>
<html lang="en">
    <head>        

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl ?>/docs-assets/ico/favicon.png" />

        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/jquery-1.10.2.min.js"></script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>


        <meta charset="iso-8859-15"> 


        <!-- Bootstrap core CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/dist/css/bootstrap.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/dist/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/theme.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="<?php echo Yii::app()->theme->baseUrl ?>/docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <?php
        header('Content-Type: text/html; charset="utf-8"', true);
        ?>
    </head>

    <body>
        <div id="loading" align="center">
            Please Wait

        </div>
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse first-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?php echo $this->createUrl(Yii::app()->homeUrl[0]); ?>">
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/logo.png", '', array("width" => "200"));
                        ?>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <?php
                    $criteria = new CDbCriteria();
                    $criteria->select = "ID,article_name,article_name_de,custom_url_de,custom_url";
                    $articless = BspArticla::model()->findAll($criteria);
                    ?>
                    <ul class="nav navbar-nav navbar-right"> 
                        <li class="dropdown">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/notify.png", '', array("height" => "20"));
                                ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <?php
                                    echo CHtml::link(Yii::t('link', "Dashboard"), $this->createUrl('/web/user/dashboard'));
                                    ?>
                                </li>                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/mail.png", '', array("height" => "20"));
                                ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <?php
                                    echo CHtml::link(Yii::t('link', "View All Messages"), $this->createUrl('/web/user/messages'));
                                    ?>
                                </li>                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <?php
                            /**
                             * login
                             */
                            if (empty(Yii::app()->user->id)):
                                ?>
                                <a  class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                                <div class="dropdown-menu login-dropdown-menu">
                                    <?php
                                    $model = new LoginForm;
                                    $this->renderPartial("//common/_login_box", array("model" => $model));
                                    ?>
                                </div>
                                <?php
                            else :
                                $this->renderPartial("//common/_logout_box");
                            endif;
                            ?>
                        </li>

                        <li>
                            <?php
                            echo CHtml::link("Home", $this->createUrl("/web/default/index"));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo CHtml::link("Blog", $this->createUrl("/web/blog/index"));
                            ?>                        
                        </li>
                        <li>
                            <?php
                            echo CHtml::link("How It Works", $this->createUrl("/web/article/index", array("slug" => !empty($articless[0]) ? $articless[0]->slug : "how-it-works-8")));
                            ?>                        
                        </li>


                    </ul>
                </div><!--/.nav-collapse -->
            </div>
            <div class="container search-bar" style="background:#fafcfc;">

                <div class="navbar-collapse form-nav">
                    <?php
                    $model = new OfferSearch();
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'search-form',
                        'enableAjaxValidation' => false,
                        'action' => $this->createUrl("/web/offers/search"),
                        'htmlOptions' => array(
                            'class' => 'form-horizontal',
                        )
                    ));
                    ?>
                    <ul class="nav navbar-nav"> 
                        <li class="dropdown">
                            <a  class="dropdown-toggle head_category" data-toggle="dropdown">
                                <?php echo Yii::t('link', 'All Categories') ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu category_head_menu">
                                <?php
                                $data = BspCategory::model()->findAll(array('condition' => 'parent_id=0'));
                                $i = 1;
                                foreach ($data as $da) {

                                    $cssClass = "";
                                    if ($da->name != "Services" && $da->name != "Rentals") {
                                        $cssClass = "clearleft";
                                    }
                                    echo '<li id="menu-item-' . $i . '" class=' . $cssClass . '>';

                                    echo CHtml::link($da->name, $this->createUrl("/web/offers/category", array("category" => $da->slug)));


                                    echo CHtml::openTag("ul", array("class" => ""));
                                    $subcate = BspCategory::model()->findAll(array('condition' => 'parent_id=' . $da->id));
                                    foreach ($subcate as $sub) {

                                        echo '<li>';
                                        echo CHtml::link($sub->name, $this->createUrl("/web/offers/category", array("category" => $sub->slug)));
                                        echo '</li>';
                                    }
                                    echo CHtml::closeTag("ul");
                                    echo '</li>';

                                    $i++;
                                }
                                ?>

                            </ul>
                        </li>

                        <li class="keword_search">
                            <?php
                            echo $form->textField($model, 'keyword', array(
                                "class" => "form-control", "placeholder" => "Search ..."));
                            ?>
                        </li>    
                        <li class="location_search">
                            <?php
                            echo $form->textField($model, 'location', array("class" => "form-control", "placeholder" => "f.e 10245 Berlin..."));
                            echo $form->hiddenField($model, 'lat');
                            echo $form->hiddenField($model, 'lng');

                            //other fields as search
                            echo $form->hiddenField($model, 'special_deal');
                            echo $form->hiddenField($model, 'withVideo');
                            echo $form->hiddenField($model, 'withSound');
                            echo $form->hiddenField($model, 'lowPrice');
                            echo $form->hiddenField($model, 'highPrice');
                            echo $form->hiddenField($model, 'popularity');
                            echo $form->hiddenField($model, 'nearFirst');
                            ?>
                        </li>    
                        <li class="distant_search">
                            <?php
                            $distance_arr = array(
                                "0" => "+/- km",
                                "5" => "5km",
                                "10" => "10km",
                                "20" => "20km",
                                "50" => "50km",
                                "100" => "100km",
                                "250" => "250km",
                                "" => "All Over",
                            );
                            echo $form->dropDownList($model, 'distance', $distance_arr, array("class" => "form-control"));
                            ?>

                        </li>
                        <li class="btn-search">                            
                            <div class="search-button">
                                <a class="searchbt-top" href="javascript:void(0)" onclick="jQuery('#search-form').submit();">
                                    <?php
                                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/search_button.png");
                                    ?>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <?php
                    $this->endWidget();
                    ?>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div id="puzzle_slider">
            <?php
            if ($this->id == "default" && $this->action->id == "index") {
                $this->renderPartial("//default/_slider");
            } else if ($this->id == "offers" && $this->action->id == "detail") {
                $this->renderPartial("//offers/_top_detail");
            }
            ?> 
        </div>
        <div id="content_container" class="container theme-showcase">
            <div class="alert alert-warning" style="display: none"></div>
            <div class="alert alert-success" style="display: none"></div>

            <?php echo $content; ?>

        </div> <!-- /container -->

        <div class="clear"></div>
        <div id="footer" class="container">
            <nav class="navbar-default">
                <div class="navbar-inner navbar-content-center">
                    <ul class="footer-contain">

                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/article/article/", array('slug' => !empty($articless[0]) ? $articless[0]->slug : "how-it-works-9")); ?>"><?php echo Yii::t('link', 'How it works') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/blog/index"); ?>"><?php echo Yii::t('link', 'Blog') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/faq/index"); ?>"><?php echo Yii::t('link', 'FAQ') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/article/index/", array('slug' => !empty($articless[1]) ? $articless[1]->slug : "terms_condition-9")); ?>"><?php echo Yii::t('link', 'Term &amp; Conditions') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/article/index/", array('slug' => !empty($articless[2]) ? $articless[2]->slug : "privacy-10")); ?>"><?php echo Yii::t('link', 'Privacy Policy') ?></a>
                        </li>
                        <li class="link link-flag"><a href="javascript:void(0)" onclick="window.location = '<?php echo "http://" . "en." . "thepuzzzle.com/" . Yii::app()->request->getPathInfo(); ?>'"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/en.png"  alt="Language Flag EN"/></a></li>
                        <li class="link link-flag"><a href="javascript:void(0)" onclick="window.location = '<?php echo "http://" . "de." . "thepuzzzle.com/" . Yii::app()->request->getPathInfo(); ?>'"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/de.png" alt="Language Flag DE"/></a></li>
                        <li class="link link_right"><a href="javascript:void(0)"><img id="link_twitter" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/twitter.png" alt="twitter"/></a></li>
                        <li class="link link_right"><a href="javascript:void(0)"><img id="link_google" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/google.png" alt="google"/></a></li>
                        <li class="link link_right"><a href="#"><img id="link_facebook" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/fb.png" alt="fb"/></a></li>

                    </ul>


                </div>
            </nav>
        </div>



        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/docs-assets/js/holder.js"></script>

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->baseUrl ?>/css/Kendo/kendo.common.min.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->baseUrl ?>/css/Kendo/kendo.metro.min.css"/>
        <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->baseUrl ?>/js/Kendo/kendo.web.min.js"></script>

        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/thepuzzleadmin.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
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

                                            jQuery("#OfferSearch_lat").val(places[0].geometry.location.nb);
                                            jQuery("#OfferSearch_lng").val(places[0].geometry.location.ob);


                                        });
                                        // [END region_getplaces]

                                        // Bias the SearchBox results towards places that are within the bounds of the

                                    }
                                    if (typeof(google) != "undefined") {
                                        google.maps.event.addDomListener(window, 'load', initialize);
                                    }

        </script>
        <style>
            #target {
                width: 345px;
            }
            .controls {
                margin-top: 16px;
                border: 1px solid transparent;
                border-radius: 2px 0 0 2px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                height: 32px;
                outline: none;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            }

            #BspItem_loc_name {
                background-color: #fff;
                padding: 0 11px 0 13px;
                width: 400px;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                text-overflow: ellipsis;
            }

            #BspItem_loc_name:focus {
                border-color: #4d90fe;
                margin-left: -1px;
                padding-left: 14px;  /* Regular padding-left + 1. */
                width: 401px;
            }

            .pac-container {
                font-family: Roboto;
            }

            #type-selector {
                color: #fff;
                background-color: #4d90fe;
                padding: 5px 11px 0px 11px;
            }

            #type-selector label {
                font-family: Roboto;
                font-size: 13px;
                font-weight: 300;
            }


        </style>
        <div id="map-canvas"></div>
        <script>
            $(function() {
                $(window).scroll(function() {
                    var aTop = $('.first-nav').height();
                    if ($(this).scrollTop() >= aTop) {

                        $('.search-bar').css('position', 'fixed');
                        $('.search-bar').css('top', '0px');
                        $('.search-bar').css('z-index', '99999');
                    }
                    else {
                        $('.search-bar').css('position', 'relative');
                        $('.search-bar').css('z-index', '1');
                    }
                });
            });
        </script>
    </body>
</html>
