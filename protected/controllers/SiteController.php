<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $this->layout = "column1";
        if (Yii::app()->user->isGuest) {
            $this->layout = "column1";
            $this->redirect($this->createUrl("/site/login"));
        }
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->layout = "//layouts/column1";
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
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * 
     * @param UploadTemp $model
     * @param type $attribute
     */
    public function actionUploadTemp($model, $attribute) {
        $module = $model;
        if (isset($_REQUEST['action']) && $_REQUEST['action'] == "remove") {
            $path = $upload_path = DTUploadedFile::getFolderPath(array("temp", Yii::app()->user->id, $module));
            //in case of attribute 
            if (!empty($attribute)) {
                $path = DTUploadedFile::getFolderPath(array("temp", Yii::app()->user->id, $module, $attribute));
            }
            if (is_file($path . $_REQUEST['fileNames'])) {
                unlink($path . $_REQUEST['fileNames']);
            }
            echo CJSON::encode(array("success" => $_REQUEST['fileNames']));
        } else {
            $model = new UploadTemp();

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST)) {
                /**
                 * in this multiple instance are loaded
                 */
                if (isset($_REQUEST['index'])) {
                    foreach ($_POST as $post) {
                        $model->upload_temp_image = $post;
                    }
                    $img_file = DTUploadedFile::getInstance($model, '[' . $_REQUEST['index'] . ']upload_temp_image');
                } else {
                    $model->upload_temp_image = $_POST;
                    $img_file = DTUploadedFile::getInstance($model, 'upload_temp_image');
                }

                //making instance of the uploaded image 


                $model->upload_temp_image = $img_file;
                if ($model->validate()) {
                    if (!empty($attribute)) {
                        $upload_path = DTUploadedFile::creeatRecurSiveDirectories(array("temp", Yii::app()->user->id, $module, $attribute));
                    } else {
                        $upload_path = DTUploadedFile::creeatRecurSiveDirectories(array("temp", Yii::app()->user->id, $module));
                    }
                    if (!empty($img_file)) {
                        $img_file->saveAs($upload_path . str_replace(" ","_",$img_file->name));
                        echo json_encode(array('file' => str_replace(" ","_",$img_file->name), "path" => $upload_path, "attribute" => $attribute));
                    }
                }
            }
        }
    }

    /**
     * 
     * @param type $id
     * @param type $model
     * @param type $attribute
     */
    public function actionDeleteTemp($id, $model, $attribute) {
        if (!empty($model)) {

            $model = new $model;
            $model = $model->updateByPk($id, array($attribute => ""));
            echo "";
        }
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}