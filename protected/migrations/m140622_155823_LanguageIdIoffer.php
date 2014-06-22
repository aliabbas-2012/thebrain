<?php

class m140622_155823_LanguageIdIoffer extends DTDbMigration {

    public function up() {
        $table = "bsp_item";
        $this->addColumn($table, "language_id", "enum('de','en') after admin_status");
        
    }

    public function down() {
        $table = "bsp_item";
        $this->dropColumn($table, "language_id");
    }

}