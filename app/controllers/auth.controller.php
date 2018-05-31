<?php
class authController extends BaseController{

    function index()
    {
        // TODO: Implement index() method.
        global $get;
        $params = array(
            "AAAAAA"
        );
        print_r($get->explore_get("http://localhost:4000/api/v1/auth/token", $params));
    }

    function login(){
        $this->view->show("auth/auth.login");
        $this->renderView("main", "footer");
    }
    function register(){
        $this->view->show("auth/auth.register");
        $this->renderView("main", "footer");
    }

    function recover_password(){
        $this->view->show("auth/auth.recover-password");
        $this->renderView("main", "footer");
    }
}