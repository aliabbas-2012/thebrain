<?php

class m140405_171145_notification_user extends DTDbMigration {

    public function up() {
        $table = "notification";
        $columns = array(
            'id' => 'int(10) unsigned NOT NULL auto_increment',
            'is_seen' => 'tinyint(1) DEFAULT 0',
            'create_time' => 'datetime NOT NULL',
            'create_user_id' => 'int(11) unsigned NOT NULL',
            'update_time' => 'datetime NOT NULL',
            'update_user_id' => 'int(11) unsigned NOT NULL',
            'PRIMARY KEY  (`id`)');
        $this->createTable($table, $columns);
    }

    public function down() {
        $table = "notification";
        $this->dropTable($table);
    }

}