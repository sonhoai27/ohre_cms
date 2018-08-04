<?php
class authController extends BaseController{

    function __construct()
    {
        parent::__construct();
    }

    //controller view
    function index()
    {
        $this->redirect("auth", "manager");
    }

    function manager(){
        if(isset($_SESSION['user_token']) && $this->checkToken($_SESSION['user_token'])){
            $model = $this->model->get('account');
            $this->view->data['listUsers'] = $model->allGuestUser();
            $this->view->render("auth/auth.all-user");
            $this->renderView("main", "footer");
        }else {
            $this->redirect("auth", "account");
        }
    }

    function detail_guest_user($args){
        if(isset($args[1])){
            $this->view->data['detail'] = $this->model->get('account')->detailGeustUser($args[1]);
            $this->view->render("auth/auth.detail-user");
            $this->renderView("main", "footer");
        }
    }
    function login(){
        if(isset($_SESSION['user_token']) && $this->checkToken($_SESSION['user_token'])){
            $this->redirect("index");
        }else {
            $this->view->render("auth/auth.login");
            $this->renderView("main", "footer");
        }

    }
    function register(){
        if(isset($_SESSION['user_token']) && $this->checkToken($_SESSION['user_token'])){
            $this->redirect("index");
        }else {
            $this->view->render("auth/auth.register");
            $this->renderView("main", "footer");
        }

    }

    function check_mail(){
        $this->view->render("auth/auth.active-account");
    }
    function recover_password(){
        $this->view->render("auth/auth.recover-password");
        $this->renderView("main", "footer");
    }

    function logout(){
        if(isset($_SESSION['user_token'])){
            unset($_SESSION['user_token']);
            $this->redirect("auth","login");
        }else {
            $this->redirect("auth","login");
        }
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

    function register_handle(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $resLogin = json_decode($this->model->get("account")->register(array(
                "email"=>$_POST['email'],
                "password"=>$_POST['password']
            )));
            if(strcmp("OK",$resLogin->message )==0){
                $this->redirect("auth", "check-mail");
            }else {
                echo "ERROR, Please check your activity";
            }
        }
    }
    function active_account($args = array()){
       if($args){
           $resActive = ($this->model->get("account")->activeAccount($args[1],$args[2]));
           if(strcmp("OK",$resActive->message )==0){
               $_SESSION['user_token'] = $resActive->token;
               $this->redirect("index");
           }else {
               echo "ERROR, Please check your activity";
           }
       }else {
           $this->redirect("auth","login");
       }
    }

}