<?php
class indexController extends BaseController {

    function __construct(){
        parent::__construct();
        if(isset($_SESSION['token'])){
            $this->redirect("auth", "login");
        }
    }
    //overidde method abstract
    function index()
    {
        $this->view->show("index");
        $this->renderView("main", "footer");
    }

    function about(){
        echo "about";
    }
}
