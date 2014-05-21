<?php

class m140521_180946_addColumnPayPalladaptive extends DTDbMigration {

    public function up() {
        $table = "payment_paypall_adaptive";
        $this->addColumn($table, "payment_type", "enum ('creation_purchase','normal_purchase') DEFAULT 'normal_purchase' after ip_address");
    }

    public function down() {
        $table = "payment_paypall_adaptive";
        $this->dropColumn($table, "payment_type");
    }

}