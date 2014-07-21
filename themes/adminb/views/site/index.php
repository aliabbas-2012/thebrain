<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl;
?>

<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery.easy-pie-chart.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseUrl ?>/css/piechart.css"/>
<div class="row-fluid">
    <div class="span3 ">
        <div class="stat-block">
            <?php
            $command = Yii::app()->db->createCommand('SELECT amount FROM bsp_order WHERE (WEEK(date_order) = WEEK(current_date)) ');
            $data = $command->queryColumn();
            ?>
            <ul>
                <li class="stat-graph inlinebar" id="weekly-visit"><?php echo!empty($data) ? implode(",", $data) : 0 ?></li>
                <li class="stat-count"><span>$<?php echo!empty($data) ? array_sum($data) : 0 ?></span><span>Week Orders</span></li>
                <li class="stat-percent"><span class="text-success stat-percent"><?php echo count($data); ?></span></li>
            </ul>
        </div>
    </div>
    <div class="span3 ">
        <div class="stat-block">
            <?php
            $command = Yii::app()->db->createCommand('SELECT amount FROM bsp_order WHERE (MONTH(date_order) = MONTH(current_date)) ');
            $data = $command->queryColumn();
            ?>
            <ul>
                <li class="stat-graph inlinebar" id="new-visits"><?php echo!empty($data) ? implode(",", $data) : 0 ?></li>
                <li class="stat-count"><span>$<?php echo!empty($data) ? array_sum($data) : 0 ?></span><span>Month Orders</span></li>
                <li class="stat-percent"><span class="text-error stat-percent"><?php echo count($data); ?></span></li>
            </ul>
        </div>
    </div>
    <div class="span3 ">
        <div class="stat-block">
            <?php
            $command = Yii::app()->db->createCommand('SELECT amount FROM bsp_order WHERE (YEAR(date_order) = YEAR(current_date)) ');
            $data = $command->queryColumn();
            $mnth_inc = 0;
            ?>
            <ul>
                <li class="stat-graph inlinebar" id="unique-visits"><?php echo!empty($data) ? implode(",", $data) : 0 ?></li>
                <li class="stat-count"><span>$<?php echo!empty($data) ? $mnth_inc = array_sum($data) : 0 ?></span><span>Year</span></li>
                <li class="stat-percent"><span class="text-success stat-percent"><?php echo count($data); ?></span></li>
            </ul>
        </div>
    </div>
    <div class="span3 ">
        <div class="stat-block">
            <ul>
                <?php
                $command = Yii::app()->db->createCommand('SELECT amount FROM bsp_order WHERE  date_order > date_finish OR date_finish IS NULL ');
                $data = $command->queryColumn();
                ?>
                <li class="stat-graph inlinebar" id=""><?php echo!empty($data) ? implode(",", $data) : 0 ?></li>
                <li class="stat-count"><span>$<?php echo!empty($data) ? array_sum($data) : 0 ?></span><span>Overdue</span></li>
                <li class="stat-percent"><span><span class="text-success stat-percent"><?php echo count($data); ?></span></li>
            </ul>
        </div>
    </div>
