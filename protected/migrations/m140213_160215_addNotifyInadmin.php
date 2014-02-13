<?php

class m140213_160215_addNotifyInadmin extends DTDbMigration {

    public function up() {
        $columns = array(
            "title" => "English Notice Bar",
            "param" => "en_notice_bar",
            "value" => "The Puzzzle I ALPHA",
            "field_type" => "",
        );
        $this->insertRow("conf_misc", $columns);

        $columns = array(
            "title" => "German Notice Bar",
            "param" => "de_notice_bar",
            "value" => "Die Puzzzle Ich ALPHA",
            "field_type" => "",
        );
        $this->insertRow("conf_misc", $columns);
    }

    public function down() {
        $this->delete("conf_misc",'param ="en_notice_bar"');
        $this->delete("conf_misc",'param ="de_notice_bar"');
    }

}