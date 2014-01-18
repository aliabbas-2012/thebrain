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
        
        $model = BspArticla::model()->findByPk($slug_arr[count($slug_arr) - 1]);
        
        $this->render("//article/index",array("model"=>$model));
    }

}

?>