</div>
<div class="row-fluid">
    <?php
    $sql = "SELECT total_items,label " .
            "FROM ( " .
            "SELECT " .
            "count(id) as  total_items,'Total' as label " .
            "FROM bsp_item " .
            "UNION ALL " .
            "SELECT " .
            "count(id) as  total_items,'Fix Price' as label " .
            "FROM bsp_item WHERE bsp_item.per_price = 1 " .
            "UNION ALL " .
            "SELECT " .
            "count(id) as  total_items,'Price per hour' as label " .
            "FROM bsp_item WHERE bsp_item.per_price = 2 " .
            "UNION ALL " .
            "SELECT " .
            "count(id) as  total_items,'Price per day' as label " .
            "FROM bsp_item WHERE bsp_item.per_price = 3 " .
            "UNION ALL " .
            "SELECT " .
            "count(id) as  total_items,'Price per week' as label " .
            "FROM bsp_item WHERE bsp_item.per_price = 4 " .
            "UNION ALL " .
            "SELECT " .
            "count(id) as  total_items,'Price per month' as label " .
            "FROM bsp_item WHERE bsp_item.per_price = 5 " .
            "UNION ALL " .
            "SELECT " .
            "count(id) as  total_items,'None' as label " .
            "FROM bsp_item WHERE bsp_item.per_price IS NULL " .
            ") " .
            "item_data";
    $command = Yii::app()->db->createCommand($sql);
    $data = $command->queryAll();
    $data_graph = array(
        0 => array(
            "data" => ($data[1]['total_items'] * 100) / $data[0]['total_items'],
            "label" => $data[1]['label'],
            "color" => "#B22222",
        ),
        1 => array(
            "data" => ($data[2]['total_items'] * 100) / $data[0]['total_items'],
            "label" => $data[2]['label'],
            "color" => "#0000CD",
        ),
        2 => array(
            "data" => ($data[3]['total_items'] * 100) / $data[0]['total_items'],
            "label" => $data[3]['label'],
            "color" => "#00FFFF",
        ),
        3 => array(
            "data" => ($data[4]['total_items'] * 100) / $data[0]['total_items'],
            "label" => $data[4]['label'],
            "color" => "#8A2BE2",
        ),
        4 => array(
            "data" => ($data[5]['total_items'] * 100) / $data[0]['total_items'],
            "label" => $data[5]['label'],
            "color" => "#D2691E",
        ),
        5 => array(
            "data" => ($data[6]['total_items'] * 100) / $data[0]['total_items'],
            "label" => $data[6]['label'],
            "color" => "#006400",
        ),
    );
    ?>
    <div class="span2">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-th-list"></span> Fix Price',
            'titleCssClass' => ''
        ));
        ?>
        <div class="chart" data-percent="<?php echo $data_graph[0]['data']; ?>"><?php echo $data_graph[0]['data']; ?>%</div>
        <div class="chart-bottom-heading"><span class="label label-info">Fix Price</span>
        </div>
        <?php
        $this->endWidget();
        ?>
    </div>
    <div class="span2">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-th-list"></span> Price per hour',
            'titleCssClass' => ''
        ));
        ?>
        <div class="chart" data-percent="<?php echo $data_graph[1]['data']; ?>"><?php echo $data_graph[1]['data']; ?>%</div>
        <div class="chart-bottom-heading"><span class="label label-info">Price per hour</span>
        </div>
        <?php
        $this->endWidget();
        ?>
    </div>
    <div class="span2">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-th-list"></span> Price per day',
            'titleCssClass' => ''
        ));
        ?>
        <div class="chart" data-percent="<?php echo $data_graph[2]['data']; ?>"><?php echo $data_graph[2]['data']; ?>%</div>
        <div class="chart-bottom-heading"><span class="label label-info">Price per day</span>
        </div>
        <?php
        $this->endWidget();
        ?>
    </div>
    <div class="span2">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-th-list"></span> Price per week',
            'titleCssClass' => ''
        ));
        ?>
        <div class="chart" data-percent="<?php echo $data_graph[3]['data']; ?>"><?php echo $data_graph[3]['data']; ?>%</div>
        <div class="chart-bottom-heading"><span class="label label-info">Price per week</span>
        </div>
        <?php
        $this->endWidget();
        ?>
    </div>
    <div class="span2">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-th-list"></span> Price per month',
            'titleCssClass' => ''
        ));
        ?>
        <div class="chart" data-percent="<?php echo $data_graph[4]['data']; ?>"><?php echo $data_graph[4]['data']; ?>%</div>
        <div class="chart-bottom-heading"><span class="label label-info">Price per month</span>
        </div>
        <?php
        $this->endWidget();
        ?>
    </div>
    <div class="span2">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-th-list"></span> None',
            'titleCssClass' => ''
        ));
        ?>
        <div class="chart" data-percent="<?php echo $data_graph[5]['data']; ?>"><?php echo $data_graph[5]['data']; ?>%</div>
        <div class="chart-bottom-heading"><span class="label label-info">None</span>
        </div>
        <?php
        $this->endWidget();
        ?>
    </div>
