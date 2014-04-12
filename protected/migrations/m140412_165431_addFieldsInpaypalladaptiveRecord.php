<?php

class m140412_165431_addFieldsInpaypalladaptiveRecord extends DTDbMigration {

    public function up() {
        $table = "payment_paypall_adaptive";
        $this->addColumn($table, "puzzzle_admin_status", "enum('initiated','tranfered') DEFAULT 'initiated' after puzzzle_commission");
        $this->addColumn("payment_paypall_adaptive_history", "puzzzle_admin_status", "enum('initiated','tranfered') DEFAULT 'initiated' after puzzzle_commission");
    }

    public function down() {
        $table = "payment_paypall_adaptive";
        $this->dropColumn($table, "puzzzle_admin_status");
        $this->dropColumn("payment_paypall_adaptive_history", "puzzzle_admin_status");
    }

}