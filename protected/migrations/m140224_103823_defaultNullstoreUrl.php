<?php

class m140224_103823_defaultNullstoreUrl extends DTDbMigration {

    public function up() {
        $table = "bsp_user";
        $this->alterColumn($table, "store_url", "varchar(255) DEFAULT NULL");
    }

    public function down() {
        $table = "bsp_user";
        $this->alterColumn($table, "store_url", "varchar(255) NOT NULL");
    }

}