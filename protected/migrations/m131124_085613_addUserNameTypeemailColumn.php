<?php

class m131124_085613_addUserNameTypeemailColumn extends DTDbMigration {

    public function up() {
        $table = "bsp_user";
        
        $this->addColumn($table, "username", "varchar(255) NOT NULL after second_name");
        $this->addColumn($table, "user_email","varchar(255) NOT NULL after username");
        $this->addColumn($table, "type", "enum('admin', 'non-admin') DEFAULT NULL after user_email");
    }

    public function down() {
        $table = "bsp_user";
        
        $this->dropColumn($table, "username");
        $this->dropColumn($table, "user_email");
        $this->dropColumn($table, "type");
    }

}