<?php

class m140412_164118_addFieldsInpaypalltable extends DTDbMigration {

    public function up() {
        $table = "paypalsettings";
        
        $this->addColumn($table, "admin_user_id", "int(11)  NOT NULL after app_account_email");
        $this->addColumn($table, "comission_rate", "double DEFAULT 0 after admin_user_id");
        
    }

    public function down() {
        $table = "paypalsettings";
        $this->dropColumn($table, "admin_user_id");
        $this->dropColumn($table, "comission_rate");
        
    }

}