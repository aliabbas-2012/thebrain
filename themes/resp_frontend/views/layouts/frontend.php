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


        <meta charset="utf-8" /> 


        <!-- Bootstrap core CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/dist/css/bootstrap.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/dist/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/theme.css" rel="stylesheet">
        <!--        convert inline to external style-->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/style.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="<?php echo Yii::app()->theme->baseUrl ?>/docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!--ALERT-->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/media/alert/css/alert.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/media/alert/themes/light/theme.css" rel="stylesheet" />

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/media/alert/js/alert.js"></script>
        <?php
        header('Content-Type: text/html; charset="utf-8"', true);
        ?>
        <?php
        if ($this->id == "default" && $this->action->id == "index") {
            ?>
            <link media='all' href="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/css/bs-template-product.css" rel="stylesheet" type="text/css" />
            <link media='all' href="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/css/animate.css" rel="stylesheet" type="text/css" />
            <link media='all' href="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/css/bootslider.css" rel="stylesheet" type="text/css" />
            <?php
        }
        ?>    
        <!--rating-->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/media/rating/jquery.rating.css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/media/rating/jquery.ratings.js"></script>

        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/jquery.mambo.js"></script>
        <!--gallery-->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/media/bootstrap-gallery/css/blueimp-gallery.min.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/media/bootstrap-gallery/css/bootstrap-image-gallery.css">
        <!-- kendo -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->baseUrl ?>/css/Kendo/kendo.common.min.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->baseUrl ?>/css/Kendo/kendo.metro.min.css"/>
    </head>

    <body>
        <div id="loading">
            Please Wait
        </div>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container login-bar-container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#menu-primary">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $this->createUrl(Yii::app()->homeUrl[0]); ?>">
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/logo.png", 'Logo', array("width" => "200", "title" => 'Logo'));
                        ?>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div  id="menu-primary" class="collapse navbar-collapse navbar-left">
                    <?php
                    $criteria = new CDbCriteria();
                    $criteria->select = "ID,article_name,article_name_de,custom_url_de,custom_url";
                    $articless = BspArticla::model()->findAll($criteria);
                    ?>
                    <ul class="nav navbar-nav navbar-right"> 
                        <?php
                        if (isset(Yii::app()->user->id)):
                            $criteria = new CDbCriteria();
                            $criteria->condition = "isview = 0 AND user_id = " . Yii::app()->user->id;
                            $notify = BspNotify::model()->count($criteria);
                            $criteria->limit = 20;
                            $criteria->condition = "user_id = " . Yii::app()->user->id;
                            $criteria->order = "id DESC";
                            $notifications = BspNotify::model()->findAll($criteria);
                            ?>
                            <li class="dropdown">
                                <a  class="dropdown-toggle" data-toggle="dropdown">
                                    <?php
                                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/notify.png", 'Dashboard', array("height" => "20", "title" => 'Dashboard'));
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
                                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/mail.png", 'Mail', array("height" => "20", "title" => 'Mail'));
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
                                <a  class="dropdown-toggle <?php echo $notify > 0 ? "notifySelected" : ""; ?>" data-toggle="dropdown">
                                    <?php
                                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/notification_warning.png", 'Notifcation', array("height" => "24", "title" => 'Notifcation'));
                                    ?>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php
                                    foreach ($notifications as $notify):
                                        ?>
                                        <li>
                                            <?php
                                            echo CHtml::link(Yii::t('link', "View All Messages"), $this->createUrl('/web/user/messages'));
                                            ?>
                                        </li>
                                        <?php
                                    endforeach;
                                    ;
                                    ?>
                                </ul>
                            </li>
                            <?php
                        endif;
                        ?>
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
                            echo CHtml::link(Yii::t('link', "Blog"), $this->createUrl("/web/blog/index"));
                            ?>                        
                        </li>
                        <li>
                            <?php
                            echo CHtml::link(Yii::t('link', "How It Works"), $this->createUrl("/web/article/index", array("slug" => !empty($articless[0]) ? $articless[0]->slug : "how-it-works-8")));
                            ?>                        
                        </li>
                        <li >
                            <?php
                            echo CHtml::link(Yii::t('link', "Post Your Offer"), $this->createUrl("/web/offers/post", array("action" => "create")), array("class" => "offer"));
                            ?>                        
                        </li>


                    </ul>       
                </div>
            </div><!-- /.container -->
        </nav>
        <!-- navbar search -->
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'search-form',
            "method" => "GET",
            'enableAjaxValidation' => false,
            'action' => $this->createUrl("/web/offers/search"),
            'htmlOptions' => array(
                'class' => 'form-horizontal',
                "method" => "GET"
            )
        ));
        ?>
        <?php
        $model = new OfferSearch();

        //offer search keywords
        if (isset($_GET['OfferSearch'])) {
            $model->attributes = $_GET['OfferSearch'];
        }
        ?>
        <nav id="navbar-search" class="navbar navbar-inverse" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle search-toogle" data-toggle="collapse" data-target="#menu-secondary">
