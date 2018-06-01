<?php
class categoryController extends BaseController{

    function index()
    {
        $this->redirect("category", "menu");
    }

    function menu(){
        $this->view->show("categories/category.menu");
        $this->renderView("main", "footer");
    }
}
