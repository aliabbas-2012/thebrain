<?php

class m140426_135329_addAdaptiveIdINorder extends DTDbMigration {

    public function up() {
        $table = "bsp_order";
        $this->addColumn($table, "payment_adaptive_id", "int(11)  DEFAULT
            NULL after item_id");
    }

    public function down() {
        $table = "bsp_order";
        $this->dropColumn($table, "payment_adaptive_id");
    }

}