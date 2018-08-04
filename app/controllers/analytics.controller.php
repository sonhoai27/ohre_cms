<?php
class AnalyticsController extends BaseController {

    function index()
    {
        $this->view->render("analytics/analytics.all");
        $this->renderView("main", "footer");
    }

    function user(){
        $this->view->render("analytics/analytics.user");
        $this->renderView("main", "footer");
    }
    // handle
    function detailDayAnalyticsChart(){
        if(isPost()){
            if(isset($_POST['day'])){
                $model = $this->model->get('analytics');
                print_r($model->detailDayAnalyticsChart($_POST['day']));
            }else {
                print_r(json_encode(array(
                    "message"=>"error"
                )));
            }
        }
    }
    function detailMonthAnalyticsChart(){
        if(isPost()){
            if(isset($_POST['month'])){
                $model = $this->model->get('analytics');
                print_r($model->detailMonthAnalyticsChart($_POST['month']));
            }else {
                print_r(json_encode(array(
                    "message"=>"error"
                )));
            }
        }
    }
    function detailYearAnalyticsChart(){
        if(isPost()){
            if(isset($_POST['year'])){
                $model = $this->model->get('analytics');
                print_r($model->detailYearAnalyticsChart($_POST['year']));
            }else {
                print_r(json_encode(array(
                    "message"=>"error"
                )));
            }
        }
    }
    function topHot10(){
        if(isPost()){
            if(isset($_POST['date'])){
                $model = $this->model->get('analytics');
                print_r($model->topHot10($_POST['date'], $_POST['url']));
            }
        }
    }

    // user

    function detailDayAnalyticsUser(){
        if(isPost()){
            if(isset($_POST['date'])){
                $model = $this->model->get('analytics');
                print_r($model->detailDayAnalyticsUser($_POST['date'], $_POST['url']));
            }else {
                print_r(json_encode(array(
                    "message"=>"error"
                )));
            }
        }else {
            print_r(json_encode(array(
                "message"=>"error"
            )));
        }
    }
}
