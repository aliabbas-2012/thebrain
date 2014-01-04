<div class="tabs-container">

    <?php
    /**
     * tab bar
     */
    $this->renderPartial("//common/_tab_bar");
    ?>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="my_offers">
            <h1><?php echo Yii::t('user', 'My Orders') ?></h1>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog"));
            ?>
            <div class="space-blog"></div>

            <div>
                <?php
                $criteria = new CDbCriteria();
                $criteria->addCondition("seller_id = " . Yii::app()->user->id);
                $dataProvider = new CActiveDataProvider('BspOrder', array(
                    'criteria' => $criteria,
                ));
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'bsp-my-order-grid',
                    'itemsCssClass' => 'table table-bordered',
                    'dataProvider' => $dataProvider,
                    'cssFile' => Yii::app()->theme->baseUrl . "/dist/css/gridview.css",
                    'pager' => array(
                        'cssFile' => '',
                    ),
                    'columns' => array(
                        array('name' => 'date_order', 'value' => '$data->date_order'),
                        array('name' => 'item_id', 'value' => 'isset($data->item)?$data->item->name:""'),
                        array('name' => 'description', 'value' => '$data->description'),
                        array('name' => 'date_start', 'value' => '$data->date_start'),
                        array('name' => 'amount', 'value' => '$data->amount." ".html_entity_decode("&euro;")'),
                        array('name' => 'date_finish', 'value' => '$data->date_finish',),
                        array('name' => 'status', 'value' => '$data->_status',),
                    ),
                ));
                ?>
            </div>
        </div>

    </div>
</div>

