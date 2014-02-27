<div class="tabs-container">

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="my_offers">
            <div class="">
                <?php
                $this->renderPartial("//offers/_category_tab_header_search", array("cat_arr" => $cat_arr, "total" => $dataProvider->getTotalItemCount()));
                ?>
            </div>


            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog-btm"));
            ?>` 
            <div class="clear"></div>

        </div>
        <div class="filterbar">
            <label class="lbrefine-search col-md-2"><?php echo Yii::t('global', 'Refine Search') ?></label>
            <div class='refine-search col-md-10' >
                <div class="itemsearch">
                    <input type="checkbox" name="special" 
                           id="special" value="1" 
                           elem_target="OfferSearch_special_deal"
                           class="refine-search-checkbox" />
                    <span id="span_refine_deal" class="refine-search-span"><?php echo Yii::t('form', 'Special Deals') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="video" id="video" value="1" 
                           class="refine-search-checkbox"
                           elem_target="OfferSearch_withVideo"
                           />
                    <span id="span_refine_video" class="refine-search-span" value=""><?php echo Yii::t('form', 'With Video') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="sound" id="sound" value="1" 
                           class="refine-search-checkbox" 
                           elem_target="OfferSearch_withSound"
                           />
                    <span id="span_refine_sound" class="refine-search-span" ><?php echo Yii::t('form', 'With Sound') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="low" id="low" 
                           value="1" 
                           elem_target="OfferSearch_lowPrice"
                           class="refine-search-checkbox"/>
                    <span id="span_refine_plow"  class="refine-search-span" ><?php echo Yii::t('form', 'Price (low)') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="hight" id="hight" 
                           value="1" 
                           elem_target="OfferSearch_highPrice"
                           class="refine-search-checkbox"/>
                    <span id="span_refine_phigh" class="refine-search-span" ><?php echo Yii::t('form', 'Price (high)') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="popular" id="popular" value="1" 
                           class="refine-search-checkbox"
                           elem_target="OfferSearch_popularity"
                           />
                    <span id="span_refine_popularity" class="refine-search-span" ><?php echo Yii::t('form', 'Popularity') ?></span>
                </div>
                <div class="itemsearch">
                    <input type="checkbox" name="near" id="near" 
                           value="1" 
                           elem_target="OfferSearch_nearFirst"
                           class="refine-search-checkbox"/>
                    <span id="span_refine_nearest" class="refine-search-span" ><?php echo Yii::t('form', 'Nearest First') ?></span>
                </div>
            </div>  
            <div class="space-blog"></div>
            <div class="clear"></div>
            <div>
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

                <div id="grid_content" style="display: block">
                    <?php
                    $this->renderPartial("//offers/_search_result", array("dataProvider" => $dataProvider));
                    ?>
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
       
        jQuery(".itemsearch input[type=checkbox]").click(function(){
                jQuery("#loading").show();
                elem_target = jQuery(this).attr("elem_target");
                if(jQuery(this).is(":checked")){
                   jQuery("#"+elem_target).val(1)
                }
                else {
                    jQuery("#"+elem_target).removeAttr("value")
                }
                
                 $.ajax({
                    type: "POST",
                    url: jQuery("#search-form").attr("action")+"?ajax=1",
                    data: jQuery("#search-form").serialize(), 
                        success: function(data)
                        {
                           jQuery("#grid_content").html(data);
                           jQuery("#loading").hide();
                           jQuery(".total span").html(jQuery("#grid_content #recentOrder .review").length) 
                        }
                  });
        })
        jQuery(".tab-header a").click(function(){
                jQuery("#loading").show();
                 grp_id = jQuery(this).attr("category_id");
                 jQuery(".tab-header a").removeClass("active");
                 jQuery(this).addClass("active");
                 $.ajax({
                    type: "POST",
                    url: jQuery("#search-form").attr("action")+"?ajax=1&grp_id="+grp_id,
                    data: jQuery("#search-form").serialize(), 
                        success: function(data)
                        {
                           jQuery("#grid_content").html(data);
                           jQuery("#loading").hide();
                           jQuery(".total span").html(jQuery("#grid_content #recentOrder .review").length) 
                        }
                  });
                  
                  return false;
        })
        
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
    </div>