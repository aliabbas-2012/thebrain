<?php

class DefaultController extends Controller {

    public function actionIndex() {
        $this->render('//default/index');
    }

    /**
     * ajax data fetching
     */
    public function actionRenderTabItems() {

        $criteria = new CDbCriteria();
        $keys = array("limit", "select", "conditions", "order");
        foreach ($_POST['criteria'] as $key => $value) {
            if (in_array($key, $keys)) {
                $criteria->$key = $value;
            }
        }
        $criteria->distinct = FALSE;


        $dataProvider = new CActiveDataProvider('BspItem', array(
            'criteria' => $criteria,
            'pagination' => array('pageSize' => 15)
        ));

        $this->renderPartial("//default/_tab_items", array("items" => $dataProvider->getData()));
    }

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error)
            $this->render('//error/error', array("error" => $error));
    }

    /**
     * ajax based login
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                
            }
        }
        // display the login form
        $this->renderPartial('//common/_login_box', array('model' => $model));
    }

}