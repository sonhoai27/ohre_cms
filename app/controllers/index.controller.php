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
        $model = $this->model->get('analytics');
        $this->view->data['homeAnalyticsNormal'] = $model->homeAnalyticsNormal(array(
            "day"=>24,
            "month"=>7,
            "year"=>2018
        ));
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
