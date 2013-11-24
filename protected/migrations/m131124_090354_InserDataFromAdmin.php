<?php

class m131124_090354_InserDataFromAdmin extends DTDbMigration {

    public function up() {
        $table = "bsp_user";
        $data = $this->getQueryAll("SELECT * FROM bsp_user");

        foreach ($data as $user) {
            
            $columns = array(
                "username" => !empty($user['paypal_mail']) ? $user['paypal_mail'] : $user['fbmail'],
                "user_email" => !empty($user['paypal_mail']) ? $user['paypal_mail'] : $user['fbmail'],
                "type" => "non-admin",
                "create_time" => date("Y-m-d H:i:s"),
                "create_user_id" => 1,
                "update_time" => date("Y-m-d H:i:s"),
                "update_user_id" => 1,
            );
            $this->update($table, $columns, "id = " . $user['id']);
        }

        $data = $this->getQueryAll("SELECT * FROM bsp_account");

        foreach ($data as $user) {
          
            $columns = array(
                "username" => $user['username'],
                "user_email" => $user['email'],
                "gender" => $user['gender'],
                "birthday" => $user['birthday'],
                "avatar" => $user['avatar'],
                "password" => $user['password'],
                "first_name" => $user['fullname'],
                "type" => "admin",
                "create_time" => date("Y-m-d H:i:s"),
                "create_user_id" => 1,
                "update_time" => date("Y-m-d H:i:s"),
                "update_user_id" => 1,
            );
            $this->insert($table, $columns);
        }
    }

    public function down() {
        $table = "bsp_user";
        $this->delete($table, "type = 'admin'");
        return true;
    }

}