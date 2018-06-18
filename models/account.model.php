<?php
class AccountModel extends BaseModel{
    function login($formLogin = array()){
        global $post;
        return $post->send($formLogin, API."auth/login");
    }
    function checkToken($token){
        global $post;
        return $post->headerSend(array(
            "access_token: ".$token
        ), API_CHECK_TOKEN);
    }
}