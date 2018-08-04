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
        $currentDay = explode('-', date("d-m-Y"));
        $this->view->data['homeAnalyticsNormal'] = $model->homeAnalyticsNormal(array(
            "day"=>$currentDay[0],
            "month"=>$currentDay[1],
            "year"=>$currentDay[2]
        ));
        $this->view->data['homeAnalyticsTop10'] = $model->homeAnalyticsTop10();
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

    // handle load chart of home index
    function homeAnalyticsChart(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['weekListDays'])){
                $model = $this->model->get('analytics');
                print_r($model->homeAnalyticsChart($_POST['weekListDays']));
            }else {
                print_r(json_encode(array(
                    "status"=>403,
                    "message"=>"error, no found weekListDays!"
                )));
            }
        }
    }
}
