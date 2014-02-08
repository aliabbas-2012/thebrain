<?php

class BspAdvertisingController extends Controller {

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
            // 'accessControl', // perform access control for CRUD operations
            'rights',
        );
    }

    public function allowedActions() {
        return '@';
    }

    public function beforeAction($action) {
        parent::beforeAction($action);

        $operations = array('create', 'update', 'index', 'delete');
        parent::setPermissions($this->id, $operations);

        return true;
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
        $model = new BspAdvertising;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['BspAdvertising'])) {
            $model->attributes = $_POST['BspAdvertising'];

            //making instance of the uploaded image 
            $img_file = DTUploadedFile::getInstance($model, 'adv_img');
            $model->adv_img = $img_file;

            //making instance of the uploaded image 
            $img_file_de = DTUploadedFile::getInstance($model, 'adv_img_de');
            $model->adv_img_de = $img_file_de;

            if ($model->save()) {

                $upload_path = DTUploadedFile::creeatRecurSiveDirectories(array("adv_img", $model->id));
                if (!empty($img_file)) {
                    $img_file->saveAs($upload_path . $img_file->name);
                }

                $upload_path = DTUploadedFile::creeatRecurSiveDirectories(array("adv_img_de", $model->id));
                if (!empty($img_file_de)) {
                    $img_file_de->saveAs($upload_path . $img_file_de->name);
                }

                $this->redirect(array('view', 'id' => $model->id));
            }
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
        $old_en_image = $model->adv_img;
        $old_de_image = $model->adv_img_de;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['BspAdvertising'])) {
            $model->attributes = $_POST['BspAdvertising'];

            //making instance of the uploaded image 
            $img_file_en = DTUploadedFile::getInstance($model, 'adv_img');
            if (!empty($img_file_en)) {
                $model->adv_img = $img_file_en;
            } else {
                $model->adv_img = $old_en_image;
            }

            $img_file_de = DTUploadedFile::getInstance($model, 'adv_img_de');
            if (!empty($img_file_de)) {
                $model->adv_img_de = $img_file_de;
            } else {
                $model->adv_img_de = $old_de_image;
            }

            if ($model->save()) {

                $upload_path = DTUploadedFile::creeatRecurSiveDirectories(array("adv_img", $model->id));
                if (!empty($img_file_en)) {
                    $img_file_en->saveAs($upload_path . $img_file_en->name);
                }

                $upload_path = DTUploadedFile::creeatRecurSiveDirectories(array("adv_img_de", $model->id));
                if (!empty($img_file_de)) {
                    $img_file_de->saveAs($upload_path . $img_file_de->name);
                }

                $this->redirect(array('view', 'id' => $model->id));
            }
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
     * Manages all models.
     */
    public function actionIndex() {
        $model = new BspAdvertising('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['BspAdvertising']))
            $model->attributes = $_GET['BspAdvertising'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return BspAdvertising the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = BspAdvertising::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param BspAdvertising $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'bsp-advertising-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
