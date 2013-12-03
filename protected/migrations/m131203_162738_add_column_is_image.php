<?php

class m131203_162738_add_column_is_image extends CDbMigration {

    public function up() {
        $table = "bsp_item_image_video";

        $this->addColumn($table, "is_image", "TINYINT(255) DEFAULT 0 after is_offer");
    }

    public function down() {
        $table = "bsp_item_image_video";

        $this->dropColumn($table, "is_image");
    }

}