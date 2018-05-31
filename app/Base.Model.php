<?php

class BaseModel
{
    private static  $instance;

    function __construct()
    {

    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new BaseModel();
        }

        return self::$instance;
    }

    public function get($name){
        $file = __SITE_PATH."/models/".$name.".model.php";
        if(file_exists($file)){
            include_once ($file);
            $class = str_replace("model","",strtolower($name))."Model";
            return new $class;
        }
        return null;
    }
}