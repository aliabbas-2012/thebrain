<?php

class m140406_085515_addColumnUser extends DTDbMigration {

    public function up() {
        $table = "bsp_notify";
        $this->addColumn($table, "user_type", "enum('buyer','seller') after isview");
        
    }

    public function down() {
        $table = "bsp_notify";
        $this->dropColumn($table, "user_type");
     
    }

}