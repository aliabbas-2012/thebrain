<?php

class m140228_182044_offer_item_null extends DTDbMigration {

    public function up() {
        $table = "bsp_item";
        $this->alterColumn($table, "seo_title", "varchar(255) DEFAULT NULL");
        $this->alterColumn($table, "seo_description", "text DEFAULT NULL");
        $this->alterColumn($table, "seo_keywords", "varchar(255) DEFAULT NULL");
    }

    public function down() {
        $table = "bsp_item";

        $this->alterColumn($table, "seo_title", "varchar(255) NOT NULL");
        $this->alterColumn($table, "seo_description", "text NOT NULL");
        $this->alterColumn($table, "seo_keywords", "varchar(255) NOT NULL");
    }

}