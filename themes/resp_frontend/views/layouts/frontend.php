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
        <div class="navbar navbar-inverse" role="navigation">
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
                            echo CHtml::link("How It Works", $this->createUrl("/web/default/article", array("slug" => !empty($articless[0]) ? $articless[0]->slug : "how-it-works-8")));
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
        <div id="puzzle_slider">
            <?php
            if ($this->id == "default" && $this->action->id == "index") {
                $this->renderPartial("//default/_slider");
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
                            <a href="<?php echo $this->createUrl("/web/default/article/", array('slug' => !empty($articless[0]) ? $articless[0]->slug : "how-it-works-9")); ?>"><?php echo Yii::t('link', 'How it works') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/blog/index"); ?>"><?php echo Yii::t('link', 'Blog') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/faq/index"); ?>"><?php echo Yii::t('link', 'FAQ') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/default/article/", array('slug' => !empty($articless[1]) ? $articless[1]->slug : "terms_condition-9")); ?>"><?php echo Yii::t('link', 'Term &amp; Conditions') ?></a>
                        </li>
                        <li class="link">
                            <a href="<?php echo $this->createUrl("/web/default/article/", array('slug' => !empty($articless[2]) ? $articless[2]->slug : "privacy-10")); ?>"><?php echo Yii::t('link', 'Privacy Policy') ?></a>
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

    </body>
</html>
