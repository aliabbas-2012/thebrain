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
            <h1><?php echo Yii::t('user', 'My Offers') ?></h1>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog"));
            ?>
            <div class="space-blog"></div>

            <div>
                <?php
                $criteria = new CDbCriteria();
                $criteria->addCondition("user_id = " . Yii::app()->user->id);
                $dataProvider = new CActiveDataProvider('BspItem', array(
                    'criteria' => $criteria,
                ));
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'bsp-my-offer-grid',
                    'itemsCssClass' => 'table table-bordered',
                    'dataProvider' => $dataProvider,
                    'cssFile' => Yii::app()->theme->baseUrl . "/dist/css/gridview.css",
                    'pager' => array(
                        'cssFile' => '',
                    ),
                    'columns' => array(
                        array('name' => 'category_id', 'value' => 'isset($data->category)?$data->category->name:""'),
                        array('name' => 'name', 'value' => '$data->name'),
                        array(
                            'name' => 'description', 'value' => '$data->description',
                            'headerHtmlOptions' => array("class" => "not_responsive"),
                            'htmlOptions' => array("class" => "not_responsive")
                        ),
                        array('name' => 'price', 'value' => 'isset($data->currency)?$data->price." ".html_entity_decode($data->currency->symbol):""'),
                        array('name' => 'create_time',
                            'value' => '$data->create_time',
                            'headerHtmlOptions' => array("class" => "not_responsive"),
                            'htmlOptions' => array("class" => "not_responsive")
                        ),
                        array(
                            'class' => 'CButtonColumn',
                        ),
                    ),
                ));
                ?>
            </div>
        </div>

    </div>
</div>

