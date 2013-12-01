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
                <li> <a href=""><?php echo Yii::app()->user->name ?></a> </li>
                <li>Last Access :
                    <br>
                    <small>
                        <i class="fa fa-calendar"></i>16 Mar 16:32</small>
                </li>
            </ul>
        </div>
    </div>

    <!-- #menu -->
    <?php
    $menue = array(
        0 => array(
            "name" => "Blog",
            "id" => "blog",
            "items" => array(
                array('label' => 'Create', 'url' => '/bspBlog/create'),
                array('label' => 'List All', 'url' => '/bspBlog/index'),
            )),
        1 => array(
            "name" => "Item",
            "id" => "bspItem",
            "items" => array(
                array('label' => 'Create', 'url' => '/bspItem/create'),
                array('label' => 'List All', 'url' => '/bspItem/index'),
            )),
        2 => array(
            "name" => "Faq",
            "id" => "bspFaq",
            "items" => array(
                array('label' => 'Create', 'url' => '/bspFaq/create'),
                array('label' => 'List All', 'url' => '/bspFaq/index'),
            )),
        3 => array(
            "name" => "Article",
            "id" => "bspArticla",
            "items" => array(
                array('label' => 'Create', 'url' => '/bspArticla/create'),
                array('label' => 'List All', 'url' => '/bspArticla/index'),
            )),
        4 => array(
            "name" => "Category",
            "id" => "bspCategory",
            "items" => array(
                array('label' => 'Create', 'url' => '/bspCategory/create'),
                array('label' => 'List All', 'url' => '/bspCategory/index'),
            )),
        5 => array(
            "name" => "Advertising",
            "id" => "bspAdvertising",
            "items" => array(
                array('label' => 'Create', 'url' => '/bspAdvertising/create'),
                array('label' => 'List All', 'url' => '/bspAdvertising/index'),
            )),
        6 => array(
            "name" => "News Feed",
            "id" => "bspNewfeed",
            "items" => array(
                array('label' => 'Create', 'url' => '/bspNewfeed/create'),
                array('label' => 'List All', 'url' => '/bspNewfeed/index'),
            )),
        7 => array(
            "name" => "Mails",
            "id" => "bspMessage",
            "items" => array(
                array('label' => 'Create', 'url' => '/bspMessage/create'),
                array('label' => 'List All', 'url' => '/bspMessage/index'),
            )),
        8 => array(
            "name" => "Order",
            "id" => "bspOrder",
            "items" => array(
                array('label' => 'Create', 'url' => '/bspOrder/create'),
                array('label' => 'List All', 'url' => '/bspOrder/index'),
            )),
    );
    ?>
    <ul id="menu" class="collapse">
        <li class="nav-header">Menu</li>
        <li class="nav-divider"></li>
        <?php
        foreach ($menue as $menu):
            ?>
            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" 
                   data-target="#<?php echo $menu['id']; ?>-nav">
                    <i class="fa fa-<?php echo $menu['id']; ?>"></i><?php echo $menu['name']; ?>
                    <span class="pull-right">
                        <i class="fa fa-angle-left"></i>
                    </span>
                </a>
                <ul class="collapse" id="<?php echo $menu['id']; ?>-nav">
                    <?php
                    foreach ($menu['items'] as $m_item):
                        ?>
                        <li class="">

                            <a href="<?php echo $this->createUrl($m_item['url']); ?>">
                                <i class="fa fa-angle-right"></i>
                                <?php echo $m_item['label']; ?>
                            </a>
                        </li>
                        <?php
                    endforeach;
                    ?>

                </ul>
            </li>
            <?php
        endforeach;
        ?>


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