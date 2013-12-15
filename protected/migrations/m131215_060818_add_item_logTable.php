<?php

class m131215_060818_add_item_logTable extends DTDbMigration {

    public function up() {
        $table = "bsp_item_log";
        $columns = array(
            'id' => 'int(10) unsigned NOT NULL auto_increment',
            'message' => 'text DEFAULT NULL',
            "item_id" => 'int(11) NOT NULL',
            'log_type' => "enum('update', 'viewed','inserted') DEFAULT NULL",
            'ip_address' => 'varchar(50) NOT NULL',
            'create_time' => 'datetime NOT NULL',
            'create_user_id' => 'int(11) unsigned NOT NULL',
            'update_time' => 'datetime NOT NULL',
            'update_user_id' => 'int(11) unsigned NOT NULL',
            'PRIMARY KEY  (`id`)');
        $this->createTable($table, $columns);
        $this->addForeignKey("fk_" . $table, $table, "item_id", "bsp_item", "id", "CASCADE", "CASCADE");
    }

    public function down() {
        $table = "bsp_item_log";
        $this->dropForeignKey("fk_" . $table, $table);
        $this->dropTable($table);
    }

}