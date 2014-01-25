<div class="row">
    <div class="row-holder">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="puzzle-top text-center">
                <a href="#">The Puzzzle I ALPHA</a>
                <div style="width:30px; float: right;cursor: pointer;" class="newfeed-close"><span class="k-icon k-i-close" id="newsfeed-close"></span></div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<div class="offer_item-top" style="width:100%;height:450px;background: url('<?php echo Yii::app()->theme->baseUrl . "/images/newdetail.png" ?>')">
    <div class="container ">
        <div class="col-lg-12 offer_item">
            <div class="col-lg-8 offer_item-left">
                <div class="item_offer_name">1 Stunde Gassi führen</div>
                <div class="clear"></div>
                <div class="image-detail">
                    <div class="itemAvata col-lg-2">
                        <?php
                        echo CHtml::image(Yii::app()->theme->baseUrl . "/images/noavatar.jpg", '', array("width" => "110"));
                        ?>
                        <div class="over-item-avata"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contactLink">
                            <a id="contact-me">Contact Me</a>
                        </div>
                        <div class="clear"></div>
                        <div id="offerDetail">
                            <?php
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/offline.png", '', array("class" => "chk-online", "width" => "15", "height" => "15"));
                            ?>
                            <div>
                                from Test, t. / Munich 80469
                                <div class="clear clear-four"></div>
                                Test ttzsdsdtszd testtttt Last seen: 2014.Jan.24
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item_offer_price">
                    Price / Fix
                    <label>
                        10
                        <sup>€</sup>
                    </label>
                </div>
                <div id='orderNowdiv'>
                    <a id="orderNow" href="javascript:#">Order Now</a>
                </div>
            </div>

        </div>
    </div>    

</div>