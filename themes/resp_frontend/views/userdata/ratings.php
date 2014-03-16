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
            <h1><?php echo Yii::t('user', 'My Ratings') ?></h1>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/tab_bg.png", '', array("class" => "line-blog"));
            ?> 
            <div class="clear"></div>
        </div>

        <div id="grid_content">
            <ul>
                <li class="k-state-active">
                    <?php echo Yii::t('user', 'Seller') ?>
                </li>
                <li>
                    <?php echo Yii::t('user', 'Buyer') ?> 
                </li>

            </ul>
            <div class="ad">
                <?php
                if (!empty($sellerComments)):
                    foreach ($sellerComments as $data):
                        $this->renderPartial("//userdata/_rating_comments", array("data" => $data, "user" => 1));
                    endforeach;
                else :
                    echo Yii::t('user', 'No Record Found');
                endif;
                ?>
            </div>
            <div class="ad">
                <?php
                if (!empty($buyerComments)):
                    foreach ($buyerComments as $data):
                        $this->renderPartial("//userdata/_rating_comments", array("data" => $data, "user" => 0));
                    endforeach;
                else :
                    echo Yii::t('user', 'No Record Found');
                endif;
                ?>
            </div>

        </div>

    </div>
</div>





<script>
    $(document).ready(function() {
        $("#grid_content").kendoTabStrip({
            animation: {
                open: {
                    effects: "fadeIn"
                }
            }
        });
    });
</script>

