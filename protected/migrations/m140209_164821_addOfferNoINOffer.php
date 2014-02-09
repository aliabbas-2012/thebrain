<?php

class m140209_164821_addOfferNoINOffer extends DTDbMigration {

    public function up() {
        $table = "bsp_item";
        $this->addColumn($table, "offer_number", "int(20) NOT NULL DEFAULT '0'");

        $data = $this->findAllRecords($table, array("id", "group_id"), "id", "group_id");
        foreach ($data as $id => $group) {
            if ($group == 9) {
                echo "9";
                $this->update($table, array("offer_number" => $id + 1000000000000), "id = " . $id);
            } else {
                echo "0";
                $this->update($table, array("offer_number" => $id + 2000000000000), "id = " . $id);
            }
        }
    }

    public function down() {
        $table = "bsp_item";
        $this->dropColumn($table, "offer_number");
    }

}