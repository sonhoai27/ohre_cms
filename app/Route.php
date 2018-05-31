<?php

class Route {
    private $path;
    private $args = array();
    public $file;
    public $controller;
    public $action;

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
       if(is_dir($path)){
           $this->path = $path;
       }else{
           throw new Exception("\n\nERROR".$path."\n\n");
       }
    }

    public function loader(){
        $this->getController();

        if(!is_readable($this->file)){
            $this->file = $this->path.'.controller.php';
            $this->controller = 'error';
        }

        include $this->file;

        $class = $this->controller.'Controller';
        $controller = new $class;

        if(!is_callable(array($controller, $this->action))){
            $action = 'index';
        }else{
            $action = $this->action;
        }
        if(!empty($this->args)){
            $controller->$action($this->args);
        }else{
            $controller->$action();
        }

    }

    private function getController(){
        $route = empty($_GET['url']) ? "" : $_GET['url'];
        if(empty($route)){
            $route = 'index';
        }else {
            $arrayUrl = explode("/", $route);

            $this->controller = $arrayUrl[0];

            $this->action = isset($arrayUrl[1]) ? str_replace("-", "_", $arrayUrl[1]) : "" ;

            if(isset($arrayUrl[2])){
                $countParam = count($arrayUrl);
                $k = 1;
                $param = array();
                for($i = 2; $i < $countParam; $i++){
                    $param[$k++] = $arrayUrl[$i];
                }
                $this->args = $param;
            }
        }

        if(empty($this->controller)){
            $this->controller = 'index';
        }

        if(empty($this->action)){
            $this->action = 'index';
        }
        $this->file = $this->path."/".$this->controller.'.controller.php';
    }
}