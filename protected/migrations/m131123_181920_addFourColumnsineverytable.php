<?php

class m131123_181920_addFourColumnsineverytable extends DTDbMigration {

    public function up() {
        $tables = $this->getTables();
        unset($tables['tbl_migration']);
        foreach ($tables as $table) {
            $this->addColumn($table, "create_time", "datetime NOT NULL");
            $this->addColumn($table, "create_user_id", "int(11) unsigned NOT NULL");
            $this->addColumn($table, "update_time", "datetime NOT NULL");
            $this->addColumn($table, "update_user_id", "int(11) unsigned NOT NULL");
        }
    }

    public function down() {
        $tables = $this->getTables();
        unset($tables['tbl_migration']);
        foreach ($tables as $table) {
            $this->dropColumn($table, "create_time");
            $this->dropColumn($table, "create_user_id");
            $this->dropColumn($table, "update_time");
            $this->dropColumn($table, "update_user_id");
        }
    }

}