<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="<?php echo $this->createUrl("/site/index"); ?>">
                <?php echo Yii::app()->name ?> <small></small>
            </a>

            <div class="nav-collapse">
                <?php
                $items =
                        array(
                            array('label' => 'User Admin <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Access Control', 'url' => array('/accessControl/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'User Groups', 'url' => array('/userGroups/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Users', 'url' => array('/users/index'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Maintenance Admin <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Maintenance Group', 'url' => array('/maintainceGroup/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Maintenance Items', 'url' => array('/maintainceItems/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Maintenance Brands', 'url' => array('/maintainceBrands/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Maintenance Types', 'url' => array('/maintenanceTypes/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Location', 'url' => array('/location/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Supervisors', 'url' => array('/supervisors/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Technicians', 'url' => array('/technicians/index'), 'visible' => !Yii::app()->user->isGuest),
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
                                    array('label' => 'Item Efficiency ', 'url' => array('/report/item'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            /*
                              array('label' => 'Graphs & Charts', 'url' => array('/site/page', 'view' => 'graphs')),
                              array('label' => 'Forms', 'url' => array('/site/page', 'view' => 'forms')),
                              array('label' => 'Tables', 'url' => array('/site/page', 'view' => 'tables')),
                              array('label' => 'Interface', 'url' => array('/site/page', 'view' => 'interface')),
                              array('label' => 'Typography', 'url' => array('/site/page', 'view' => 'typography')),


                              /* array('label'=>'Gii generated', 'url'=>array('customer/index')), */
                            array('label' => 'My Account <span class="caret"></span>', 'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Change Password', 'url' => array('/users/changepass')),
                                    array('label' => 'Edit Profile', 'url' => array('/users/profile')),
                                    array('label' => 'View Profile', 'url' => array('/users/profileview')),
                                )),
                            //array('label' => 'Configuration', 'url' => array('/configurations/index')),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                );
                if (Yii::app()->user->isGuest) {
                    $items = array(
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                    );
                }
                $this->widget('zii.widgets.CMenu', array(
                    'htmlOptions' => array('class' => 'pull-right nav'),
                    'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                    'itemCssClass' => 'item-test',
                    'encodeLabel' => false,
                    'items' => $items,
                ));
                ?>
            </div>
        </div>
    </div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

            <div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
            </div>
            <form class="navbar-search pull-right" action="">

                <input type="text" class="search-query span2" placeholder="Search">

            </form>
        </div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->