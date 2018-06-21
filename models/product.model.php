<?php
class ProductModel extends BaseModel {
    function getAll($page = 1){
        global $get;
        $pg = ($page - 1)*20;
        return json_decode($get->explore_get(PRODUCTS_PRODUCT_ALL, [$pg]));
    }
    function detail($id){
        global $get;
        return $get->explore_get(API_PRODUCT_DETAIL, [$id]);
    }
    function addGroup($group){
        global $post;
        return json_decode($post->send($group, GROUP_ADD));
    }
    function groups(){
        global $get;
        return json_decode($get->normal_get(API_GROUP_ALL));
    }
    function detailGroup($alias){
        global $get;
        return json_decode($get->explore_get(GROUP_DETAIL, [$alias]));
    }
    function addProductToGroup(){

    }
    function searchProduct($keyword, $idGroup){
        global $get;
        $result = ($get->explore_get(API_GROUP_PRODUCT_SEARCH, [str_replace(" ", "%20",$keyword), $idGroup]));
        if(!isset($result->error->message)){
            return json_decode($result);
        }else {
            return "";
        }
    }
    function addProductGroup($form){
        global $post;
        return ($post->send($form, API_GROUP_ADD_DETAIL));
    }
    function deleteProductGroup($idGroup, $idProduct){
        global $delete;
        return ($delete->explore_get(API_GROUP_DETAIL, [$idGroup, $idProduct]));
    }
}