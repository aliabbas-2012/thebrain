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
                        $total_likes = BspItemLike::model()->count();
                        $items = $dataProvider->getData();
                        foreach ($items as $item):
                            $likes = BspItemLike::model()->count(array('condition' => "item_id='$item->id'"));
                            $user = Users::model()->findByPk($item->user_id);
                            $percent = 0;
                            if ($likes == 0) {
                                $likes = '0000';
                            } else {
                                $percent = ($likes * 100) / $total_likes;
                            }
                            if (!empty($user->avatar)) {
                                $avatar = CHtml::image(Yii::app()->baseUrl . '/uploads/Users/' . $user->id . '/avatar/' . $user->avatar, '', array("id" => "image_avatar"));
                            } else {
                                $avatar = CHtml::image(Yii::app()->theme->baseUrl . '/images/noavatar.jpg', '', array("id" => "image_avatar"));
                            }

                            ?>
                            <div class="review">
                                <div class="review-img col-lg-2">
                                    <?php
                                    if (!empty($item->image_offer->image_url)):
                                        echo CHtml::image(Yii::app()->baseUrl . "/uploads/BspItemImage/" . $item->image_offer->id . "/" . $item->image_offer->image_url, '');
                                    else :
                                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/post-avata.png");
                                    endif;
                                    ?>
                                </div>
                                <div class="review-content col-lg-6">
                                    <div class="review-content-item"><?php echo isset($item->name) ? substr($item->name, 0, 20) . '...' : "No Name"; ?></div>
                                    <div class="review-content-desc"><?php echo isset($item->description) ? substr($item->description, 0, 20) . '...' : "Not Available"; ?></div>
                                    <div class="review-content-other">

                                        <?php echo $avatar ?>
                                        <label class='city'><?php echo isset($user->city) ? $user->city : "None"; ?></label>
                                        <img class="like-icon" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/like.png" />
                                        <label class='city'>,<?php echo (($item->num_star) / 5) * 100; ?><?php echo " % ".Yii::t('global', 'by review') ?> </label>

                                    </div>
                                </div>
                                <div class="review-stats col-lg-2">
                                    <div class="review-content-amount">
                                        <?php
                                        if ($item->special_deal == 1) {
                                            ?>
                                            <div class="itemPrice">
                                                <span class="span-price dis-price"><?php echo $item->price; ?></span>
                                                <label class="dis-price"><?php echo $item->currency->symbol; ?></label>
                                                <span class="span-price" style="color: #000;">
                                                    <?php echo!empty($item->discount_price) ? $item->discount_price : 0; ?>
                                                </span>
                                                <label><?php echo $item->currency->symbol; ?></label>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <div class="itemPrice">
                                                <span class="span-price" style="color: #000;"><?php echo isset($item->price) ? $item->price : 0; ?></span>
                                                <label><?php echo isset($item->currency)?$item->currency->symbol:""; ?></label>
                                            </div>
                                            <?php
                                        }
                                        ?>

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