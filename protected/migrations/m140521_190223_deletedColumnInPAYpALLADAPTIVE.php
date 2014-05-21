<?php

class m140521_190223_deletedColumnInPAYpALLADAPTIVE extends DTDbMigration {

    public function up() {
        $table = "bsp_item";
        $this->addColumn($table, "deleted", "int(4) DEFAULT 0 after lng");
    }

    public function down() {
        $table = "bsp_item";
        $this->dropColumn($table, "deleted");
    }

}