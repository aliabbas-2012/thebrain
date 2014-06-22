<?php

class m140622_155823_LanguageIdIoffer extends DTDbMigration {

    public function up() {
        $table = "bsp_item";
        $this->addColumn($table, "language_id", "enum('de','en') after admin_status");

        $sql = "UPDATE bsp_item SET language_id = 'de' WHERE id <=660";
        $this->execute($sql);

        $sql = "UPDATE bsp_item SET language_id = 'en' WHERE id >660";
        $this->execute($sql);
    }

    public function down() {
        $table = "bsp_item";
        
         
        $sql = "UPDATE bsp_item SET language_id = 'i'";
        $this->execute($sql);
        $this->dropColumn($table, "language_id");

        
    }

}