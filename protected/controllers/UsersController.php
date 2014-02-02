<?php

class UsersController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

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
                    'create', 'update',
                    'index', 'view', 'delete',
                    'changepass',
                    'profile',
                    'profileview'
                ),
                'users' => array('@'),
                'expression' => 'isset($user->user->type) && ($user->user->type==="admin")'
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'forget',
                    'resetPass'
                ),
                'users' => array('?'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new RegisterUsers;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['RegisterUsers'])) {
            $model->attributes = $_POST['RegisterUsers'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new Users('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Users']))
            $model->attributes = $_GET['Users'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * User Profile managment
     */
    public function actionChangepass() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        if (Yii::app()->user->isGuest) {
            // If the user is guest or not logged in redirect to the login form
            $this->redirect(array('site/login'));
        } else {
            $model = new ChangePassword;
            if (isset($_POST['ChangePassword'])) {

                $model->attributes = $_POST['ChangePassword'];
                if ($model->validate()) {

                    $user = $model->_model;
                    $user->password = md5($model->password);
                    $user->save(false);
                    Yii::app()->user->setFlash("success", "Password changed succesfully");
                    $this->redirect($this->createUrl("changepass"));
                }
            }

            $this->render('changepass', array('model' => $model));
        }
    }

    /**
     *  change profile
     */
    public function actionProfile() {

        $model = Users::model()->findByPk(Yii::app()->user->id);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];

            if ($model->save()) {
                $this->redirect($this->createUrl("users/profileview"));
            }
        }

        $this->render("profile", array("model" => $model));
    }

    /**
     * 
     */
    public function actionProfileview() {
        $model = Users::model()->findByPk(Yii::app()->user->id);

        $this->render("profileview", array("model" => $model));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Users the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $criteria = new CDbCriteria();
        $criteria->addCondition("id <> " . Yii::app()->user->id);
        $model = Users::model()->findByPk($id, $criteria);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Users $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'users-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * forget password
     */
    public function actionForget() {
        $this->layout = "//layouts/column1";
        $model = new ForgetForm();



        // collect user input data
        if (isset($_POST['ForgetForm'])) {
            $model->attributes = $_POST['ForgetForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate()) {

                $user = Users::model()->find("user_email='" . $model->email . "'");

                $itst = new ItstFunctions;
                $key = $itst->getRanddomeNo(25);
                $user->updateByPk($user->id, array("email_authenticate" => $key));
                $body = "Reset your link <br/>";
                $url = $this->createAbsoluteUrl("/users/resetPass", array("id" => $user->id, "key" => $key));
                $body.= CHtml::link($url, $url);
                $email['From'] = Yii::app()->params->adminEmail;
                $email['FromName'] = Yii::app()->name;
                $email['To'] = $model->email;
                $email['Subject'] = "Reset your link";
                $email['Body'] = $body;
                $email['Body'] = $this->renderPartial('//common/_email_template', array('email' => $email), true, false);

                $this->sendEmail2($email);

                Yii::app()->user->setFlash("success", "Reset Link has been sent successfully");
                $this->redirect($this->createUrl("/user/forget"));
            }
        }
        // display the login form
        $this->render('forget', array('model' => $model));
    }

    /**
     * 
     * @param type $id
     * @param type $key
     */
    public function actionResetPass($id, $key) {
        $user = Users::model()->findByPk($id);

        if ($user->email_authenticate == $key) {
            $model = new ResetPassword;
            if (isset($_POST['ResetPassword'])) {

                $model->attributes = $_POST['ResetPassword'];
                if ($model->validate()) {

                    $user->password = md5($model->password);
                    $user->updateByPk($user->id, array("password" => $user->password, "email_authenticate" => "1"));
                    Yii::app()->user->setFlash("success", "Password changed succesfully");
                    $this->redirect($this->createUrl("/site/login"));
                }
            }
            $this->render('resetPass', array('model' => $model));
        } else {
            echo "Invalid Key";
        }
    }

}
