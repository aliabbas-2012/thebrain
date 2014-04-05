<?php

class m140405_171957_addColumnBspNotify extends DTDbMigration {

    public function up() {
        $table = "bsp_notify";
        $this->addColumn($table, "message", "varchar(255) DEFAULT NULL after isview");
        $this->addColumn($table, "payment_adaptive_id", "varchar(255) DEFAULT NULL after message");
    }

    public function down() {
         $table = "bsp_notify";
         $this->dropColumn($table, "message");
         $this->dropColumn($table, "payment_adaptive_id");
    }

}