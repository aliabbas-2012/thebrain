<a  class="dropdown-toggle" data-toggle="dropdown">
    <?php
    $avatar = "";

    $countper = Yii::app()->user->UserProfilePercentage;

    $user = Yii::app()->user->user;
    if (!empty($user->avatar)) {
        $avatar = Yii::app()->baseUrl . "/uploads/Users/" . $user->id . "/avatar/" . $user->avatar;
        echo CHtml::image($avatar, '', array("height" => 20));
    } else {
        echo $user->username;
    }
    ?>
    <b class="caret"></b>
</a>
<ul class="dropdown-menu" style="background:#f7f8fc;">
    <div class="avatar-top">
        <div class="avatar-main-top">
            <div class="avtar-img">
                <?php
                if (!empty($avatar)):
                    ?>
                    <a href="<?php echo $this->createUrl('/web/user/profile') ?>">
                        <img height="20" width="20" title="Mail" src="<?php echo $avatar; ?>" alt="Mail" style="border-radius:10px;" />
                    </a>
                    <?php
                endif;
                ?>
            </div>
            <div class="avtar-text">
                <h6><strong>Hi <?php echo Yii::app()->user->name ?></strong></h6>
                <p><?php $user->username ?></p>
            </div>

            <div class="avtar-percentage">
                <canvas class="full-features" height="70" width="70" style="width: 70px; height: 70px;"> </canvas>
            </div>

            <script >
                $(document.getElementsByClassName('full-features')).mambo({
                    percentage:<?php echo $countper * 10; ?>,
                    label: "",
                    displayValue: true,
                    labelColor: "#fff",
                    circleColor: '#ff851f',
                    circleBorder: '#f00',
                    ringStyle: "full",
                    ringBackground: "#fff",
                    ringColor: "#16acea",
                    drawShadow: true,
                    animate: true
                });
            </script>
        </div>
        <div class="avatar-main-edit">
            <p><img title="Profie" src="<?php echo Yii::app()->theme->baseUrl . "/images/" ?>/edit.png" alt="Profie" />
                <?php
                echo CHtml::link(Yii::t('link', "Edit Profile"), $this->createUrl('/web/user/profile'));
                ?>
            </p>
        </div>
        <div class="avatar-border" >
        </div>
        <div class="avatar-main-text">
            <div class="avatar-main-text-left">
                <p><img title="Dashboard" src="<?php echo Yii::app()->theme->baseUrl . "/images/" ?>dashboard-bg_03.jpg" alt="Dashboard" /> 
                    <?php
                    echo CHtml::link(Yii::t('link', "Dashboard"), $this->createUrl('/web/user/dashboard'));
                    ?>
                </p>
                <p><img title="Payment" src="<?php echo Yii::app()->theme->baseUrl . "/images/" ?>dashboard-bg_03.jpg" alt="Payment" /> 
                    <a href="<?php echo $this->createUrl("/web/userdata/payment"); ?>" ><?php echo Yii::t('link', "Payment "); ?><span></span></a>
                </p>
            </div>
            <div class="avatar-main-text-right">
                <p><img title="Buyer" src="<?php echo Yii::app()->theme->baseUrl . "/images/" ?>dashboard-bg_03.jpg" alt="Buyer" /> 
                    <a href="<?php echo $this->createUrl("/web/userdata/myorders"); ?>">
                        <?php echo Yii::t('link', "My Buyer Activity"); ?>
                    </a>

                </p>
                <p><img title="Seller" src="<?php echo Yii::app()->theme->baseUrl . "/images/" ?>dashboard-bg_03.jpg" alt="Seller" />

                    <a href="<?php echo $this->createUrl("/web/userdata/myoffers"); ?>">
                        <?php echo Yii::t('link', "My Seller Activity"); ?>
                    </a>
                </p>
            </div>
        </div>
        <div class="avatar-border" style="border-bottom:1px solid #bcbbbb; float:left; width:100%; padding: 5px 0 0 0;">
        </div>
        <div class="avatar-scroll">
            <?php
            $criteria = new CDbCriteria();
            $criteria->limit = 15;
            $criteria->order = "id DESC";
            $criteria->addCondition("user_id = " . Yii::app()->user->id);
            $myOffers = BspItem::model()->findAll($criteria);


            foreach ($myOffers as $offer):
                $path = $avatar;
                if (!empty($offer->image_offer->image_url)):
                    $path = Yii::app()->baseUrl . "/uploads/BspItemImage/" . $offer->image_offer->id . "/" . $offer->image_offer->image_url;
                endif;
                ?>
                <p><img class="offer-login-box" width="20" height="20" title="<?php echo $offer->name ?>" src="<?php echo $path; ?>" alt="<?php echo $offer->name ?>" />
                    <a href="<?php echo $this->createUrl("/web/offers/post", array("action" => "update", "slug" => $offer->slug)) ?>">
                        <?php echo $offer->name ?>
                    </a>

                </p>
                <?php
            endforeach;
            ?>

        </div>
        <div class="avatar-border" >
        </div>
        <div class="avatar-bottom">
            <div class="avatar-setting">
                <p><img title="Mail" src="<?php echo Yii::app()->theme->baseUrl . "/images/" ?>settings.png" alt="Mail" style="border-radius:10px;" /> 
                    <a href="<?php echo $this->createUrl("/web/userdata/settings"); ?>"><?php echo Yii::t('link', "Setting "); ?></a>
                </p>
            </div>
            <div class="avatar-signout">
                <?php
                echo CHtml::link(Yii::t('link', "Logout "), $this->createUrl('/site/logout'));
                ?>
            </div>
        </div>
    </div>                               
</ul>