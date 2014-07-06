<?php

class m140706_100157_convertOfferHoursToSegmentsTables extends DTDbMigration {

    public function up() {
        $tables = array(
            //"bsp_item_price_offer_hours",
            "bsp_item_price_offer_day",
            "bsp_item_price_offer_week",
            "bsp_item_price_offer_month",
        );
        foreach ($tables as $table) {
            $columns = array(
                'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
                'item_id' => 'int(11) DEFAULT NULL',
                'option' => 'varchar(8) NOT NULL',
                'price' => 'float NOT NULL',
                'period' => 'int(11) DEFAULT NULL',
                'start' => 'int(11) DEFAULT NULL',
                'end' => 'int(11) DEFAULT NULL',
                'create_time' => 'datetime NOT NULL',
                'create_user_id' => 'int(11) unsigned NOT NULL',
                'update_time' => 'datetime NOT NULL',
                'update_user_id' => 'int(11) unsigned NOT NULL',
                'PRIMARY KEY (`id`)',
            );
            $this->createTable($table, $columns);
        }

        $sql = "SELECT * FROM bsp_item_price_offer WHERE period IN (3,4,5)";
        $data = $this->getQueryAll($sql);
        foreach ($data as $column) {
            if ($column['period'] == "3") {
                $this->insert("bsp_item_price_offer_day", $column);
            } else if ($column['period'] == "4") {
                $this->insert("bsp_item_price_offer_week", $column);
            } else if ($column['period'] == "5") {
                $this->insert("bsp_item_price_offer_month", $column);
            }
        }

        $this->renameTable("bsp_item_price_offer", "bsp_item_price_offer_hours");
        
        $this->delete("bsp_item_price_offer_hours", "period IN (3,4,5)");
    }

    public function down() {

        $this->renameTable("bsp_item_price_offer_hours", "bsp_item_price_offer");
        $tables = array(
            //"bsp_item_price_offer_hours",
            "bsp_item_price_offer_day",
            "bsp_item_price_offer_week",
            "bsp_item_price_offer_month",
        );
        foreach ($tables as $table) {
            $this->dropTable($table);
        }
    }

}