</div>    
<div class="row-fluid">

    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-th-list"></span> Offers Pie Chart',
            'titleCssClass' => ''
        ));

        unset($data);
        ?>
        <script>
            var pie_data_graph = <?php echo CJSON::encode($data_graph); ?>;
        </script>    
        <div  class="pieStats"  style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>

        <?php $this->endWidget(); ?>
    </div>

    <div class="span3">
        <div class="summary">
            <ul>
                <li>
                    <?php
                    $command = Yii::app()->db->createCommand('SELECT count(id) as  total_user FROM bsp_user WHERE type ="non-admin" ');
                    $data = $command->queryScalar();
                    ?>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/group.png" width="36" height="36" alt="Active Members">
                    </span>
                    <span class="summary-number"><?php echo $data ?></span>
                    <span class="summary-title"> Total Active Members</span>
                </li>
                <li>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/credit.png" width="36" height="36" alt="Monthly Income">
                    </span>
                    <span class="summary-number">$<?php echo $mnth_inc / 12; ?></span>
                    <span class="summary-title"> Monthly Income</span>
                </li>
                <li>
                    <?php
                    $command = Yii::app()->db->createCommand('SELECT count(id) as  total FROM bsp_item WHERE group_id ="9" ');
                    $data = $command->queryScalar();
                    ?>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/page_white_edit.png" width="36" height="36" alt="Open Invoices">
                    </span>
                    <span class="summary-number"><?php echo $data ?></span>
                    <span class="summary-title"> Services Offers</span>
                </li>
                <li>
                    <?php
                    $command = Yii::app()->db->createCommand('SELECT count(id) as  total FROM bsp_item WHERE group_id ="10" ');
                    $data = $command->queryScalar();
                    ?>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/page_white_excel.png" width="36" height="36" alt="Open Quotes<">
                    </span>
                    <span class="summary-number"><?php echo $data ?></span>
                    <span class="summary-title"> Rental Offers</span>
                </li>

                <li>
                    <?php
                    $command = Yii::app()->db->createCommand('SELECT count(id) as  total FROM bsp_item WHERE WEEK(create_time) = WEEK(current_date)');
                    $data = $command->queryScalar();
                    ?>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/folder_page.png" width="36" height="36" alt="Recent Conversions">
                    </span>
                    <span class="summary-number"><?php echo $data ?></span>
                    <span class="summary-title"> Recent Offers</span>
                </li>

            </ul>
        </div>
    </div>
    <div class="span3">
        <div class="summary" style="float:left;width: 50%">
            <ul>
                <li>
                    <?php
                    $command = Yii::app()->db->createCommand('SELECT count(id) as  total_user FROM bsp_user WHERE fbmail IS NULL AND type ="non-admin" ');
                    $data = $command->queryScalar();
                    ?>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/group.png" width="36" height="36" alt="Active Members">
                    </span>
                    <span class="summary-number"><?php echo $data ?></span>
                    <span class="summary-title"> Register On website</span>
                </li>
                <li>
                    <?php
                    $command = Yii::app()->db->createCommand('SELECT count(id) as  total_user FROM bsp_user WHERE fbmail IS NOT NULL AND type ="non-admin" ');
                    $data = $command->queryScalar();
                    ?>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/group.png" width="36" height="36" alt="Active Members">
                    </span>
                    <span class="summary-number"><?php echo $data ?></span>
                    <span class="summary-title"> Login Using Face Book</span>
                </li>
                <li>
                    <?php
                    $command = Yii::app()->db->createCommand('SELECT count(id) as  total_user FROM bsp_user WHERE  type ="admin" ');
                    $data = $command->queryScalar();
                    ?>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/group.png" width="36" height="36" alt="Active Members">
                    </span>
                    <span class="summary-number"><?php echo $data ?></span>
                    <span class="summary-title">Admin Account</span>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="row-fluid">
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Last Five Offers',
            'titleCssClass' => ''
        ));


        $gridDataProvider = new CActiveDataProvider('BspItem', array(
            'sort' => array(
                'defaultOrder' => array(
                    'id' => 'DESC',
                ),
            ), 'totalItemCount' => 5,
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));
        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            //'template' => "{items}",
            'summaryText' => '',
            'columns' => array(
                array(
                    'name' => 'id',
                    'value' => 'CHtml::link($data->id,Yii::app()->controller->createUrl("/bspItem/view", array("id" => $data->id)))',
                    'type' => 'raw',
                ),
                array('name' => 'name', 'value' => 'substr($data->name,1,8)'),
                array('name' => 'group_id', 'value' => '!empty($data->group) ? $data->group->name : ""'),
                array('name' => 'category_id', 'value' => '!empty($data->category) ? $data->category->name : ""'),
                //array('name' => 'sub_category_id', 'value' => '!empty($data->sub_category) ? $data->sub_category->name : ""'),
                array('name' => 'per_price', 'value' => '!empty($data->_per_price_options[$data->per_price]) ? $data->_per_price_options[$data->per_price] : ""'),
            ),
        ));

        $this->endWidget();
        ?>
    </div><!--/span-->
    <div class="span6">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'First Five Offers',
            'titleCssClass' => ''
        ));


        $gridDataProvider = new CActiveDataProvider('BspItem', array(
            'sort' => array(
                'defaultOrder' => 'id ASC'
            ), 'totalItemCount' => 5,
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));
        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            //'template' => "{items}",
            'summaryText' => '',
            'columns' => array(
                array(
                    'name' => 'id',
                    'value' => 'CHtml::link($data->id,Yii::app()->controller->createUrl("/bspItem/view", array("id" => $data->id)))',
                    'type' => 'raw',
                ),
                array('name' => 'name', 'value' => 'substr($data->name,1,8)'),
                array('name' => 'group_id', 'value' => '!empty($data->group) ? $data->group->name : ""'),
                array('name' => 'category_id', 'value' => '!empty($data->category) ? $data->category->name : ""'),
                //array('name' => 'sub_category_id', 'value' => '!empty($data->sub_category) ? $data->sub_category->name : ""'),
                array('name' => 'per_price', 'value' => '!empty($data->_per_price_options[$data->per_price]) ? $data->_per_price_options[$data->per_price] : ""'),
            ),
        ));
        $this->endWidget();
        ?>

    </div><!--/span-->
