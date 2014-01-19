<?php

/**
 * 
 */
class FaqController extends Controller {

    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->order = "id DESC";
        $dataProvider = new CActiveDataProvider('BspFaq', array(
            'criteria' => $criteria,
        ));
        $this->render("//faq/index", array("dataProvider" => $dataProvider));
    }

}

?>
