<div class="tabs-container">

    <?php
        /**
         * tab bar
         */
        $this->renderPartial("//common/_tab_bar");
    ?>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="my_mails">
            <h1><?php echo Yii::t('notify', "My Messages") ?></h1>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog"));
            ?>
            <div class="tab-header">
                <a class="active" href="<?php $this->createUrl("/web/user/message") ?>">
                    <?php echo Yii::t('notify', "My Inbox") ?>
                </a>
                <a  href="<?php $this->createUrl("/web/user/message", array("type" => "sent")) ?>">
                    <?php echo Yii::t('notify', "Sent") ?>
                </a>
            </div>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog-btm"));
            ?>` 
            <div class="clear"></div>
            <?php
            $criteria = new CDbCriteria();
            $criteria->addCondition("user_receive = " . Yii::app()->user->id);
            $dataProvider = new CActiveDataProvider('BspMessage', array(
                'criteria' => $criteria,
            ));
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'bsp-message-grid',
                'dataProvider' => $dataProvider,
                'cssFile' => Yii::app()->theme->baseUrl . "/dist/css/gridview.css",
                'pager' => array(
                    'cssFile' => '',
                ),
                'columns' => array(
                    array(
                        'name' => 'user_send',
                        'value' => '!empty($data->sent_user) ? $data->sent_user->user_email : ""'
                    ),
                    'user_receive_name',
                    'subject',
                    'detail',
                    'sFile',
                    array('name' => 'is_view', 'value' => '$data->is_view == 1 ? "Viewed" : "Not Viewed"'),
                    'date_time',
                    array(
                        'class' => 'CButtonColumn',
                    ),
                ),
            ));
            ?>
        </div>
        <div class="tab-pane" id="my_offers">


        </div>
        <div class="tab-pane" id="my_orders">


        </div>
        <div class="tab-pane" id="settings">


        </div>
        <div class="tab-pane" id="payment">


        </div>
        <div class="tab-pane" id="ratings">


        </div>

    </div>
</div>