<?php echo Yii::t('link', 'Search') ?>
                    <span class="search-icon">&nbsp;</span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="menu-secondary" class="collapse navbar-collapse navbar-left">
                <div class="nav navbar-nav">

                    <div class="search-bar">
                        <div class="navbar-collapse form-nav main-search-bar-2">

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

                                            $cssClass = "noleft";
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
                                    echo $form->textField($model, 'keyword', array("class" => "form-control location_search", "placeholder" => "Search ..."));
                                    ?>
                                </li>
                                <li class="location_search">
                                    <?php
                                    echo $form->textField($model, 'location', array("class" => "form-control location_search", "placeholder" => "f.e 10245 Berlin..."));

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
                                        "500" => "500km",
                                        "1000" => "1000km",
                                        "all" => "All Over",
                                    );
                                    echo $form->dropDownList($model, 'distance', $distance_arr, array("class" => "form-control"));
                                    ?>

                                </li>
                                <li class="btn-search">                            
                                    <span class="search-button">
                                        <a class="searchbt-top" href="javascript:void(0)" onclick="thepuzzleadmin.submitSearch()">
                                            <?php
                                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/search_button.png", 'Search', array("title" => "Search"));
                                            ?>
                                        </a>
                                    </span>
                                </li>
                            </ul>

                        </div><!--/.nav-collapse -->
                    </div>
                </div>           
            </div>
        </nav>
        <?php
        $this->endWidget();
        ?>
        <div class="row notice-bar">
            <div class="row-holder">
                <?php
                $notice_bar = ConfMisc::model()->find("param = '" . Yii::app()->language . "_notice_bar'");
                $notice_value = isset($notice_bar->value) ? $notice_bar->value : "The Puzzle Alpha";
                ?>
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="puzzle-top text-center">
                        <a href="javascript:void(0)"><?php echo Yii::t('site', $notice_value); ?></a>
                        <div  class="newfeed-close">
                            <span class="k-icon k-i-close" id="newsfeed-close" onclick="jQuery('.notice-bar').remove();"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
        <div id="puzzle_slider">
            <?php
            if ($this->id == "default" && $this->action->id == "index") {
                $this->renderPartial("//default/_slider");
            } else if ($this->id == "offers" && $this->action->id == "detail" && !empty($this->item)) {
                $this->renderPartial("//offers/_top_detail", array("model" => $this->item));
            }
            if ($this->id == "userdata" && $this->action->id == "store" && !empty($this->_user)) {
                $this->renderPartial("//userdata/_user_store_top", array("model" => $this->_user));
            }
            ?> 
        </div>

        <?php
        //post offer offer
        if ($this->id == "offers" && $this->action->id == "post") {
            echo $content;
        } else {
            ?>
            <div id="content_container" class="container theme-showcase">
                <div class="alert alert-warning" style="display: none"></div>
                <div class="alert alert-success" style="display: none"></div>

            <?php echo $content; ?>
            </div> <!-- /container -->
            <?php
        }
        ?>
        <div class="clear"></div>

        <div id="footer" class="container">
            <nav class="navbar-default">
                <div class="navbar-inner navbar-content-center">
                    <ul class="footer-contain">

                        <li class="link ">
                            <a href="<?php echo $this->createUrl("/web/article/index/", array('slug' => !empty($articless[0]) ? $articless[0]->slug : "how-it-works-9")); ?>"><?php echo Yii::t('link', 'How it works') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/blog/index"); ?>"><?php echo Yii::t('link', 'Blog'); ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/faq/index"); ?>"><?php echo Yii::t('link', 'FAQ'); ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/article/index/", array('slug' => !empty($articless[1]) ? $articless[1]->slug : "terms_condition-9")); ?>"><?php echo Yii::t('link', 'Term &amp; Conditions') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/article/index/", array('slug' => !empty($articless[2]) ? $articless[2]->slug : "privacy-10")); ?>"><?php echo Yii::t('link', 'Privacy Policy') ?></a>
                        </li>

                        <li class="link link-flag"><a href="<?php echo $this->createUrl("/web/default/index", array("lang" => "en")); ?>" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/en.png"  alt="Language Flag EN" title="Language Flag EN"/></a></li>
                        <li class="link link-flag"><a href="<?php echo $this->createUrl("/web/default/index", array("lang" => "de")); ?>" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/de.png" alt="Language Flag DE" title="Language Flag DE"/></a></li>

                        <li class="link link_right"><a href="javascript:void(0)"><img id="link_twitter" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/twitter.png" alt="twitter" title="twitter"/></a></li>
                        <li class="link link_right"><a href="javascript:void(0)"><img id="link_google" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/google.png" alt="google" title="google" /></a></li>
                        <li class="link link_right"><a href="#"><img id="link_facebook" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/fb.png" alt="fb" title="fb" /></a></li>

                    </ul>


                </div>
            </nav>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="singUpModal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php
                    $register = new RegisterUsers;
                    $this->renderPartial("//user/_register_pop", array("model" => $register));
                    ?>
                </div>
            </div>
        </div>
        <!-- gallery -->
        <div id="blueimp-gallery" class="blueimp-gallery">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title"></h3>
            <a class="prev">â€¹</a>
            <a class="next">â€º</a>
            <a class="close">Ã—</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->
            <div class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body next"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left prev">
                                <i class="glyphicon glyphicon-chevron-left"></i>
                                Previous
                            </button>
                            <button type="button" class="btn btn-primary next">
                                Next
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/docs-assets/js/holder.js"></script>


        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/js/Kendo/kendo.web.min.js"></script>

        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/thepuzzleadmin.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/thepuzzleadmin.js"></script>

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
                                            function deleteOffer(id) {

                                                if (jQuery("a[href=#recent_offers]").parent().hasClass("active")) {
                                                    if (confirm("Are you sure you want to delete from recent offers")) {
                                                        deleteOfferFunc(id, "recent");
                                                    }
                                                }
                                                else if (jQuery("a[href=#saved_offers]").parent().hasClass("active")) {
                                                    if (confirm("Are you sure you want to delete from saved offers")) {
                                                        deleteOfferFunc(id, "saved");
                                                    }
                                                }
                                            }

                                            function deleteOfferFunc(id, type) {
                                                jQuery("#loading").show();
                                                $.ajax({
                                                    type: "POST",
                                                    url: '<?php echo $this->createUrl('/web/offers/deleteoffertype') ?>',
                                                    data: {offer_id: id, offer_type: type}
                                                }).done(function(resp) {

                                                    jQuery("#loading").hide();
                                                    jQuery("#tab-item-success").html(type + " Offer has been deleted");
                                                    jQuery("#tab-item-success").show();
                                                    setTimeout(function() {
                                                        window.location.reload();
                                                    }, 1300);

                                                });

                                                return false;
                                            }
        </script>
        <div id="map-canvas"></div>
        <script type="text/javascript">
            function scrollUpdateSeachBar() {
                $(window).scroll(function() {
                    var scrolltop = $(window).scrollTop();

                    if (scrolltop >= 40)
                    {
                        jQuery('.search-bar').addClass('nav2-fix-bar');
                    }
                    else
                    {
                        jQuery('.search-bar').removeClass('nav2-fix-bar');
                    }
                });
            }
//            $(document).ready(function() {
//                $(window).scroll(scrollUpdateSeachBar()).trigger("scroll");
//
//            });

            $(function() {
                $("form#search-form input").keypress(function(e) {
                    if (e.keyCode == 13) {
                        $("form#search-form").submit();
                    }
                });

                $('[data-toggle="tooltip"]').tooltip();
            });
            $(document).scroll(function() {  // OR  $(window).scroll(function() {
                $(window).scroll(scrollUpdateSeachBar()).trigger("scroll");
            });

        </script>

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/media/bootstrap-gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/media/bootstrap-gallery/js/bootstrap-image-gallery.js"></script>
        <script type="text/javascript">
            jQuery(function() {
                jQuery('#blueimp-gallery').data('fullScreen', true);
            })
        </script>    
    </body>
</html>
