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
        $this->render("//user/register", array("model" => $model));
    }

}