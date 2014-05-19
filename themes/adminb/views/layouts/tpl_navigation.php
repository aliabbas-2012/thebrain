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
                <?php
                echo CHtml::image(Yii::app()->theme->baseUrl . "/img/logo.png", '', array("width" => "120"));
                ?>
                <?php //echo Yii::app()->name ?> <small></small>
            </a>

            <div class="nav-collapse">
                <?php
                $items =
                        array(
                            array('label' => 'Blog <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/bspBlog/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/bspBlog/index'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Users <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/users/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/users/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Facebook Users ', 'url' => array('/users/index',"Users[_is_fb]"=>1), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Item <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/bspItem/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/bspItem/index'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Faq <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/bspFaq/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/bspFaq/index'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Article <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/bspArticla/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/bspArticla/index'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Config', 'url' => array('/configurations/load?m=Misc'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Category <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/bspCategory/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/bspCategory/index'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Advertising <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/bspAdvertising/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/bspAdvertising/index'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'News Feed <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/bspNewfeed/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/bspNewfeed/index'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Mails <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/bspMessage/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/bspMessage/index'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Order <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Create', 'url' => array('/bspOrder/create'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'List', 'url' => array('/bspOrder/index'), 'visible' => !Yii::app()->user->isGuest),
                                )),
                            array('label' => 'Profile <span class="caret"></span>',
                                'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                                'visible' => !Yii::app()->user->isGuest,
                                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Edit Profile', 'url' => array('/users/profile'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'View Profile', 'url' => array('/users/profileview'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Change Password', 'url' => array('/users/changepass'), 'visible' => !Yii::app()->user->isGuest),
                                    array('label' => 'Logout', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
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
                if (Yii::app()->user->isSuperuser) {
                    $items [] = array('label' => 'Configurations <span class="caret"></span>',
                        'url' => '#',
                        'visible' => true,
                        'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                        'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                        'items' => array(
                            array('label' => 'Conf', 'url' => array('/configurations/load', 'm' => "Misc")),
                            array('label' => 'PayPall Settings', 'url' => array('/configurations/payPallSettings', 'id' => "2")),
                            array('label' => 'PayPall Notifications', 'url' => array('/configurations/paymentNotifications')),
                            array('label' => 'Rights', 'url' => array('/rights')),
                    ));
                }
                $this->widget('zii.widgets.CMenu', array(
                    'htmlOptions' => array('class' => 'nav navbar-nav'),
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