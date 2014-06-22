<?php

class m140622_122804_addLanuageIdinCategory extends DTDbMigration {

    public function up() {
        $table = "bsp_category";
        $this->addColumn($table, "name_de", "varchar(45) DEFAULT NULL after name");
        
        $sql = "Select * FROM ".$table;
        $data = $this->getQueryAll($sql);
        foreach($data as $model){
            $this->update($table, array("name_de"=>$model['name']), "id =".$model['id']);
            
        }
    }

    public function down() {
        $table = "bsp_category";
        $this->dropColumn($table, "name_de");
    }

}