<?php

class m140202_191014_add_date_conf_misc extends CDbMigration {

    public function up() {
        $table = "conf_misc";
        $columns = array(
            "title" => "Date Format",
            "param" => "date_formate",
            "value" => "m/d/y",
            "field_type" => "dropDown",
            "create_time" => date("Y-m-d h:m:s"),
            "create_user_id" => "1",
            "update_time" => date("Y-m-d h:m:s"),
            "update_user_id" => "1",
            "activity_log" => "user insterted through console",
        );
        $this->insert($table, $columns);
        $columns = array(
            "title" => "Smtp",
            "param" => "smtp",
            "value" => "1",
            "field_type" => "dropDown",
            "create_time" => date("Y-m-d h:m:s"),
            "create_user_id" => "1",
            "update_time" => date("Y-m-d h:m:s"),
            "update_user_id" => "1",
            "activity_log" => "user insterted through console",
        );
        $this->insert($table, $columns);
        $columns = array(
            "title" => "Application Name",
            "param" => "app_name",
            "value" => "“Puzzzle",
            "field_type" => "textArea",
            "create_time" => date("Y-m-d h:m:s"),
            "create_user_id" => "1",
            "update_time" => date("Y-m-d h:m:s"),
            "update_user_id" => "1",
            "activity_log" => "user insterted through console",
        );
        $this->insert($table, $columns);

        $columns = array(
            "title" => "Fb Key",
            "param" => "fb_key",
            "value" => "“",
            "field_type" => "textArea",
            "create_time" => date("Y-m-d h:m:s"),
            "create_user_id" => "1",
            "update_time" => date("Y-m-d h:m:s"),
            "update_user_id" => "1",
            "activity_log" => "user insterted through console",
        );
        $this->insert($table, $columns);
        $columns = array(
            "title" => "Fb Secret",
            "param" => "fb_secret",
            "value" => "“",
            "field_type" => "textArea",
            "create_time" => date("Y-m-d h:m:s"),
            "create_user_id" => "1",
            "update_time" => date("Y-m-d h:m:s"),
            "update_user_id" => "1",
            "activity_log" => "user insterted through console",
        );
        $this->insert($table, $columns);
    }

    public function down() {
        $table = "conf_misc";
        $this->delete($table, 'param="smtp" AND param="date_formate"');
        $this->delete($table, 'param="app_name" AND param="date_formate"');
        $this->delete($table, 'param="fb_key" AND param="fb_secret"');
    }

}