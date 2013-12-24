<?php

/**
 * 
 */
class UserController extends Controller {

    /**
     * 
     */
    public function actionRegister() {
        $model = new RegisterUsers;
        if (isset($_POST['RegisterUsers'])) {
            $model->attributes = $_POST['RegisterUsers'];
            if($model->save()){
                
            }
        }
        $this->render("//user/register", array("model" => $model));
    }

}