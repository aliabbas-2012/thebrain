<?php

class m140619_190731_renameipayment extends DTDbMigration {

    public function up() {
        $table = "bsp_item";
        $this->renameColumn($table, "iPayment", "admin_status");
        $this->alterColumn($table, "admin_status", "int(11) NOT NULL DEFAULT '1'");
        
        $data = $this->getQueryAll("Select * FROM ".$table);
        foreach($data as $model){
            $this->update($table, array("admin_status"=>1), "id = ".$model['id']);
        }
    }

    public function down() {
        $table = "bsp_item";
        $this->renameColumn($table, "admin_status", "iPayment");
        $this->alterColumn($table, "iPayment", "int(11) NOT NULL DEFAULT '0'");
    }

}