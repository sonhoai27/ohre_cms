<?php
Abstract class BaseController
{
    protected $model;
    protected $view;

    function __construct()
    {
        $this->model = BaseModel::getInstance();
        $this->view = BaseView::getInstance();
    }

    function renderView($controller,$name = "", $custom = ""){
        $custom = empty($custom) ? "" : $custom."/";
        $path = __SITE_PATH . '/app/controllers' . '/'.$custom. $controller  . '.controller.php';

        if (file_exists($path) == false)
        {
            throw new Exception('Template not found in '. $path);
            return false;
        }

        include_once ($path);
        $class = $controller.'Controller';
        $function = new $class();
        $action = explode('/',$name);

        if(count($action)>1){
            for($i = 1;$i<count($action);$i++){
                $arr[$i-1]=$action[$i];
            }
            $temp = $action[0];
            $function->$temp($arr);
        }else{
            $temp = $action[0];
            $function->$temp();
        }
    }

    function redirect($controller,$name = ""){
        if (headers_sent()) {
            die("Redirect failed. Please click on this link: <a href=".BASE_URL."/".$controller."/".$name.">Link</a>");
        }
        else{
            exit(header("Location: ".BASE_URL.$controller."/".$name));
        }
    }
    abstract function index();
}