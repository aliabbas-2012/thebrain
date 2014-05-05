<?php

class m140505_193749_updatestoreUrls extends DTDbMigration {

    public function up() {
        $records = $this->getQueryAll("SELECT id,store_url FROM bsp_user");
        foreach ($records as $record) {
            $this->update("bsp_user", array("store_url" => MyHelper::convert_no_sign($record['store_url'])), 'id =' . $record['id']);
        }
    }

    public function down() {
        $records = $this->getQueryAll("SELECT id,store_url FROM bsp_user");
        foreach ($records as $record) {
            $this->update("bsp_user", array("store_url" => MyHelper::convert_no_sign($record['store_url'])), 'id =' . $record['id']);
        }
    }

}