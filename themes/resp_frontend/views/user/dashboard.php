

<div class="tabs-container">

    <?php
    /**
     * tab bar
     */
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/screen.css', CClientScript::POS_END);
    $this->renderPartial("//common/_tab_bar");
    ?>
    <!-- Tab panes -->

    <div class="clear clear-height"></div>
    <label class="hellotext"><?php echo Yii::t('user', 'Hello again') ?> <?php echo Yii::app()->user->user->username; ?>!</label>
    <div class="clear clear-height"></div>

    <div class="noteleft">
        <a href="<?php echo $this->createUrl('/web/user/profile'); ?>">
            <?php echo Yii::t('user', 'Complete your profile') ?>
        </a> 
        <?php echo Yii::t('user', 'and atract more interest') ?>
        <a class="del_box" href="javascript:void(0)" onclick="jQuery(this).parent().remove();">x</a>
    </div>
    <div class="noteleft"><a href="<?php echo $this->createUrl("/web/offers/post", array("action" => "create")); ?>" class="post"><?php echo Yii::t('user', 'Post your offer') ?></a></div>
    <div class="container marketing">
        <div class="row">
            <div class="tabContent">
                <ul class="dashbaord_tabs">
                    <li class="nobor">
                        <a class="tabs active" href="javascript:;" title="ordertab" d-target="recentOrder">My Recent Orders</a>
                    </li>
                    <li>
                        <a class="tabs" href="javascript:;" title="wishlisttab" d-target="saved_offers">Saved Offers</a>
                    </li>
                    <li>
                        <a class="tabs" href="javascript:;" title="recentlytab" d-target="recently_viewed">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clear"></div>  

    <div id="recentOrder" class="list-view-dashboard">
        <?php
        $criteria = new CDbCriteria();
        $criteria->order = "id DESC";

        $dataProvider = new CActiveDataProvider('BspOrder', array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => 2)
        ));
        $orders = $dataProvider->getData();
        foreach ($orders as $order):
            ?>
            <div class="review">
                <div class="review-img col-lg-2">
                    <?php
                    if (!empty($order->item->image_offer->image_url)):
                        echo CHtml::image(Yii::app()->baseUrl . "/uploads/BspItemImage/" . $order->item->image_offer->id . "/" . $order->item->image_offer->image_url, $order->item->name, array("title" => $order->item->name));
                    else :
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/post-avata.png", "Offer", array("title" => "Offer"));
                    endif;
                    ?>
                </div>
                <div class="review-content col-lg-6">
                    <div class="review-content-item"><?php echo isset($order->item) ? $order->item->slug_link : "No Name"; ?></div>
                    <div class="review-content-amount"><?php echo $order->amount; ?> &euro;</div>
                </div>
                <div class="review-stats col-lg-2">
                    <div class="seller send-review"><?php echo CHtml::link(Yii::t('user', 'Send A Review'), $this->createUrl("/web/user/sendReview", array("id" => $order->id, "item_id" => isset($order->item) ? $order->item->id : ""))); ?></div>
                    <div class="rating"> Order date:&nbsp;&nbsp;<?php echo date("d-m-Y", strtotime($order->date_order)); ?></div>
                    <div class="rating">Start date:&nbsp;&nbsp;<?php echo date("d-m-Y", strtotime($order->date_start)); ?></div>
                    <div class="rating"> Delivery date:&nbsp;&nbsp;<?php echo date("d-m-Y", strtotime($order->date_finish)); ?> </div>
                    <div class="seller"><?php echo Yii::t('user', 'Seller') ?>:&nbsp;&nbsp; <?php echo ($order->seller != null) ? $order->seller->first_name : 'No Available'; ?> </div>
                </div>
            </div>
            <div class="clear"></div>
            <?php
        endforeach;
        $this->widget('CLinkPager', array(
            'pages' => $dataProvider->pagination,
            'header' => '',
            'htmlOptions' => array("class" => "pager")
                )
        );
        ?>
        <div class="clear"></div>
    </div>

