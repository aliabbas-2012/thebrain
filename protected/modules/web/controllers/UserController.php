<?php

/**
 * 
 */
class UserController extends Controller {

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
                    'changepass',
                    'profile',
                    'profileview',
                    'saveItemLog',
                    'dashboard',
                    'messages',
                    'sendReview'
                ),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'forgetPass',
                    'resetPass',
                    'register',
                    'registerPopup',
                    'login'
                ),
                'users' => array('?'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Register User
     */
    public function actionRegister() {
        $model = new RegisterUsers;
        if (isset($_POST['RegisterUsers'])) {
            $model->attributes = $_POST['RegisterUsers'];
            $model->type = "non-admin";
            if ($model->save()) {
                $itst = new ItstFunctions;
                $key = $itst->getRanddomeNo(25);
                $model->updateByPk($model->id, array("email_authenticate" => $key));
                $body = "Reset your link <br/>";
                $url = $this->createAbsoluteUrl("/web/user/resetPass", array("id" => $model->id, "key" => $key));
                $body.= CHtml::link($url, $url);
                $email['From'] = Yii::app()->params->adminEmail;
                $email['FromName'] = Yii::app()->name;
                $email['To'] = $model->user_email;
                $email['Subject'] = "Reset your link";
                $email['Body'] = $body;
                $email['Body'] = $this->renderPartial('//common/_email_template', array('email' => $email), true, false);

                $this->sendEmail2($email);

                Yii::app()->user->setFlash("success", "Reset Link has been sent successfully");
                $this->redirect($this->createUrl("/web/user/register"));
            }
        }

        $this->render("//user/register", array("model" => $model));
    }

    /**
     * register User for pop up
     */
    public function actionRegisterPopup() {
        $model = new RegisterUsers;
        if (isset($_POST['RegisterUsers'])) {
            $model->attributes = $_POST['RegisterUsers'];
            $model->type = "non-admin";
            if ($model->save()) {
                $itst = new ItstFunctions;
                $key = $itst->getRanddomeNo(25);
                $model->updateByPk($model->id, array("email_authenticate" => $key));
                $body = "Reset your link <br/>";
                $url = $this->createAbsoluteUrl("/web/user/resetPass", array("id" => $model->id, "key" => $key));
                $body.= CHtml::link($url, $url);
                $email['From'] = Yii::app()->params->adminEmail;
                $email['FromName'] = Yii::app()->name;
                $email['To'] = $model->user_email;
                $email['Subject'] = "Reset your link";
                $email['Body'] = $body;
                $email['Body'] = $this->renderPartial('//common/_email_template', array('email' => $email), true, false);

                $this->sendEmail2($email);

                Yii::app()->user->setFlash("success", "Reset Link has been sent successfully");
            }
        }

        $this->renderPartial("//user/_register_pop", array("model" => $model));
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

            $this->render('//user/changepass', array('model' => $model));
        }
    }

    /**
     *  change profile
     */
    public function actionProfile($source = "") {

        $model = Users::model()->findByPk(Yii::app()->user->id);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];

            if ($model->save()) {
                if ($source == "notify") {

                    $this->redirect($this->createUrl("/web/offers/notifcations"));
                } else if ($source != "") {
                    $this->redirect($this->createUrl("/web/offers/notificationdetail",array("id"=>$source)));
                } else {
                    $this->redirect($this->createUrl("/web/user/profileview"));
                }
            }
        }

        $this->render("//user/profile", array("model" => $model));
    }

    /**
     * 
     */
    public function actionProfileview() {
        $model = Users::model()->findByPk(Yii::app()->user->id);

        $this->render("//user/profileview", array("model" => $model));
    }

    /**
     * Displays the login page
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
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('//user/login', array('model' => $model));
    }

    /**
     * forget password
     */
    public function actionForgetPass() {

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
        $this->render('//user/forget', array('model' => $model));
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
                    $this->redirect($this->createUrl("/web/default/index"));
                }
            }
            $this->render('//user/resetPass', array('model' => $model));
        } else {
            echo "Invalid Key";
        }
    }

    /**
     * saving item likes
     * wish list
     * @param type $action
     * @param type $item_id
     */
    public function actionSaveItemLog($action, $item_id) {
        switch ($action) {
            case "like":
                $model = new BspItemLike;
                $model->item_id = $item_id;
                $model->user_id = Yii::app()->user->id;
                $model->save();
                break;
            case "favrout":
                $model = new BspFarvorite;
                $model->item_id = $item_id;
                $model->user_id = Yii::app()->user->id;
                $model->save();
                break;
        }
    }

    /**
     * User Dashboard
     */
    public function actionDashboard() {

        $this->render("//user/dashboard");
    }

    /**
     *  inbox and sent messages
     * @param type $type
     */
    public function actionMessages($type = "inbox") {
        $this->render("//user/messages", array('type' => $type));
    }

    /**
     * send review to user
     * comments and ratings
     * @param type $id
     * @param type $item_id
     */
    public function actionSendReview($id, $item_id = "") {
        $model = new BspComment;

        if (isset($_POST['BspComment'])) {
            $model->attributes = $_POST['BspComment'];
            $model->item_id = $item_id;
            $model->order_id = $id;
            $model->objType = 0;
            if ($item_id != "") {
                $model->user_id = BspItem::model()->findByPk($item_id)->user_id;
            }

            if ($model->save()) {
                //set flash
                Yii::app()->user->setFlash("success", "Your Review and rating has been sent");
            }
        }
        $this->renderPartial("//user/_send_review", array("id" => $id, "item_id" => $item_id, "model" => $model));
    }

}