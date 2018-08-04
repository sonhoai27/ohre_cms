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
    function edit_menu(){
        if(isPost()){
            $form = $_POST;
            $id = $_POST['id'];
            unset($form['id']);
            if(json_decode(($this->model->get('menu')->update(
                    $form,
                    $id
                )))->status==200){
                $this->redirect('category', 'menu');
            }
        }
    }
    function delete_menu(){
        if(isPost()){
            $model = $this->model;
            print_r($model->get("menu")->delete($_POST['id'])->status);
        }
    }

    function detail_menu($args){
        $model = $this->model;
        $this->view->data['menus'] = $model->get("menu")->getAll();
        $this->view->data['detail'] = $model->get('menu')->detail($args[1]);
        $this->view->data['currentIdMenu'] = $this->view->data['detail']->category_parent_id;
        $this->view->render("categories/category.detail-menu");
        $this->renderView("main", "footer");
    }
    function handle_update_menu(){
        if(isPost()){
            $form = $_POST;
            $id = $_POST['category_id'];
            unset($form['category_id']);
            if(json_decode(($this->model->get('menu')->update(
                    $form,
                    $id
                )))->status==200){
                $this->redirect('category', 'menu');
            }
        }
    }
    function shop(){
        $model = $this->model;
        $this->view->data['shops'] = $model->get('shop')->getAll();
        $this->view->render("categories/category.shop");
        $this->renderView("main", "footer");
    }
    function detail_shop($args){
        $model = $this->model;
        $this->view->data['shop'] = $model->get('shop')->detail($args[1]);
        $this->view->render("categories/category.detail-shop");
        $this->renderView("main", "footer");
    }
    function handle_update_shop(){
        if(isPost()){
            $form = $_POST;
            $id = $_POST['shop_id'];
            unset($form['shop_id']);
            if(json_decode(($this->model->get('shop')->update(
                    $form,
                    $id
                )))->status==200){
                $this->redirect('category', 'shop');
            }
        }
    }
    function delete_shop(){
        if(isPost()){
            $model = $this->model;
            print_r($model->get("shop")->delete($_POST['id'])->status);
        }
    }
    function brand(){
        $this->view->data['brands'] = $this->model->get('category')->allBrand();
        $this->view->render("categories/category.brand");
        $this->renderView("main", "footer");
    }
    function detail_brand(){
        if(isPost() && isset($_POST['id'])){
            print_r(json_encode($this->model->get('category')->brand($_POST['id'])));
        }
    }
    function update_brand(){
        if(isPost()){
            $form = $_POST;
            $id = $_POST['id'];
            unset($form['id']);
            if(json_decode(($this->model->get('category')->editBrand(
                    $form,
                    $id
                )))->status==200){
                $this->redirect('category', 'brand');
            }
        }
    }
    function delete_brand(){
        if(isPost()){
            print_r(($this->model->get('category')->deleteBrand($_POST['id']))->status);
        }
    }
    function status(){
        $this->view->data['status'] = $this->model->get('category')->listStatus();
        $this->view->render("categories/category.status");
        $this->renderView("main", "footer");
    }

    function delete_status(){
        if(isPost()){
            print_r(($this->model->get('category')->deleteStatus($_POST['id']))->status);
        }
    }

    function add_status(){
        if(isPost()){
            if(json_decode($this->model->get('category')->addStatus($_POST))->status == 200){
                $this->redirect('category', 'status');
            }
        }
    }
    function detail_status($args){
        $model = $this->model;
        $this->view->data['status'] = $model->get('category')->status($args[1]);
        $this->view->render("categories/category.detail-status");
        $this->renderView("main", "footer");
    }
    function update_status(){
        if(isPost()){
            $form = $_POST;
            $id = $_POST['status_id'];
            unset($form['status_id']);
            if(json_decode(($this->model->get('category')->editStatus(
                    $form,
                    $id
                )))->status==200){
                $this->redirect('category', 'status');
            }
        }
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
