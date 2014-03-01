<?php
$background = !empty($model->background) ? Yii::app()->baseUrl . "/uploads/Users/" . $model->id . "/background/" . $model->background : "";
?>
<div class="offer_item-top user-stor-top" style="background: url('<?php echo $background ?>')">
    <div class="container ">
        <div class="col-lg-12 user-detail-container">
            <div class="user-detail">
                <div class="user-store-Avata col-lg-12">
                    <?php
                    $user = $this->_user;
                    $avatar = CHtml::image(Yii::app()->theme->baseUrl . "/images/noavatar.jpg", '', array("width" => "160"));
                    if (!empty($user->avatar)) {
                        $avatar = CHtml::image(Yii::app()->baseUrl . '/uploads/Users/' . $user->id . '/avatar/' . $user->avatar, '', array("width" => "110"));
                    } else {
                        $avatar = CHtml::image(Yii::app()->theme->baseUrl . '/images/noavatar.jpg', '', array("width" => "110"));
                    }
                    echo $avatar;
                    ?>

                    <div class="over-item-avata"></div>
                </div>
                <div class="clear"></div>
                <div class="col-lg-7">
                    <div class="contactLink">
                        <?php
                        if (!empty(Yii::app()->user->id)):
                            ?>
                            <a id="contact-me"
                               title ="Contact Me"   
                               data-toggle ="tooltip" 
                               data-placement ="top"
                               onclick='jQuery("#myModal").modal()'
                               href="javascript:void(0)"
                               ><?php echo Yii::t('detailOffer', 'Contact Me'); ?></a>
                               <?php
                           else:
                               ?>
                            <a id="contact-me"
                               title ="Contact Me"   
                               data-toggle ="tooltip" 
                               data-placement ="top"
                               onclick=" $.alert.open({
                                                   type: 'error',
                                                   content: 'Please Login to continue'
                                               });"
                               ><?php echo Yii::t('detailOffer', 'Contact Me'); ?></a>
                           <?php
                           endif;
                           ?>
                    </div>
                    <div class="clear"></div>
                    <div id="offerDetail">
                        <?php
                        if (isset(Yii::app()->user->id) && Yii::app()->user->id == $user->id) {
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/online.png", '', array("class" => "chk-online", "width" => "15", "height" => "15"));
                        } else {
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/offline.png", '', array("class" => "chk-online", "width" => "15", "height" => "15"));
                        }
                        ?>
                        <div>
                            <?php
                            ?>
                            <?php echo Yii::t('detailOffer', 'from') ?> <?php echo $user->first_name; ?>, 
                            <?php echo substr($user->second_name, 0, 1) . '.' ?> / <?php echo $user->city ?> 
                            <?php echo $user->zipcode ?>
                            <div class="clear clear-four"></div>
                            <?php echo $user->description ?> <?php echo Yii::t('detailOffer', 'Last seen') ?>: 
                            <?php echo date("Y.M.d", strtotime($user->lastActiveTime)) ?>
                            <?php
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>    

</div>