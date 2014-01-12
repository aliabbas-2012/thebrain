<div class="tabs-container">

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="my_offers">
            <?php
            $this->renderPartial("//offers/_category_tab_header", array("cat_arr" => $cat_arr));
            ?>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog-btm"));
            ?>` 
            <div class="clear"></div>

        </div>
        <div class="filterbar">
            <label class="lbrefine-search col-md-2"><?php echo Yii::t('global', 'Refine Search') ?></label>
            <div class='refine-search col-md-10' >
                <div class="itemsearch">
                    <input type="checkbox" name="special" id="special" value="1" class="refine-search-checkbox"/>
                    <span id="span_refine_deal" class="refine-search-span"><?php echo Yii::t('form', 'Special Deals') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="video" id="video" value="1" class="refine-search-checkbox"/>
                    <span id="span_refine_video" class="refine-search-span" value=""><?php echo Yii::t('form', 'With Video') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="sound" id="sound" value="1" class="refine-search-checkbox"/>
                    <span id="span_refine_sound" class="refine-search-span" ><?php echo Yii::t('form', 'With Sound') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="low" id="low" value="1"class="refine-search-checkbox"/>
                    <span id="span_refine_plow"  class="refine-search-span" ><?php echo Yii::t('form', 'Price (low)') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="hight" id="hight" value="1" class="refine-search-checkbox"/>
                    <span id="span_refine_phigh" class="refine-search-span" ><?php echo Yii::t('form', 'Price (high)') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="popular" id="popular" value="1" class="refine-search-checkbox"/>
                    <span id="span_refine_popularity" class="refine-search-span" ><?php echo Yii::t('form', 'Popularity') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="near" id="near" value="1" class="refine-search-checkbox"/>
                    <span id="span_refine_nearest" class="refine-search-span" ><?php echo Yii::t('form', 'Nearest First') ?></span>
                </div>
            </div>  
            <div class="space-blog"></div>
            <div
                <div class="view-style">
                    <div class="col-md-1">
                        <?php
                        echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . "/images/list_view.jpg"), 'javascript:void(0)', array("id" => "list-tab"));
                        ?>
                    </div>
                    <div class="col-md-1">
                        <?php
                        echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . "/images/thum_view.jpg"), 'javascript:void(0)', array("id" => "thumb-tab"));
                        ?>
                    </div>
                </div>

                <div id="grid_content">
                    <div id="recentOrder" class="list-view">
                        <?php
                        $items = $dataProvider->getData();
                        foreach ($items as $item):
                            ?>
                            <div class="review">
                                <div class="review-img">
                                    <?php
                                    if (!empty($item->image_offer->image_url)):
                                        echo CHtml::image(Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item->image_offer->id . "/" . $item->image_offer->image_url, '');
                                    else :
                                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/post-avata.png");
                                    endif;
                                    ?>
                                </div>
                                <div class="review-content">
                                    <div class="review-content-item"><?php echo isset($item->name) ? $item->name : "No Name"; ?></div>
                                    <div class="review-content-desc"><?php echo isset($item->description) ? $item->description : "Not Available"; ?></div>

                                </div>
                                <div class="review-stats">
                                    <div class="review-content-amount">
                                        <?php echo isset($item->price) ? $item->price : 0 . " "; ?>
                                        <?php echo isset($item->currency->name) ? $item->currency->symbol : "&euro;"; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <?php
                        endforeach;
                        ?>
                    </div>
                    <div  class="thumb-view" style="display: none">
                        <div class="space-blog"></div>
                        <?php
                        $this->renderPartial("//user/_tab_items", array("items" => $items));
                        ?>
                    </div>
                </div>

            </div>
        </div>

        <?php
        Yii::app()->clientScript->registerScript('cat_tabs', "
    jQuery('.view-style a').click(function(){
        jQuery('#loading').show();
        if(jQuery(this).attr('id') =='list-tab'){
            jQuery('.list-view').show();
            jQuery('.thumb-view').hide();
        }
        else if(jQuery(this).attr('id') =='thumb-tab'){
            jQuery('.list-view').hide();
            jQuery('.thumb-view').show();
        }
         jQuery('#loading').hide();
        return false;
    });
    
", CClientScript::POS_READY);
        ?>
        <?php
        Yii::app()->clientScript->registerScript('logoFix', '
     $(document).ready(function() {
       
        
         jQuery(".col jQuery-xs-6").hover(
          function() {
               jQuery(this).children().eq(1).children().eq(0).show();
          }, function() {
               jQuery(this).children().eq(1).children().eq(0).hide();
          }
        );
        
        jQuery(".offer_like").click(function(){
                if("' . Yii::app()->user->id . '" ==""){
                    thepuzzleadmin.showAlertBox("Please login First to like ","warning");
                }
                else {
                    item_id = jQuery(this).attr("id");
                    thepuzzleadmin.updateElementAjax("' . $this->createUrl("/web/user/saveItemLog", array("action" => "like")) . '?item_id="+item_id,"","");
                        thepuzzleadmin.showAlertBox("Added to like list ","success");
                }
        })
        jQuery(".favorAdd").click(function(){
                if("' . Yii::app()->user->id . '" ==""){
                    thepuzzleadmin.showAlertBox("Please login First to like ","warning");
                }
                 else {
                    item_id = jQuery(this).attr("title");
                    thepuzzleadmin.updateElementAjax("' . $this->createUrl("/web/user/saveItemLog", array("action" => "favrout")) . '?item_id="+item_id,"","");
                    thepuzzleadmin.showAlertBox("Added to favourate list ","success");
                }
        })
    })
    
', CClientScript::POS_END);
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
        })
', CClientScript::POS_END);
        ?>