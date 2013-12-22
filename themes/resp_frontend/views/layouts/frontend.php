<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl ?>/docs-assets/ico/favicon.png">

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

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
    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php
                    //CVarDumper::dump(Yii::app()->homeUrl,10,true);
                    //die;
                    ?>
                    <a class="navbar-brand" href="<?php echo Yii::app()->homeUrl[0]; ?>">
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/logo.png", '', array("width" => "200"));
                        ?>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <?php
                    $criteria = new CDbCriteria();
                    $criteria->select = "ID,article_name,article_name_de,custom_url,custom_url_de";
                    $articless = CHtml::listData(BspArticla::model()->findAll($criteria), "ID", "slug");

                    $how_works = !empty($articless[8]) ? "8-" . $articless[8] : "8-how-it-works";

                    $term_cond = !empty($articless[9]) ? "9-" . $articless[9] : "9-how-it-works";

                    $privacy_pol = !empty($articless[10]) ? "10-" . $articless[10] : "10-how-it-works";
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
                                    echo CHtml::link(Yii::t('link', "Dashboard"), '');
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
                                    echo CHtml::link(Yii::t('link', "View All Messages"), '');
                                    ?>
                                </li>                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a  class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a >Action</a></li>                                
                            </ul>
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
                            echo CHtml::link("How It Works", $this->createUrl("/web/blog/index"));
                            ?>                        
                        </li>


                    </ul>
                </div><!--/.nav-collapse -->
            </div>
            <div class="container">

                <div class="navbar-collapse collapse">
                    <?php
                    $model = new OfferSearch();
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'users-form',
                        'enableAjaxValidation' => false,
                        'htmlOptions' => array(
                            'class' => 'form-horizontal'
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
                                    $link = Yii::app()->request->baseUrl . '/category/' . $da->id . '-' . MyHelper::convert_no_sign($da->name);
                                    $cssClass = "";
                                    if ($da->name != "Services" && $da->name != "Rentals") {
                                        $cssClass = "clearleft";
                                    }
                                    echo '<li id="menu-item-' . $i . '" class=' . $cssClass . '><a href="javascript:void(0);">' . $da->name . '</a>';


                                    echo CHtml::openTag("ul", array("class" => ""));
                                    $subcate = BspCategory::model()->findAll(array('condition' => 'parent_id=' . $da->id));
                                    foreach ($subcate as $sub) {
                                        $slink = Yii::app()->request->baseUrl . '/category/' . $sub->id . '-' . MyHelper::convert_no_sign($sub->name);
                                        echo '<li>';
                                        echo '<a href="javascript:void(0);">' . $sub->name . '</a>';
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


                    </ul>
                    <?php
                    $this->endWidget();
                    ?>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container theme-showcase">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
            </div>



            <div class="page-header">
                <h1>Buttons</h1>
            </div>
            <p>
                <button type="button" class="btn btn-lg btn-default">Default</button>
                <button type="button" class="btn btn-lg btn-primary">Primary</button>
                <button type="button" class="btn btn-lg btn-success">Success</button>
                <button type="button" class="btn btn-lg btn-info">Info</button>
                <button type="button" class="btn btn-lg btn-warning">Warning</button>
                <button type="button" class="btn btn-lg btn-danger">Danger</button>
                <button type="button" class="btn btn-lg btn-link">Link</button>
            </p>
            <p>
                <button type="button" class="btn btn-default">Default</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-link">Link</button>
            </p>
            <p>
                <button type="button" class="btn btn-sm btn-default">Default</button>
                <button type="button" class="btn btn-sm btn-primary">Primary</button>
                <button type="button" class="btn btn-sm btn-success">Success</button>
                <button type="button" class="btn btn-sm btn-info">Info</button>
                <button type="button" class="btn btn-sm btn-warning">Warning</button>
                <button type="button" class="btn btn-sm btn-danger">Danger</button>
                <button type="button" class="btn btn-sm btn-link">Link</button>
            </p>
            <p>
                <button type="button" class="btn btn-xs btn-default">Default</button>
                <button type="button" class="btn btn-xs btn-primary">Primary</button>
                <button type="button" class="btn btn-xs btn-success">Success</button>
                <button type="button" class="btn btn-xs btn-info">Info</button>
                <button type="button" class="btn btn-xs btn-warning">Warning</button>
                <button type="button" class="btn btn-xs btn-danger">Danger</button>
                <button type="button" class="btn btn-xs btn-link">Link</button>
            </p>



            <div class="page-header">
                <h1>Thumbnails</h1>
            </div>
            <img data-src="holder.js/200x200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">



            <div class="page-header">
                <h1>Dropdown menus</h1>
            </div>
            <div class="dropdown theme-dropdown clearfix">
                <a id="dropdownMenu1" href="#" role="button" class="sr-only dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li class="active" role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
            </div>




            <div class="page-header">
                <h1>Navbars</h1>
            </div>

            <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Project name</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>

            <div class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Project name</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>



            <div class="page-header">
                <h1>Alerts</h1>
            </div>
            <div class="alert alert-success">
                <strong>Well done!</strong> You successfully read this important alert message.
            </div>
            <div class="alert alert-info">
                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
            </div>
            <div class="alert alert-warning">
                <strong>Warning!</strong> Best check yo self, you're not looking too good.
            </div>
            <div class="alert alert-danger">
                <strong>Oh snap!</strong> Change a few things up and try submitting again.
            </div>



            <div class="page-header">
                <h1>Progress bars</h1>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
                <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
                <div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span></div>
            </div>



            <div class="page-header">
                <h1>List groups</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div><!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                    </div>
                </div><!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        </a>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>



            <div class="page-header">
                <h1>Panels</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div><!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div><!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>



            <div class="page-header">
                <h1>Wells</h1>
            </div>
            <div class="well">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>


        </div> <!-- /container -->

        <div class="clear"></div>
        <div id="footer" class="container">
            <nav class="navbar navbar-default navbar-fixed-bottom">
                <div class="navbar-inner navbar-content-center">
                    <ul class="footer-contain">
                        <?php
                        $criteria = new CDbCriteria();
                        $criteria->select = "ID,article_name,article_name_de,custom_url,custom_url_de";
                        $articless = CHtml::listData(BspArticla::model()->findAll($criteria), "ID", "slug");

                        $how_works = !empty($articless[8]) ? "8-" . $articless[8] : "8-how-it-works";

                        $term_cond = !empty($articless[9]) ? "9-" . $articless[9] : "9-how-it-works";

                        $privacy_pol = !empty($articless[10]) ? "10-" . $articless[10] : "10-how-it-works";
                        ?>	
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/loadArtical/" . $how_works); ?>"><?php echo Yii::t('link', 'How it works') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/blog/"); ?>"><?php echo Yii::t('link', 'Blog') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/faq/"); ?>"><?php echo Yii::t('link', 'FAQ') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/loadArtical/" . $term_cond); ?>"><?php echo Yii::t('link', 'Term &amp; Conditions') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/loadArtical/" . $privacy_pol); ?>"><?php echo Yii::t('link', 'Privacy Policy') ?></a>
                        </li>
                        <li class="link"><a href="javascript:void(0)" onclick="window.location = '<?php echo "http://" . "en." . "thepuzzzle.com/" . Yii::app()->request->getPathInfo(); ?>'"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/en.png"  alt="Language Flag EN"/></a></li>
                        <li class="link"><a href="javascript:void(0)" onclick="window.location = '<?php echo "http://" . "de." . "thepuzzzle.com/" . Yii::app()->request->getPathInfo(); ?>'"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/de.png" alt="Language Flag DE"/></a></li>
                        <li class="link link_right"><a href="#"><img id="link_twitter" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/twitter.png" alt="twitter"/></a></li>
                        <li class="link link_right"><a href="#"><img id="link_google" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/google.png" alt="google"/></a></li>
                        <li class="link link_right"><a href="#"><img id="link_facebook" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/fb.png" alt="fb"/></a></li>

                    </ul>


                </div>
            </nav>
        </div>



        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/docs-assets/js/holder.js"></script>
    </body>
</html>
