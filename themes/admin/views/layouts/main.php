<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Metis</title>
        <script>
            var base_theme_path = '<?php echo Yii::app()->theme->baseUrl ?>';
        </script>
        <meta name="msapplication-TileColor" content="#5bc0de" />
        <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/Font-Awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/theme.css">
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/modernizr-build.min.js"></script>

    </head>
    <body>
        <div id="wrap">
            <div id="top">

                <!-- .navbar -->
                <nav class="navbar navbar-inverse navbar-static-top">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <header class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/img/logo.png" alt="">
                        </a>
                    </header>
                    <div class="topnav">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <a data-placement="bottom" data-original-title="Show / Hide Sidebar" data-toggle="tooltip" class="btn btn-success btn-sm" id="changeSidebarPos">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
                                    <i class="fa fa-envelope"></i>
                                    <span class="label label-warning">5</span>
                                </a>
                                <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                                    <i class="fa fa-comments"></i>
                                    <span class="label label-danger">4</span>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a data-placement="bottom" data-original-title="Document" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                                    <i class="fa fa-file"></i>
                                </a>
                                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                                    <i class="fa fa-question"></i>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                                    <i class="fa fa-power-off"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- /.topnav -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                        <!-- .nav -->
                        <?php
                        $items =
                                array(
                                    array('label' => 'User Admin <span class="caret"></span>',
                                        'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                        'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                        'items' => array(
                                            array('label' => 'Access Control', 'url' => array('/accessControl/index'), 'visible' => !Yii::app()->user->isGuest),
                                        )),
                                    array('label' => 'Maintenance Admin <span class="caret"></span>',
                                        'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                        'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                        'items' => array(
                                            array('label' => 'Maintenance Group', 'url' => array('/maintainceGroup/index'), 'visible' => !Yii::app()->user->isGuest),
                                            array('label' => 'Maintenance Items', 'url' => array('/maintainceItems/index'), 'visible' => !Yii::app()->user->isGuest),
                                        )),
                                    array('label' => 'Maintenance  <span class="caret"></span>',
                                        'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                        'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                        'items' => array(
                                            array('label' => 'Maintenance Activity', 'url' => array('/maintenanceActivity/index'), 'visible' => !Yii::app()->user->isGuest),
                                        )),
                                    array('label' => 'Reports  <span class="caret"></span>',
                                        'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                        'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                        'items' => array(
                                            array('label' => 'Brand Efficiency', 'url' => array('/report/brand'), 'visible' => !Yii::app()->user->isGuest),
                                            array('label' => 'Item Efficiency By search', 'url' => array('/report/itemEfficiency'), 'visible' => !Yii::app()->user->isGuest),
                                        )),
                                    array('label' => 'My Account <span class="caret"></span>', 
                                        'url' => '#', 
                                        'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 
                                        'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                        'items' => array(
                                            array('label' => 'Change Password', 'url' => array('/users/changepass')),
                                        )),
                                
                        );

                        $this->widget('zii.widgets.CMenu', array(
                            'htmlOptions' => array('class' => 'nav navbar-nav'),
                            'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                            'itemCssClass' => 'item-test',
                            'encodeLabel' => false,
                            'items' => $items,
                        ));
                        ?>
                        <!-- /.nav -->
                    </div>
                </nav><!-- /.navbar -->

                <!-- header.head -->
                <header class="head">
                    <div class="search-bar">
                        <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                            <i class="fa fa-expand"></i>
                        </a>
                        <form class="main-search">
                            <div class="input-group">
                                <input type="text" class="input-small form-control" placeholder="Live Search ...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm text-muted" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <!-- ."main-bar -->
                    <div class="main-bar">
                        <h3>
                            <i class="fa fa-home"></i>Metis</h3>
                    </div><!-- /.main-bar -->
                </header>

                <!-- end header.head -->
            </div><!-- /#top -->
            <div id="left">
                <div class="media user-media">
                    <a class="user-link" href="">
                        <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/img/user.gif">
                        <span class="label label-danger user-label">16</span>
                    </a>
                    <div class="media-body">
                        <h5 class="media-heading">Archie</h5>
                        <ul class="list-unstyled user-info">
                            <li> <a href="">Administrator</a> </li>
                            <li>Last Access :
                                <br>
                                <small>
                                    <i class="fa fa-calendar"></i>16 Mar 16:32</small>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- #menu -->
                <ul id="menu" class="collapse">
                    <li class="nav-header">Menu</li>
                    <li class="nav-divider"></li>
                    <li class="panel ">
                        <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#dashboard-nav">
                            <i class="fa fa-dashboard"></i>Dashboard
                            <span class="pull-right">
                                <i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <ul class="collapse" id="dashboard-nav">
                            <li class="">
                                <a href="dashboard.html">
                                    <i class="fa fa-angle-right"></i>
                                    Default Style</a>
                            </li>
                            <li class="">
                                <a href="alterne.html">
                                    <i class="fa fa-angle-right"></i>Alternative Style</a>
                            </li>
                        </ul>
                    </li>
                    <li class="panel ">
                        <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                            <i class="fa fa-tasks"></i>Components
                            <span class="pull-right">
                                <i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <ul class="collapse" id="component-nav">
                            <li class="">
                                <a href="icon.html">
                                    <i class="fa fa-angle-right"></i>Icon</a>
                            </li>
                            <li class="">
                                <a href="button.html">
                                    <i class="fa fa-angle-right"></i>
                                    Button</a>
                            </li>
                            <li class="">
                                <a href="progress.html">
                                    <i class="fa fa-angle-right"></i>
                                    Progress</a>
                            </li>
                            <li class="">
                                <a href="pricing.html">
                                    <i class="fa fa-credit-card"></i>Pricing Table</a>
                            </li>
                            <li class="">
                                <a href="bgimage.html">
                                    <i class="fa fa-angle-right"></i>Bg Image</a>
                            </li>
                            <li class="">
                                <a href="bgcolor.html">
                                    <i class="fa fa-angle-right"></i>Bg Color</a>
                            </li>
                        </ul>
                    </li>
                    <li class="panel ">
                        <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                            <i class="fa fa-pencil"></i>Forms
                            <span class="pull-right">
                                <i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <ul class="collapse" id="form-nav">
                            <li class="">
                                <a href="form-general.html">
                                    <i class="fa fa-angle-right"></i>General</a>
                            </li>
                            <li class="">
                                <a href="form-validation.html">
                                    <i class="fa fa-angle-right"></i>Validation</a>
                            </li>
                            <li class="">
                                <a href="form-wysiwyg.html">
                                    <i class="fa fa-angle-right"></i>WYSIWYG</a>
                            </li>
                            <li class="">
                                <a href="form-wizard.html">
                                    <i class="fa fa-angle-right"></i>Wizard &amp; File Upload</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fa fa-table"></i>Tables</a>
                    </li>
                    <li>
                        <a href="file.html">
                            <i class="fa fa-file"></i>File Manager</a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="fa fa-font"></i>Typography</a>
                    </li>
                    <li>
                        <a href="maps.html">
                            <i class="fa fa-map-marker"></i>Maps</a>
                    </li>
                    <li>
                        <a href="chart.html">
                            <i class="fa fa fa-bar-chart-o"></i>Charts</a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i>
                            Calendar</a>
                    </li>
                    <li class="panel">
                        <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                            <i class="fa fa-exclamation-triangle"></i>Error Pages
                            <span class="pull-right">
                                <i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <ul class="collapse" id="error-nav">
                            <li>
                                <a href="403.html">
                                    <i class="fa fa-angle-right"></i>403</a>
                            </li>
                            <li>
                                <a href="404.html">
                                    <i class="fa fa-angle-right"></i>404</a>
                            </li>
                            <li>
                                <a href="405.html">
                                    <i class="fa fa-angle-right"></i>405</a>
                            </li>
                            <li>
                                <a href="500.html">
                                    <i class="fa fa-angle-right"></i>500</a>
                            </li>
                            <li>
                                <a href="503.html">
                                    <i class="fa fa-angle-right"></i>503</a>
                            </li>
                            <li>
                                <a href="offline.html">
                                    <i class="fa fa-angle-right"></i>offline</a>
                            </li>
                            <li>
                                <a href="countdown.html">
                                    <i class="fa fa-angle-right"></i>Under Construction</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="grid.html">
                            <i class="fa fa-columns"></i>Grid</a>
                    </li>
                    <li>
                        <a href="blank.html">
                            <i class="fa fa-square-o"></i>Blank Page
                        </a>
                    </li>
                    <li class="nav-divider"></li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-in"></i>Login Page</a>
                    </li>
                </ul><!-- /#menu -->
            </div><!-- /#left -->
            <div id="content">
                <div class="outer">
                    <div class="inner">

                    </div>

                    <!-- end .outer -->
                </div>

                <!-- end #content -->
            </div><!-- /#wrap -->
            <div id="footer">
                <p>2013 &copy; Metis Admin</p>
            </div>

            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal --><!-- /#helpModal -->
            <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/jquery.min.js"></script>
            <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/style-switcher.js"></script>
            <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/main.min.js"></script>
    </body>
</html>