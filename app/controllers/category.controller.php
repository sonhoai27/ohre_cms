<?php
class categoryController extends BaseController{

    function index()
    {
        $this->checkLogin();
        $this->redirect("category", "menu");
    }

    function menu(){
        $model = $this->model;

        $this->view->data['menus'] = $model->get("menu")->getAll();
        $this->view->render("categories/category.menu");
        $this->renderView("main", "footer");
    }
    function shop(){
        $model = $this->model;
        $this->view->data['status']= $model->get("status")->getStatus();
        $this->view->data['shops'] = $model->get('shop')->getAll();
        $this->view->render("categories/category.shop");
        $this->renderView("main", "footer");
    }
    function brand(){
        $this->view->render("categories/category.brand");
        $this->renderView("main", "footer");
    }
    function status(){
        $this->view->render("categories/category.status");
        $this->renderView("main", "footer");
    }


    function menu_add_handle(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $model = $this->model;
            if($_POST == null){
                print_r(json_encode(array(
                    "message"=> "ERROR"
                )));
            }else {
                print_r($model->get("menu")->add($_POST));
            }

        }else {
            print_r(json_encode(array(
                "message"=> "ERROR"
            )));
        }
    }
}
