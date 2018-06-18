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

    function upload_file()
    {
        global $post;
        print_r($post->sendFile($_FILES, array(
            "hello" => "SOn Hoai"
        )));
    }

    function about()
    {
        echo "about";
    }

    function chat()
    {

    }
}
