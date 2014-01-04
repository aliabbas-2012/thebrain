<?php

/**
 * 
 */
class UserdataController extends Controller {

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'myoffers',
                    'myorders',
                    'settings',
                    'payment',
                    'ratings'
                ),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * my offers of particular login user
     */
    public function actionMyoffers() {
        $this->render("//userdata/myoffers");
    }

    /**
     * my Orders of particular login user
     */
    public function actionMyorders() {
        $this->render("//userdata/myorders");
    }

    /**
     * my Settings of particular login user
     */
    public function actionSettings() {
        $model = Users::model()->findByPK(Yii::app()->user->id);
        $model = Users::model()->findByPk(Yii::app()->user->id);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];

            if ($model->save()) {
                $this->redirect($this->createUrl("/web/userdata/settings"));
            }
        }
        $this->render("//userdata/settings", array("model" => $model));
    }

    /**
     * my Settings of particular login user
     */
    public function actionPayment() {
        $this->render("//userdata/payment");
    }

    /**
     * my Settings of particular login user
     */
    public function actionRatings() {
        $this->render("//userdata/ratings");
    }

}