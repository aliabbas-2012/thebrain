<?php

class m140519_184903_addDiscountColumns extends DTDbMigration {

     public function up() {
        $table = "paypalsettings";

        $this->addColumn($table, "discount_offer_rate", "double DEFAULT 0 after comission_rate");
        
    }

    public function down() {
        $table = "paypalsettings";

        $this->dropColumn($table, "discount_offer_rate");
        
    }

}