</div><!--/row-->
<div class="row-fluid">

    <div class="span6">
        <?php
        $gridDataProvider = new CArrayDataProvider(array(
            array('id' => 1, 'Total Post' => BspBlog::model()->count()),
        ));
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Blog',
            'titleCssClass' => ''
        ));

        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => array(
                array('name' => 'Total Post', 'header' => 'Total Post'),
            ),
        ));
        $this->endWidget();
        ?>
    </div><!--/span-->
    <div class="span6">
        <?php
        $sql = "SELECT total_items,label " .
                "FROM ( " .
                "SELECT " .
                "count(id) as  total_items,'Total' as label " .
                "FROM bsp_item " .
                "UNION ALL " .
                "SELECT " .
                "count(bsp_item.id) as  total_items,'Total Visits' as label " .
                "FROM bsp_item " .
                "INNER JOIN bsp_item_log " .
                "ON bsp_item_log.item_id = bsp_item.id " .
                "UNION ALL " .
                "SELECT " .
                "count(bsp_item.id) as  total_items,'Total Servies' as label " .
                "FROM bsp_item WHERE bsp_item.group_id = 9 " .
                "UNION ALL " .
                "SELECT " .
                "count(bsp_item.id) as  total_items,'Total Servies Visits' as label " .
                "FROM bsp_item  " .
                "INNER JOIN bsp_item_log " .
                "ON bsp_item_log.item_id = bsp_item.id " .
                "WHERE bsp_item.group_id = 9 " .
                "UNION ALL " .
                "SELECT " .
                "count(bsp_item.id) as  total_items,'Total Rental' as label " .
                "FROM bsp_item WHERE bsp_item.group_id = 10 " .
                "UNION ALL " .
                "SELECT " .
                "count(bsp_item.id) as  total_items,'Total Rental Visits' as label " .
                "FROM bsp_item " .
                "INNER JOIN bsp_item_log " .
                "ON bsp_item_log.item_id = bsp_item.id " .
                "WHERE bsp_item.group_id = 10 " .
                "UNION ALL " .
                "SELECT " .
                "count(bsp_faq.ID) as  total_items,'Total Faq' as label " .
                "FROM bsp_faq " .
                "UNION ALL " .
                "SELECT " .
                "count(bsp_articla.ID) as  total_items,'Total Artical' as label " .
                "FROM bsp_articla " .
                "UNION ALL " .
                "SELECT " .
                "count(bsp_advertising.ID) as  total_items,'Total Advertisng' as label " .
                "FROM bsp_advertising " .
                "UNION ALL " .
                "SELECT " .
                "count(bsp_comment.id) as  total_items,'Total Comments' as label " .
                "FROM bsp_comment " .
                "UNION ALL " .
                "SELECT " .
                "IFNULL(SUM(bsp_item_price_offer_hours.price),0) as  total_items,'Total Price' as label " .
                "FROM bsp_item_price_offer_hours " .
                "UNION ALL " .
                "SELECT " .
                "IFNULL(SUM(bsp_item_price_offer_day.price),0) as  total_items,'Total Price' as label " .
                "FROM bsp_item_price_offer_day " .
                "UNION ALL " .
                "SELECT " .
                "IFNULL(SUM(bsp_item_price_offer_week.price),0) as  total_items,'Total Price' as label " .
                "FROM bsp_item_price_offer_week " .
                "UNION ALL " .
                "SELECT " .
                "IFNULL(SUM(bsp_item_price_offer_month.price),0) as  total_items,'Total Price' as label " .
                "FROM bsp_item_price_offer_month " .
                ") " .
                "item_data";
        
        $command = Yii::app()->db->createCommand($sql);
        $data = $command->queryAll();
        $gridDataProvider = new CArrayDataProvider(array(
            array('id' => 1, 'Total Offers' => $data[0]['total_items'], 'Total Visits' => $data[1]['total_items']),
        ));
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Offers',
            'titleCssClass' => ''
        ));

        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => array(
                array('name' => 'Total Offers',),
                array('name' => 'Total Visits',),
            ),
        ));
        $this->endWidget();
        ?>
    </div><!--/span-->