</div>
<div id="saved_offers" style="display: none">
    <?php
    $criteria = new CDbCriteria();
    $criteria->select = "item_id";
    $criteria->order = "id DESC";

    $criteria->distinct = "item_id";

    $saved_items = CHtml::listData(BspFarvorite::model()->findAll($criteria), 'item_id', 'item_id');
    $criteria = new CDbCriteria();

    $criteria->order = "id DESC";
    $criteria->addInCondition('id', $saved_items);
    $criteria->condition = "is_public>0 AND iStatus = 1 AND admin_status = 1";
    $criteria->addCondition("deleted = :deleted");
    $criteria->params = array("deleted" => 0);

    $dataProvider = new CActiveDataProvider('BspItem', array(
        'criteria' => $criteria,
        'pagination' => array('pageSize' => 15)
    ));
    echo "<div id='saved_offers_content'>";
    $this->renderPartial("//user/_tab_items", array("items" => $dataProvider->getData()));
    echo "</div>";

    if ($dataProvider->pagination->pageCount > 1) {
        $jsMethods = "thepuzzleadmin.appendElementAjax('" . $this->createUrl('/web/default/renderUserItems') . "','saved_offers_content'," . CJSON::encode($criteria) . ",this);return false;";

        echo "<div class='clear'></div>";

        $this->widget('DTScroller', array(
            'pages' => $dataProvider->pagination,
            'ajax' => true,
            'header' => '',
            'jsMethod' => $jsMethods,
                )
        );
        echo "<div class='col-lg-12 load_more_div'>";
        echo CHtml::link("Load More", 'javascript:void(0)', array("class" => "load_more", "onclick" => "thepuzzleadmin.loadNextPage('saved_offers')"));
        echo "</div>";
    }
    ?>





</div>
<div id="recently_viewed" style="display:none">
    <?php
    $criteria = new CDbCriteria();
    $criteria->limit = "16";
    $criteria->order = "id DESC";
    $criteria->condition = "is_public>0 AND iStatus = 1 AND admin_status = 1";
    $criteria->addCondition("deleted = :deleted");
    $criteria->params = array("deleted" => 0);
    $dataProvider = new CActiveDataProvider('BspItem', array(
        'criteria' => $criteria,
        'pagination' => array('pageSize' => 15)
    ));
    echo "<div id='recently_viewed_content'>";
    $this->renderPartial("//user/_tab_items", array("items" => $dataProvider->getData()));
    echo "</div>";
    if ($dataProvider->pagination->pageCount > 1) {
        $jsMethods = "thepuzzleadmin.appendElementAjax('" . $this->createUrl('/web/default/renderUserItems') . "','recently_viewed_content'," . CJSON::encode($criteria) . ",this);return false;";

        echo "<div class='clear'></div>";

        $this->widget('DTScroller', array(
            'pages' => $dataProvider->pagination,
            'ajax' => true,
            'header' => '',
            'jsMethod' => $jsMethods,
                )
        );
        echo "<div class='col-lg-12 load_more_div'>";
        echo CHtml::link("Load More", 'javascript:void(0)', array("class" => "load_more", "onclick" => "thepuzzleadmin.loadNextPage('recently_viewed')"));
        echo "</div>";
    }
    ?>
</div>
<?php
Yii::app()->clientScript->registerScript('dashobard', '
        jQuery(function(){
            jQuery(".dashbaord_tabs li a").click(function(){
                
                jQuery(".dashbaord_tabs a").removeClass("active");
                
                jQuery(".dashbaord_tabs a").each(function(){
                    jQuery("#"+jQuery(this).attr("d-target")).hide();
                })
                jQuery(this).addClass("active");
                jQuery("#"+jQuery(this).attr("d-target")).show();
            })
            
        jQuery(".col-lg-3>div.saved-offers-img").hover(
                  function() {
                       jQuery(this).children().eq(2).show();
                  }, function() {
                       jQuery(this).children().eq(2).hide();
                  }
                );
                
           //send review 
           
          jQuery(".send-review a").click(function(){
                
                thepuzzleadmin.updateElementAjax(jQuery(this).attr("href"),"reveiwModel-content","");
                jQuery("#reveiwModel").modal()
                return false;
          })
        })
', CClientScript::POS_END);
?>
<!-- Modal -->
<div class="modal fade" id="reveiwModel" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="reveiwModel-content">

        </div>
    </div>
</div>
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/Screen.css', CClientScript::POS_END);
?>


