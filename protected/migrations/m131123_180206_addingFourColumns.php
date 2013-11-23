<?php

class m131123_180206_addingFourColumns extends DTDbMigration {

    public function up() {
        $sql = $this->getFileString("thepuzzzle.sql");
        $this->execute($sql);
        $tables = $this->getTables();
        print_r($tables);
    }

    public function down() {
        $tables = $this->getTables();
        foreach ($tables as $table) {
            $this->dropTable($table);
        }
    }

}