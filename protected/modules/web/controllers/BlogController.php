<?php

/**
 * blog controller
 */
class BlogController extends Controller {
    /**
     * blog detail
     */
    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->order = "id DESC";
        $dataProvider = new CActiveDataProvider('BspBlog', array(
            'criteria' => $criteria,
        ));
        $this->render("//blog/index", array("dataProvider" => $dataProvider));
    }
    /**
     * blog detail
     */
    public function actionDetail($slug){
        $slug_arr = explode("-",$slug);
        $id = $slug_arr[0];
        
        $model = BspBlog::model()->findByPk($id);
        
        $this->render("//blog/detail", array("model" => $model));
    }

}

?>
