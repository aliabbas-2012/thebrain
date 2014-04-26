<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ArticleController extends Controller {

    /**
     * 
     * @param type $slug
     */
    public function actionIndex($slug) {
        $slug_arr = explode("-", $slug);
        $criteria = new CDbCriteria();

        $criteria->condition = "iStatus = 1";
        $model = BspArticla::model()->findByPk($slug_arr[count($slug_arr) - 1], $criteria);

        if ($model === null)
            throw new CHttpException(404, 'Content Not available. We are updating ');

        $this->render("//article/index", array("model" => $model));
    }

}

?>