</div>
<div class="row-fluid">

    <div class="span6">
        <?php
        $gridDataProvider = new CArrayDataProvider(array(
            array('id' => 1, 'Rental Offers' => $data[4]['total_items'], "Total Visits" => $data[5]['total_items']),
        ));
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Rental Offers',
            'titleCssClass' => ''
        ));

        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => array(
                array('name' => 'Rental Offers',),
                array('name' => 'Total Visits',),
            ),
        ));
        $this->endWidget();
        ?>
    </div><!--/span-->
    <div class="span6">
        <?php
        $gridDataProvider = new CArrayDataProvider(array(
            array('id' => 1, 'Service Offers' => $data[2]['total_items'], "Total Visits" => $data[3]['total_items']),
        ));
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Service Offers',
            'titleCssClass' => ''
        ));

        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => array(
                array('name' => 'Service Offers',),
                array('name' => 'Total Visits',),
            ),
        ));
        $this->endWidget();
        ?>
    </div><!--/span-->
</div>
<!-- other information -->
<div class="row-fluid">

    <div class="span6">
<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id' => 1, 'Total question & answer' => $data[6]['total_items']),
        ));
$this->beginWidget('zii.widgets.CPortlet', array(
    'title' => 'FAQ',
    'titleCssClass' => ''
));

$this->widget('zii.widgets.grid.CGridView', array(
    /* 'type'=>'striped bordered condensed', */
    'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
    'dataProvider' => $gridDataProvider,
    'template' => "{items}",
    'columns' => array(
        array('name' => 'Total question & answer',),
    ),
));
$this->endWidget();
?>
    </div><!--/span-->
    <div class="span6">
        <?php
        $gridDataProvider = new CArrayDataProvider(array(
            array('id' => 1, 'Total artical' => $data[7]['total_items']),
        ));
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Artical',
            'titleCssClass' => ''
        ));

        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => array(
                array('name' => 'Total artical',),
            ),
        ));
        $this->endWidget();
        ?>
    </div><!--/span-->
</div>
<div class="row-fluid">

    <div class="span6">
        <?php
        $gridDataProvider = new CArrayDataProvider(array(
            array('id' => 1, 'Total Advertisng' => $data[8]['total_items']),
        ));
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Advertisng',
            'titleCssClass' => ''
        ));

        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => array(
                array('name' => 'Total Advertisng',),
            ),
        ));
        $this->endWidget();
        ?>
    </div><!--/span-->
    <div class="span6">
        <?php
        $gridDataProvider = new CArrayDataProvider(array(
            array('id' => 1, 'Total Comment' => $data[9]['total_items']),
        ));
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Comment',
            'titleCssClass' => ''
        ));

        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => array(
                array('name' => 'Total Comment',),
            ),
        ));
        $this->endWidget();
        ?>
    </div><!--/span-->
