<?php

/**
 * @author :Ali Abbas
 * @version : since 1.1
 * 
 * Purpose of this class to 
 * make common filter 
 * for all modules 
 * that having custom views
 *   
 */
Yii::import('zii.widgets.CPortlet');

class ItstCustomViewFilter extends CPortlet {

    public $view_name, $ajax;
    public $model;
    public $action;
    public $grid_id;

    public function init() {
        parent::init();
    }

    protected function renderContent() {
        if (!empty($this->view_name)) {
            $this->render($this->view_name);
        }
    }

}

?>
