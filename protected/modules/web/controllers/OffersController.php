<?php

/**
 * 
 */
class OffersController extends Controller {

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
                ),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'category',
                ),
                'users' => array('*'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * category search
     */
    public function actionCategory($category = "") {
        $cat_arr = explode("-", $category);
        $criteria = new CDbCriteria();
        $criteria->addCondition("group_id = " . $cat_arr[count($cat_arr) - 1]);
        $dataProvider = new CActiveDataProvider('BspItem', array(
            'criteria' => $criteria,
        ));
        $this->render("//offers/category", array(
            "cat_arr" => $cat_arr,
            "dataProvider" => $dataProvider
        ));
    }

}