</div>
<div class="row-fluid">

    <div class="span6">
        <?php
        $gridDataProvider = new CArrayDataProvider(array(
            array('id' => 1, 'Total Payment' => $data[10]['total_items']),
        ));
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Payment',
            'titleCssClass' => ''
        ));

        $this->widget('zii.widgets.grid.CGridView', array(
            /* 'type'=>'striped bordered condensed', */
            'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => array(
                array('name' => 'Total Payment',),
            ),
        ));
        $this->endWidget();
        ?>
    </div><!--/span-->

</div>
<div class="row-fluid">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-picture"></span>Offer Gallery',
            'titleCssClass' => ''
        ));
        ?>

    <!-- block -->
    <div class="block">

        <div class="block-content collapse in">
    <?php
    $criteria = new CDbCriteria();
    $criteria->limit = 12;
    $criteria->order = "id DESC";
    $offers = BspItem::model()->findAll($criteria);

    $data = array_chunk($offers, 4);

    foreach ($data as $offers):
        ?>
                <div class="row-fluid padd-bottom">
                <?php
                foreach ($offers as $offer):
                    ?>
                        <div class="span3">
                            <a class="thumbnail" href="<?php echo $this->createUrl("/bspItem/view", array("id" => $offer->id)); ?>">
                        <?php
                        if (empty($offer->image_offer->image_url)) {
                            $image_path = "data:image/png;base64,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";
                        } else {
                            $image_path = Yii::app()->baseUrl . "/uploads/BspItemImage/" . $offer->image_offer->id . "/" . $offer->image_offer->image_url;
                        }
                        echo CHtml::image($image_path, "", array("style" => "width: 260px; height: 180px;"));
                        ?>
                            </a>
                        </div>
                                <?php
                            endforeach;
                            ?>

                </div>
                    <?php
                endforeach;
                ?>
        </div>
    </div>
    <!-- /block -->

            <?php $this->endWidget(); ?>


    <!--<div class="span2">
    <input class="knob" data-width="100" data-displayInput=false data-fgColor="#5EB95E" value="35">
</div>
    <div class="span2">
    <input class="knob" data-width="100" data-cursor=true data-fgColor="#B94A48" data-thickness=.3 value="29">
</div>
    <div class="span2">
     <input class="knob" data-width="100" data-min="-100" data-fgColor="#F89406" data-displayPrevious=true value="44">     	
    </div><!--/span-->
</div><!--/row-->




<script>
    $(function() {

        $(".knob").knob({
            /*change : function (value) {
             //console.log("change : " + value);
             },
             release : function (value) {
             console.log("release : " + value);
             },
             cancel : function () {
             console.log("cancel : " + this.value);
             },*/
            draw: function() {

                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    var a = this.angle(this.cv)  // Angle
                            , sa = this.startAngle          // Previous start angle
                            , sat = this.startAngle         // Start angle
                            , ea                            // Previous end angle
                            , eat = sat + a                 // End angle
                            , r = 1;

                    this.g.lineWidth = this.lineWidth;

                    this.o.cursor
                            && (sat = eat - 0.3)
                            && (eat = eat + 0.3);

                    if (this.o.displayPrevious) {
                        ea = this.startAngle + this.angle(this.v);
                        this.o.cursor
                                && (sa = ea - 0.3)
                                && (ea = ea + 0.3);
                        this.g.beginPath();
                        this.g.strokeStyle = this.pColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                        this.g.stroke();
                    }

                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                    this.g.stroke();

                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                    this.g.stroke();

                    return false;
                }
            }
        });

        // Example of infinite knob, iPod click wheel
        var v, up = 0, down = 0, i = 0
                , $idir = $("div.idir")
                , $ival = $("div.ival")
                , incr = function() {
            i++;
            $idir.show().html("+").fadeOut();
            $ival.html(i);
        }
        , decr = function() {
            i--;
            $idir.show().html("-").fadeOut();
            $ival.html(i);
        };
        $("input.infinite").knob(
                {
                    min: 0
                            , max: 20
                            , stopper: false
                            , change: function() {
                        if (v > this.cv) {
                            if (up) {
                                decr();
                                up = 0;
                            } else {
                                up = 1;
                                down = 0;
                            }
                        } else {
                            if (v < this.cv) {
                                if (down) {
                                    incr();
                                    down = 0;
                                } else {
                                    down = 1;
                                    up = 0;
                                }
                            }
                        }
                        v = this.cv;
                    }
                });
    });
</script>
<script>
    $(function() {
        // Easy pie charts
        $('.chart').easyPieChart({animate: 1000});
    });
</script>