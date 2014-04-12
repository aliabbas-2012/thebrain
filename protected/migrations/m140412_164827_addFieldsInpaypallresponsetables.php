<?php

class m140412_164827_addFieldsInpaypallresponsetables extends DTDbMigration {

    public function up() {
        $table = "paypalresponse";
        $this->addColumn($table, "item_id", "int(11)  DEFAULT NULL after id");
    }

    public function down() {
        $table = "paypalresponse";
        $this->dropColumn($table, "item_id");
    }

}