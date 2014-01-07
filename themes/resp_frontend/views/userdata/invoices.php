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
            <h1><?php echo Yii::t('user', 'Payment') ?></h1>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog"));
            ?>
            <div class="space-blog"></div>
            <?php
            $this->renderPartial("//userdata/_payment_tab_header", array("type" => $type));
            ?>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog-btm"));
            ?>` 
            <div class="clear"></div>

        </div>

        <div id="grid_content">
            <div id="order-search">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'action' => Yii::app()->createUrl($this->route),
                    'method' => 'get',
                    'htmlOptions' => array("id" => "invoice-search")
                ));
                ?>
                <div class="col-md-3">
                    <?php echo $form->label($model, 'payment', array('class' => 'control-label col-sm-8')); ?> 
                    <?php echo $form->dropDownList($model, 'payment', $model->getPaymentStatuses(), array('class' => 'form-control')); ?> 
                </div>
                <div class="col-md-3">
                    <?php echo $form->label($model, 'status', array('class' => 'control-label col-sm-6')); ?> 
                    <?php echo $form->dropDownList($model, 'status', $model->getStatuses(), array('class' => 'form-control')); ?> 
                </div>
                <div class="col-md-2">
                    <?php echo $form->label($model, 'date_order', array('class' => 'control-label col-sm-9')); ?> 
                    <?php
                    $this->widget('ItstJUIDatePicker', array(
                        'model' => $model,
                        'attribute' => 'date_order',
                        'model_attribute' => 'date_order',
                        'options' => array('showAnim' => 'fold',
                            'dateFormat' => Yii::app()->params['dateformat'],
                            'changeYear' => true,
                        ),
                        'htmlOptions' => array('class' => 'form-control')
                    ));
                    ?>
                </div>
                <div class="col-md-2">
                    <?php echo $form->label($model, 'amount', array('class' => 'control-label col-sm-4')); ?> 
                    <?php echo $form->textField($model, 'amount', array('class' => 'form-control')); ?> 
                </div>
                <div class="col-md-2">
                    <label class="control-label col-sm-4">&nbsp;</label>   
                    <div class="clear"></div>
                    <div class="search-button">
                        <a class="searchbt" href="javascript:void(0)">
                            <?php
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/search_button.png");
                            ?>
                        </a>
                    </div>
                </div>
                <?php $this->endWidget(); ?>
            </div>
            <div class="clear"></div>
            <div class="space-blog"></div>
            

            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'bsp-my-order-grid',
                'itemsCssClass' => 'table table-bordered',
                'dataProvider' => $dataProvider,
                'cssFile' => Yii::app()->theme->baseUrl . "/dist/css/gridview.css",
                'pager' => array(
                    'cssFile' => '',
                ),
                'columns' => array(
                    array(
                        'name' => 'description',
                        'value' => '$data->description',
                        'headerHtmlOptions' => array("class" => "not_responsive"),
                        'htmlOptions' => array("class" => "not_responsive")
                    ),
                    array('name' => 'amount', 'value' => '$data->amount." ".html_entity_decode("&euro;")'),
                    array('name' => 'payment', 'value' => '$data->_payment_status',),
                    array('name' => 'status', 'value' => '$data->_status',),
                ),
            ));
            ?>

        </div>

    </div>
</div>

<?php
Yii::app()->clientScript->registerScript('search', "
$('.searchbt').click(function(){
	$('#loading').show();
        $('#invoice-search').submit();
        
	return false;
});
$('#invoice-search').submit(function(){
	$('#bsp-my-order-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
        $('#loading').hide();
	return false;
        
});
", CClientScript::POS_READY);
?>