<div class="tabs-container">

    <?php
    /**
     * tab bar
     */
    $this->renderPartial("//common/_tab_bar");
    ?>
    <!-- Tab panes -->

    <div class="clear" style="height: 20px;"></div>
    <label class="hellotext"><?php echo Yii::t('user', 'Hello again') ?> <?php echo Yii::app()->user->user->username; ?>!</label>
    <div class="clear" style="height: 20px;"></div>
   
    <div class="noteleft">
        <a href="<?php echo $this->createUrl('/web/user/profile'); ?>">
            <?php echo Yii::t('user', 'Complete your profile') ?>
        </a> 
        <?php echo Yii::t('user', 'and atract more interest') ?>
        <a class="del_box" href="javascript:void(0)" onclick="jQuery(this).parent().remove();">x</a>
    </div>
    <div class="noteleft"><a href="<?php echo $this->createUrl('/web/offer/'); ?>" class="post"><?php echo Yii::t('user', 'Post your offer') ?></a></div>



</div>

