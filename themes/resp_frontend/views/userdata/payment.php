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
            <div class="payment-panel">
                <div class="container marketing">
                    <div class="row">
                        <div class="col-lg-3 w-block">
                            <div class="w-title w-left" align="left" ><?php echo Yii::t('user', 'My Puzzzle Wallet') ?></div>
                            <div class="w-left" align="left"><?php echo Yii::t('user', 'Available money') ?></div>
                            <div class="w-header w-shadow">
                                <div class="w-right" align="left"> 
                                    <span  id="pphTotal" class="w-money">
                                        <?php echo $wallet_data['puzzle_wallet'][0]!=null?$wallet_data['puzzle_wallet'][0]:0; ?>
                                    </span> <span class="w-money">&euro;</span> </div>
                                <button 
                                    class="k-button-green" data-escrow="account"
                                    onclick="thepuzzleadmin.updateElementAjax('<?php echo $this->createUrl("/web/userdata/paymentdetail",array("type"=>"account")) ?>','grid_content','')"
                                    ><?php echo Yii::t('user', 'View') ?></button>
                            </div>
                        </div>
                        <div class="col-lg-3 w-block">
                            <div class="w-title w-left" align="left" ><?php echo Yii::t('user', 'My Seller Account') ?></div>
                            <div class="w-left" align="left"><?php echo Yii::t('user', 'Work I am doing for others') ?></div>
                            <div class="w-header w-shadow">
                                <div class="w-right" align="left">
                                    <span  id="sellerTotal" class="k-money"><?php echo $wallet_data['seller_wallet'][0]!=null?$wallet_data['seller_wallet'][0]:0; ?></span> 
                                    <span class="k-money">&euro;</span> </div>
                                <button  class="k-button-green" data-escrow="seller"
                                   onclick="thepuzzleadmin.updateElementAjax('<?php echo $this->createUrl("/web/userdata/paymentdetail",array("type"=>"seller")) ?>','grid_content','')"      
                                   ><?php echo Yii::t('user', 'View') ?></button>
                            </div>
                        </div>
                        <div class="col-lg-3 w-block">
                            <div class="w-title w-left" align="left" ><?php echo Yii::t('user', 'My Buyer Account') ?></div>
                            <div class="w-left" align="left"><?php echo Yii::t('user', 'Work others are doing for me') ?> </div>
                            <div class="w-header w-shadow">
                                <div class="w-right" align="left"> 
                                    <span  id="buyerTotal" class="w-money"><?php echo $wallet_data['buyer_wallet'][0]!=null?$wallet_data['buyer_wallet'][0]:0; ?></span> 
                                    <span class="k-money">&euro;</span> 
                                </div>
                                <button   class="k-button-green" data-escrow="buyer" 
                                 onclick="thepuzzleadmin.updateElementAjax('<?php echo $this->createUrl("/web/userdata/paymentdetail",array("type"=>"buyer")) ?>','grid_content','')"         
                                          ><?php echo Yii::t('user', 'View') ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="grid_content">
            
        </div>

    </div>
</div>

<script type="text/javascript">

</script>