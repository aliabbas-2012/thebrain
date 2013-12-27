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
        <div id="loading" align="center">
            Please Wait

        </div>
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

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
                            <?php
                            /**
                             * login
                             */
                            if (empty(Yii::app()->user)):
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
                                ?>
                                <a  class="dropdown-toggle" data-toggle="dropdown">
                                    <?php
                                    echo Yii::app()->user->name;
                                    ?>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <?php
                                        echo CHtml::link(Yii::t('link', "View Profile"), $this->createUrl('/web/user/profileview'));
                                        ?>
                                    </li>                                
                                    <li>
                                        <?php
                                        echo CHtml::link(Yii::t('link', "Edit Profile"), $this->createUrl('/web/user/profile'));
                                        ?>
                                    </li>                                
                                    <li>
                                        <?php
                                        echo CHtml::link(Yii::t('link', "Logout "), $this->createUrl('/site/logout'));
                                        ?>
                                    </li>                                
                                </ul>
                            <?php
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
            <?php echo $content; ?>

        </div> <!-- /container -->

        <div class="clear"></div>
        <div id="footer" class="container">
            <nav class="navbar-default">
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

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->baseUrl ?>/css/Kendo/kendo.common.min.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->baseUrl ?>/css/Kendo/kendo.metro.min.css"/>
        <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->baseUrl ?>/js/Kendo/kendo.web.min.js"></script>

        <script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/thepuzzleadmin.js"></script>

    </body>
</html>
