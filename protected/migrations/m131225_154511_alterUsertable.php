<?php

class m131225_154511_alterUsertable extends DTDbMigration {

    public function up() {
        $table = "bsp_user";
        $this->alterColumn($table, "lastActiveTime", "datetime DEFAULT NULL");
    }

    public function down() {
         $table = "bsp_user";
          $this->alterColumn($table, "lastActiveTime", "datetime NOT NULL");
    }

}