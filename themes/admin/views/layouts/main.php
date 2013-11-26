<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

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
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <div id="wrap">
            <div id="top">

                <!-- .navbar -->
                <?php require_once 'tpl_navigation.php'; ?>
                <!-- /.navbar -->

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
                            <i class="fa fa-home"></i><?php echo Yii::app()->name ?></h3>
                    </div><!-- /.main-bar -->
                </header>

                <!-- end header.head -->
            </div><!-- /#top -->


            <!-- /#left -->
            <?php echo $content ?>
            <?php require_once 'tpl_footer.php' ?>;
            <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/jquery.min.js"></script>
            <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/style-switcher.js"></script>
            <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/main.min.js"></script>
    </body>
</html>