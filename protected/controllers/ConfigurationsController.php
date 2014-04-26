<?php

class ConfigurationsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $filters;

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

        $operations = array('create', 'update', 'index', 'delete', 'payPallSettings');
        parent::setPermissions($this->id, $operations);

        return true;
    }

    /**
     * Conf default page.
     */
    public function actionIndex() {
        $this->render('index');
    }

    /**
     * Load Configuration
     * 
     * @param <string> $m (Model name without Conf)
     * @param <int> $id
     */
    public function actionLoad($m, $id = 0, $module = '') {
        /* Complete Model name */
        $model_name = 'Conf' . $m;
//        echo $model_name;die;   

        /* For add new or update */
        $model = new $model_name;

        if ($id != 0) {
            $model = $model->findByPk($id);
        }
//        echo $model->confViewName;
//        exit;
        /* Perform ajax validation */
//        $this->performAjaxValidation($model);

        /* if form is posted */

        if (isset($_POST[$model_name])) {
            /* Assign attributes */

            $model->attributes = $_POST[$model_name];

            /* Save record */
            if ($model->save())
                $this->redirect(array('load', 'm' => $m, 'module' => $module));
        }

        $this->render($model->confViewName, array('model' => $model, 'm' => $m, 'module' => $module));
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {


        if (isset($_POST['ajax']) && $_POST['ajax'] === 'project-form') {
            //echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Set comments for appSettng action 
     */
    public function actionAppSettings() {
        /* Complete Model name */
        $model = new ConfMisc();

        $this->render("appSettings/index", array('model' => $model));
    }

    /**
     * 
     * paypall settings
     */
    public function actionPayPallSettings($id = 0) {
        if ($id != 0) {
            $model = Paypalsettings::model()->findByPk($id);
            if (isset($_POST['Paypalsettings'])) {
                $model->attributes = $_POST['Paypalsettings'];
                if ($model->save()) {
                    $this->redirect($this->createUrl('/configurations/payPallSettings', array('id' => 2)));
                }
            }
            $this->render("paypallsettings/index", array("model" => $model));
        }
    }

    /**
     * show all payments
     */
    public function actionPaymentNotifications() {

        $transfer_Model = new AdminPaymentTransfer();
        $this->filters = array(
            'buyer_status' => array(
                "initiated" => "Initiated",
                "completed" => "Completed",
                "paying" => "Paying",
                "cancelled" => "Cancelled",
            ),
            'seller_status' => array(
                "Rejected" => "rejected", "confirmed" => "Confirmed",
                "completed" => "Completed"),
            'puzzzle_admin_status' => array("initiated" => "Initiated", "tranfered" => "Tranfered"),
        );

        $this->layout = "column2";
        $model = new PaymentPaypallAdaptive('search');
        $criteria = new CDbCriteria();
        if (isset($_GET['PaymentPaypallAdaptive'])) {
            $model->attributes = $_GET['PaymentPaypallAdaptive'];
            $criteria->compare('buyer_status', $model->buyer_status);
            $criteria->compare('seller_status', $model->seller_status);
            $criteria->compare('puzzzle_admin_status', $model->puzzzle_admin_status);
        }

        $dataProvider = new CActiveDataProvider('PaymentPaypallAdaptive', array(
            'criteria' => $criteria,
        ));

        //transfer money
        if (isset($_POST['AdminPaymentTransfer'])) {
            $transfer_Model->attributes = $_POST['AdminPaymentTransfer'];
            $transfer_Model->selection = isset($_POST['id']) ? $_POST['id'] : "";
            if ($transfer_Model->validate()) {
                $url = $transfer_Model->transferMoney($transfer_Model->selection);
                if ($url != "") {
                    $this->redirect($url);
                } else {
                    Yii::app()->user->setFlash("error", "Some things not completed pleas try again");
                    $this->redirect($this->createUrl("/configurations/paymentNotifications"));
                }
            }
        }

        $this->render("payment/notifications", array(
            "dataProvider" => $dataProvider,
            "model" => $model,
            "transfer_Model" => $transfer_Model
        ));
    }

    /**
     * 
     * @param type $ids
     */
    public function actionNotificationConfirm($ids = "") {
        $ids = explode(",", $ids);

        foreach ($ids as $id) {
            $model = PaymentPaypallAdaptive::model()->findByPk($id);
            Yii::app()->user->setFlash("success", "Payment has been Transfered");
            $model->updateByPk($id, array("puzzzle_admin_status" => "tranfered"));
            $model = PaymentPaypallAdaptive::model()->findByPk($id);
            $model->saveHistory();
            $this->redirect($this->createUrl("/configurations/paymentNotifications"));
        }
    }

    /**
     * 
     * @param type $ids
     */
    public function actionNotificationCancel($ids = "") {
        $ids = explode(",", $ids);

        foreach ($ids as $id) {
            $model = PaymentPaypallAdaptive::model()->findByPk($id);
            Yii::app()->user->setFlash("error", "Some things not completed pleas try again");
            $this->redirect($this->createUrl("/configurations/paymentNotifications"));
        }
    }

}
