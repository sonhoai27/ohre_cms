<?php

class indexController extends BaseController
{

    function __construct()
    {
        parent::__construct();
        $this->checkLogin();
    }

    //overidde method abstract
    function index()
    {
        $this->view->render("index");
        $this->renderView("main", "footer");
    }

    function load_image()
    {
        if(isset($_GET['src'])){
            resizeImage($_GET['src']);
        }else {
            $this->redirect("index");
        }
    }

    function about()
    {
        echo "about";
    }

    function chat()
    {

    }
}
