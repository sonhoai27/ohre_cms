<?php
class authController extends BaseController{

    function __construct()
    {
        parent::__construct();
        if(isset($_SESSION['user_token']) && $this->checkToken($_SESSION['user_token'])){
            $this->redirect("index");
        }
    }

    //controller view
    function index()
    {
        // TODO: Implement index() method.
        global $get;
        $params = array(
            "AAAAAA"
        );
        print_r($get->explore_get("http://localhost:4000/api/v1/auth/token", $params));
    }

    function login(){
        $this->view->render("auth/auth.login");
        $this->renderView("main", "footer");
    }
    function register(){
        $this->view->render("auth/auth.register");
        $this->renderView("main", "footer");
    }

    function recover_password(){
        $this->view->render("auth/auth.recover-password");
        $this->renderView("main", "footer");
    }

    //controller xy ly, dat den tuan theo
    // name controller + handle
    function login_handle(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST['email'] != null && $_POST['password'] !=null){
                $userInfo = json_decode(file_get_contents('http://ip-api.io/api/json'));
                $resLogin = json_decode($this->model->get("account")->login(array(
                    "email"=>$_POST['email'],
                    "password"=>$_POST['password'],
                    "browser"=>$_SERVER['HTTP_USER_AGENT'],
                    "ip"=>$userInfo->ip,
                    "location"=>$userInfo->region_name.", ".$userInfo->country_name,
                    "geolocation"=>$userInfo->latitude."-".$userInfo->longitude
                )));
                if(strcmp("OK",$resLogin->message )==0){
                    $_SESSION['user_token'] = $resLogin->token;
                    $this->redirect("index");
                }else {
                    print_r(json_encode(array(
                        "message"=>"ERROR"
                    )));
                }

            }else {
                print_r(json_encode(array(
                    "message"=>"ERROR"
                )));
            }
        }else {
            print_r(json_encode(array(
                "message"=>"ERROR"
            )));
        }
    }

    function location_handle(){
        global $get;
        print_r($get->normal_get("http://freegeoip.net/json/"));
    }
}