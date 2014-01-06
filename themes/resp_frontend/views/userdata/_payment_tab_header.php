<div class="tab-header">
    <a class="<?php echo $type == "wallet" ? "active" : "" ?>" href="<?php echo $this->createUrl("/web/userdata/payment") ?>">
        <?php echo Yii::t('user', 'My Money') ?>
    </a>
    <a class="<?php echo $type == "statements" ? "active" : "" ?>" href="<?php echo $this->createUrl("/web/userdata/payment", array("type" => "statements")) ?>">
        <?php echo Yii::t('user', 'Statements') ?>
    </a>
    <a class="<?php echo $type == "invoices" ? "active" : "" ?>" href="<?php echo $this->createUrl("/web/userdata/payment", array("type" => "invoices")) ?>">
        <?php echo Yii::t('user', 'Invoices') ?>
    </a>
    <a class="<?php echo $type == "transactions" ? "active" : "" ?>" href="<?php echo $this->createUrl("/web/userdata/payment", array("type" => "transactions")) ?>">
        <?php echo Yii::t('user', 'Transactions') ?>
    </a>
</div>