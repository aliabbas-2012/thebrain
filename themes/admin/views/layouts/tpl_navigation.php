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
            <?php
            if (!Yii::app()->user->isGuest):
                ?>
                <div class="btn-group">
                    <a href="<?php echo $this->createUrl("/site/logout"); ?>" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div><!-- /.topnav -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">

        <!-- .nav -->
        <?php
        $items =
                array(
                    array('label' => 'Blog <span class="caret"></span>',
                        'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                        'visible' => !Yii::app()->user->isGuest,
                        'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                        'items' => array(
                            array('label' => 'Create', 'url' => array('/bspBlog/create'), 'visible' => !Yii::app()->user->isGuest),
                            array('label' => 'List', 'url' => array('bspBlog/index'), 'visible' => !Yii::app()->user->isGuest),
                        )),
                    array('label' => 'Login <span class="caret"></span>',
                        'url' => '#',
                        'visible' => Yii::app()->user->isGuest,
                        'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                        'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                        'items' => array(
                            array('label' => 'Login', 'url' => array('/site/login')),
                            array('label' => 'Forget Password', 'url' => array('/users/forget')),
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
</nav>