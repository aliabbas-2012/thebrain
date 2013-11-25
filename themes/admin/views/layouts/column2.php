<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
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
</div>
<div id="content">
    <div class="outer">
        <div class="inner">
            <?php echo $content; ?>
        </div>
    </div>

</div><!-- content -->
<?php $this->endContent(); ?>