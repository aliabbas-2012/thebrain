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
            <?php
            //check any status
            if (Yii::app()->user->hasFlash('offer-status')):
                ?>
                <div class="alert alert-success">
                    <?php
                        echo Yii::app()->user->getFlash('offer-status');
                    ?>  
                </div>
                <?php
            endif;
            ?>
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
                        array(
                            'name' => 'name',
                            'value' => '$data->slug_link',
                            'type' => "raw"
                        ),
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
                            'template' => '{edit}{cdelete}{in-active}{active}',
                            'buttons' => array(
                                'edit' => array
                                    (
                                    'label' => 'edit',
                                    'options' => array('class' => 'k-button k-button-icontext k-grid-Edit'),
                                    'url' => 'Yii::app()->controller->createUrl("/web/offers/post", array("action"=>"update","slug"=>$data->slug))',
                                ),
                                'cdelete' => array
                                    (
                                    'label' => '<span class="k-icon k-delete"></span>Delete',
                                    'options' => array(
                                        'class' => 'k-button k-button-icontext k-grid-delete',
                                        'onclick' => 'if(confirm("Are you sure to want to delete")){return true;} else {return false;}'
                                    ),
                                    'url' => 'Yii::app()->createUrl("/web/offers/deleteOffer", array("id"=>$data->id,))',
                                ),
                                'active' => array
                                    (
                                    'label' => 'Active',
                                    'options' => array('class' => 'k-button k-button-icontext k-grid-Active'),
                                    'url' => 'Yii::app()->createUrl("/web/offers/changeStatus", array("id"=>$data->id,))',
                                    'visible' => '$data->iStatus==0?true:false'
                                ),
                                'in-active' => array
                                    (
                                    'label' => 'In Active',
                                    'options' => array('class' => 'k-button k-button-icontext k-grid-Active my-grid-button'),
                                    'url' => 'Yii::app()->createUrl("/web/offers/changeStatus", array("id"=>$data->id))',
                                    'visible' => '$data->iStatus <>0?true:false'
                                ),
                            ),
                        ),
                    ),
                ));
                ?>
            </div>
        </div>

    </div>
</div>

