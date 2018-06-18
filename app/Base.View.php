<?php

class BaseView
{
    private static  $instance;
    public $data = array();
    function __construct()
    {

    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new BaseView();
        }

        return self::$instance;
    }

    public function render($name){
        $file = __SITE_PATH."/views/".$name.".view.php";
        if(!file_exists($file)){
            throw new Exception("Not found view ".$name);
            return false;
        }
        foreach ($this->data as $key => $value)
        {
            $$key = $value; //chuyển 1 $key thành 1 biến
        }
        include_once ($file);
    }

}