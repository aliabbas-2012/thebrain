<div class="space-blog"></div>
<div class='col-lg-12'>
    <div class="col-lg-3">
        <div class="detail-Likes">
            <div class="labeled">Likes</div>
            <div class="valued">0</div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="detail-Likes">
            <div class="labeled">Ratings </div>
            <div class="valued">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/star2.jpg", '', array(
                        "id" => "star" . $i, "class" => "starclick"
                    ));
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="detail-Likes">
            <div class="labeled">Orders</div>
            <div class="valued">0</div>
        </div>
    </div>
    <div class="col-lg-1">
        <img class="add-wishlist" src="<?php echo Yii::app()->theme->baseUrl ?>/images/addtowishlist.png" 
             alt="add to wishlist" original-title="Save this offer">
    </div>
    <div class="col-lg-2">
        <a id="addlike" class="detail-addlike" href="javascript:void(0);" status="2">+1 like</a>
    </div>

</div>
<div class="clear"></div>
<div class="space-blog"></div>

<div class="col-lg-3">
    <div id="Portfolio" >Images & Videos</div>
</div>
<div class="clear"></div>
<div class="space-blog"></div>
<div class="clear"></div>
<div>
    <div class="col-lg-12 detail-image-video">
        <div>
            <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port-1.jpg" ?>'>
                <?php
                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/port-1.jpg", '', array("height" => "200px"));
                ?>
            </a>


        </div>
        <div>
            <a href='<?php echo Yii::app()->theme->baseUrl . "/images/port-2.jpg" ?>'>
                <?php
                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/port-2.jpg", '', array("height" => "200px"));
                ?>
            </a>

        </div>

    </div>
    <div class='clear'></div>
    <div class="space-blog"></div>
    <div id='soundcloud'>
        sounds List
    </div>
    <div class='clear'></div>
    <div class="space-blog"></div>
    <div>
        <div class='col-lg-8'>
            <div id="detail_sub">
                <div class='detail-tab-part'>
                    <div class='col-lg-4 actived' tab-no='1'>
                        Description
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("width" => "23"));
                        ?>
                    </div>
                    <div class='col-lg-4' tab-no='2'>
                        Conditions
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("width" => "23"));
                        ?>
                    </div>
                    <div class='col-lg-4' tab-no='3'>
                        <strong>
                            (
                            <span id="comments_count" style="color:#000000;">0</span>
                            ) 
                        </strong>
                        Reviews
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("width" => "23"));
                        ?>
                    </div>

                </div>
                <div class='clear'></div>
                <div class='tab-1-data tab-data' >
                    <div>
                        <div class='col-lg-10 des-title'>
                            here
                        </div>
                        <div class='col-lg-2'>
                            <div class='unit-price'>€</div>
                            <div class='des-price'>10</div>
                        </div>
                    </div>
                    <div class='clear'></div>
                    <div class='col-lg-12 des-content'>
                        Guten Tag. Ich bin ein vernarrter Hude-Liebhaber und freue mich
                        deinen Hund Gassi zu führen. Maximal werden 10 Hunde gemeinsam ausgeführt - 
                        Gerne kann ich Ihren Hund auch für spezielle Fälle einzeln spazieren führen. 
                        einfach mich kontaktieren um gegebene Einzelheiten zu besprechen. Bis dahin alles Gute. 
                        Viele Grüsse Martin
                    </div>
                </div>
                <div class='tab-2-data tab-data' style='display:none'>
                    <div class='col-lg-12'>
                        <!--                        <div class="space-blog"></div>
                                                <div class="space-blog"></div>-->
                        <div class="space-blog"></div>
                        <div class='col-lg-12'>
                            <div class='hour-day'>
                                <span></span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Tu.</span>
                                <span class='col-lg-6'>-</span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>We.</span>
                                <span class='col-lg-6'>-</span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Th.</span>
                                <span class='col-lg-6'>-</span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Fr.</span>
                                <span class='col-lg-6'>-</span>

                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Sa.</span>
                                <span class='col-lg-6'>-</span>
                            </div>
                            <div class='hour-day'>
                                <span class='col-lg-6'>Su.</span>
                                <span class='col-lg-6'>-</span>
                            </div>

                        </div>
                        <div class='clear'></div>
                        <div class="space-blog"></div>
                        <span class="opening text-bold">To get started I will need from the buyer:</span>
                    </div>
                </div>
                <div class='tab-3-data tab-data' style='display:none'>
                    <div class='col-lg-12'>
                        <div class="space-blog"></div>
                        <div class="space-blog"></div>

                    </div>
                </div>

            </div>

        </div>
        <div class='col-lg-4'>
            <div class="yelow-bg">
                <label>Check out my price offers</label>
            </div>
            <div id='price_detail'>
                <p>Price Offers</p>
                <p style="margin-top: 30px">Calculate Price</p>

                <div class='price-type'>
                    <div class='col-lg-10'>1 Hour </div>
                    <div class='col-lg-2'>€ 6</div>
                </div>
                <div class='price-type'>
                    <div class='col-lg-10'> 2 Hours (per Hour)</div>
                    <div class='col-lg-2'>€ 6</div>
                </div>
                <div class='price-type'>
                    <div class='col-lg-10'>4 Hours (per Hour) </div>
                    <div class='col-lg-2'>€ 6</div>
                </div>
                <div class='clear'></div>
                
                <div class='col-lg-12'>
                    <div class='col-lg-6'>
                        
                    </div>
                    <div class='col-lg-6'>b</div>
                </div>
                <div class='col-lg-12'>
                    <div class='col-lg-6'>c</div>
                    <div class='col-lg-6'>d</div>
                </div>
                
                <div id="buttonCalculate">Calculate Price</div>
                <div class='clear'></div>
                <div id="priceTotal" class="col-lg-12">
                    <div class="col-lg-3 price-label" style=''>
                        Price
                    </div>
                    <div class="col-lg-9 price-calculation">

                        <div id="kqtinh" class='col-lg-9'>000,00</div>
                        <sup class='col-lg-2'> €</sup>
                    </div>
                </div>
                <div class='col-lg-12' style='color: #b5b5b5; padding-bottom: 10px; text-align: right'>
                    Time selection:-
                </div>
            </div>
            <div class='clear'></div>
            <div id="calendar">

            </div>
        </div>
    </div>

</div>
<div class="clear"></div>
<div class="space-blog"></div>
<div class="red-bg">
    <label>Check out my other offers</label>
</div>
<script>
    jQuery(function() {
        jQuery(".detail-tab-part>div").click(function() {
            jQuery(".detail-tab-part>div").removeClass("actived");
            jQuery(this).addClass("actived");
            jQuery(".tab-data").hide();
            jQuery(".tab-" + jQuery(this).attr("tab-no") + "-data").show();
        })
        $("#calendar").kendoCalendar();
    })
</script>