<a  class="dropdown-toggle" data-toggle="dropdown">
    <?php
    $user = Users::model()->findByPk(Yii::app()->user->id);
    if (!empty($user->avatar)) {
        echo CHtml::image(Yii::app()->baseUrl . "/uploads/Users/" . $user->id . "/avatar/" . $user->avatar, '', array("height" => 20));
    } else {
        echo Yii::app()->user->name;
    }
    ?>
    <b class="caret"></b>
</a>
<ul class="dropdown-menu">
    <li>
        <?php
        echo CHtml::link(Yii::t('link', "View Profile"), $this->createUrl('/web/user/profileview'));
        ?>
    </li>                                
    <li>
        <?php
        echo CHtml::link(Yii::t('link', "Edit Profile"), $this->createUrl('/web/user/profile'));
        ?>
    </li>                                
    <li>
        <?php
        echo CHtml::link(Yii::t('link', "Logout "), $this->createUrl('/site/logout'));
        ?>
    </li>                                
</ul>