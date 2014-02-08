<?php

class m140208_151700_addDataMOre extends DTDbMigration {

    public function up() {
        $sql = $this->getFileString("acl_data.sql");
        echo $sql;
        
        $this->execute($sql);
    }

    public function down() {
        return true;
    }

}