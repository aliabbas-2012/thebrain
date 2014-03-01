<?php

/**
 * 
 */
class UserdataController extends Controller {

    public $_user;
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
                    'ratings',
                    'paymentdetail'
                ),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'store'
                ),
                'users' => array('*'),
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
    public function actionPayment($type = "wallet") {
        switch ($type) {
            case "wallet":
                $this->handleWalletPayment();
                break;
            case "statements":
                $this->handleStatment();
                break;
            case "invoices":
                $this->handleInvoices();
                break;
            case "transactions":
                $this->handleTransactions();
                break;
        }
    }

    /**
     * handle wallet payment here
     * of user
     */
    public function handleWalletPayment() {
        $wallet_data = BspOrder::model()->getMyPaymentAmount();

        $this->render("//userdata/payment", array("type" => "wallet", "wallet_data" => $wallet_data));
    }

    /**
     * handle wallet payment here
     * of user
     */
    public function handleStatment() {
        $statmentProvider = BspOrder::model()->getStatmentDataProvider();
        $this->render("//userdata/statment", array("type" => "statements", "dataProvider" => $statmentProvider));
    }

    /**
     * handle invoices here
     * of user
     */
    public function handleInvoices() {
        $model = new BspOrder;
        if (isset($_GET['BspOrder'])) {
            $model->attributes = $_GET['BspOrder'];
        }
        $dataProvider = $model->getInvoices();
        $this->render("//userdata/invoices", array(
            "type" => "invoices",
            "dataProvider" => $dataProvider,
            "model" => $model
        ));
    }

    /**
     * handle Transaction here
     * of user
     */
    public function handleTransactions() {
        $model = new BspOrder;
        if (isset($_GET['BspOrder'])) {
            $model->attributes = $_GET['BspOrder'];
        }
        $dataProvider = $model->getTransaction();
        $this->render("//userdata/transaction", array(
            "type" => "transactions",
            "dataProvider" => $dataProvider,
            "model" => $model
        ));
    }

    /**
     * my Settings of particular login user
     */
    public function actionRatings() {
        $sellerComments = BspComment::model()->getSellerComments(Yii::app()->user->id)->getData();
        $buyerComments = BspComment::model()->getBuyerComments(Yii::app()->user->id)->getData();
        $this->render("//userdata/ratings", array("sellerComments" => $sellerComments, "buyerComments" => $buyerComments));
    }

    /**
     * type detail
     * @param type $type
     */
    public function actionPaymentdetail($type = "account") {

        $dataProvider = BspOrder::model()->getPaymentDetail($type);
        $this->renderPartial("//userdata/_payment_detail", array("dataProvider" => $dataProvider));
    }

    /**
     * 
     * @param type $storeurl
     * @param type $id
     * store url 
     */
    public function actionStore($storeurl, $id) {
        $this->_user = $model = Users::model()->findByPk($id);
        $this->render("//userdata/store",array("model"=>$model));
    }

}