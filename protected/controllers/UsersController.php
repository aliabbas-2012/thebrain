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
        $model = new Users;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
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


        $oldimage = "";
        if (empty($model)) {
            $model = new Users;
            $model->id = Yii::app()->user->id;
        } else {
            $oldimage = $model->photo;
        }


        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
            $model->photo = CUploadedFile::getInstance($model, 'photo');
            $paths = $model->getUploadPath();
            $uploadPath = $paths['upload_path'];
            $model->photo_thumb = $model->photo;
            $flag = true;

            if (empty($model->photo)) {
                $flag = false;
                $model->photo = $oldimage;
            }
            if ($model->save()) {
                if ($flag == true) {
                    $dir = array("users", $model->id);
                    $uploadPathF = ItstUploadFile::createRecurSiveDirectories($dir);
                    $model->photo->saveAs($uploadPathF . $model->photo);
                }
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
        $model = Users::model()->findByPk($id);
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

}
