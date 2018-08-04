<?php
class AccountModel extends BaseModel{
    function login($formLogin = array()){
        global $post;
        return $post->send($formLogin, API."auth/login");
    }
    function checkToken($token){
        global $post;
        return $post->headerSend(null,array(
            "access_token: ".$token
        ), API_CHECK_TOKEN);
    }
    function register($form){
        global $post;
        return $post->send($form, API."auth/register");
    }
    function activeAccount($email, $key){
        global $get;
        return $get->explore_get(API."auth/active-account",[$email, $key]);
    }
    function allGuestUser(){
        global $get;
        return ($get->normal_get(ALLGUESTUSERS));
    }
    function detailGeustUser($id){
        global $get;
        return $get->explore_get(ALLGUESTUSERS, [$id]);
    }
}