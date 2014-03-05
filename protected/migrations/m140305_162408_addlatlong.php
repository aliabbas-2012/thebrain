<?php

class m140305_162408_addlatlong extends DTDbMigration {

    public function up() {
        $table = "bsp_item";
        $data = $this->getQueryAll("SELECT id,lat,lng FROM " . $table);
        foreach ($data as $d) {
            $dt = new DTFunctions();
            
            $columns = array(
                "lat"=>$dt->getIntRanddomeNo(2).".".$dt->getIntRanddomeNo(3),
                "lng"=>$dt->getIntRanddomeNo(2).".".$dt->getIntRanddomeNo(3),
            );
            $this->update($table, $columns,"id = ".$d['id']);
        }

    }

    public function down() {
        $table = "bsp_item";
    }

}