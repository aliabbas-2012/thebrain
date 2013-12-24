<?php

class DefaultController extends Controller {

    public function actionIndex() {
        $this->render('//default/index');
    }

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
            if ($model->validate() && $model->login())
            {
                
            }
        }
        // display the login form
        $this->renderPartial('//common/_login_box', array('model' => $model));
    }

}