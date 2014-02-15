<?php

class m140215_095604_addMoreOffersdummy extends DTDbMigration {

    public function up() {
        $offers = BspItem::model()->findAll();
        foreach ($offers as $offer) {
            echo $offer->id;
            echo "\n";

            unset($offer->id);


            $this->insert("bsp_item", $offer->attributes);
        }
    }

    public function down() {
        return true;
    }

}