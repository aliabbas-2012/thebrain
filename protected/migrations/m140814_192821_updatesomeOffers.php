<?php

class m140814_192821_updatesomeOffers extends DTDbMigration {

    public function up() {
        $table = "bsp_item";
        $sql = "Select * FROM bsp_item WHERE language_id ='en' AND admin_status = 1 AND deleted = 0 LIMIT 4 ";
        $data = $this->getQueryAll($sql);
        $i = 0;
        $columns = array(
            0 => array(
                "lat" => "33.7133348",
                "lng" => "73.0619261",
            ),
            1 => array(
                "lat" => "33.6676974",
                "lng" => "73.0752068",
            ),
            2 => array(
                "lat" => "34.1764355",
                "lng" => "73.2278335",
            ),
            3 => array(
                "lat" => "34.1764355",
                "lng" => "73.2278335",
            ),
        );
        foreach ($data as $val) {

            $this->update($table, $columns[$i], "id = " . $val['id']);

            $i++;
        }


        $sql = "Select * FROM bsp_item WHERE language_id ='de' AND admin_status = 1 AND deleted = 0 LIMIT 4 ";
        $data = $this->getQueryAll($sql);
        $i = 0;

        foreach ($data as $val) {

            $this->update($table, $columns[$i], "id = " . $val['id']);

            $i++;
        }
    }

    public function down() {
        echo "m140814_192821_updatesomeOffers does not support migration down.\n";
        return false;
    }

}