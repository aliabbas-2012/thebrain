<?php

/**
 * PARJUIDatePicker
 * 
 * What 
 * it is a component extending zii.widgets.jui.CJuiDatePicker class
 * and why 
 * to assign the class after validation of current attribute having errors
 *
 * @author Ali Abbas <itsgeniusstar@gmail.com>
 * @copyright Copyright &copy; 2010 Christoffer Niska
 */  
Yii::import('zii.widgets.jui.CJuiDatePicker');

class ItstJUIDatePicker extends CJuiDatePicker
{

    public $error = 'error';
    public $model_attribute;
    
    function run()
    {
       
        if (count($this->model->getErrors($this->model_attribute)) > 0)
        {
            $this->htmlOptions['class'] = $this->error;
        }
        
        parent::run();
    }

}

?>
