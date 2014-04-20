<?php

class ConfigurationsController extends Controller {

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
        $this->layout = "column2";
        $model = new PaymentPaypallAdaptive('search');
        $criteria = new CDbCriteria();
        $dataProvider = new CActiveDataProvider('PaymentPaypallAdaptive', array(
            'criteria' => $criteria,
        ));
        $this->render("payment/notifications", array(
            "dataProvider" => $dataProvider,
            "model" => $model,
        ));
    }

}
