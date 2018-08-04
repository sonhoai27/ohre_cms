<?php
class CategoryModel extends BaseModel{
    function allBrand(){
        global $get;
        return $get->normal_get(API_BRAND);
    }
    function brand($id){
        global $get;
        return $get->explore_get(API_BRAND, [$id]);
    }
    function editBrand($form,$id){
        global $put;
        return $put->headerSend($form, array(
            "access_token: ".$_SESSION['user_token']
        ),$id,API_BRAND);
    }
    function deleteBrand($id){
        global $delete;
        return $delete->explore_get(API_BRAND, [$id]);
    }
    function addStatus($form){
        global $post;
        return $post->send($form,API_STATUS);
    }
    function editStatus($form, $id){
        global $put;
        return $put->send($form, $id, API_STATUS);
    }
    function listStatus(){
        global $get;
        return $get->normal_get(API_STATUS);
    }
    function status($id){
        global $get;
        return $get->explore_get(API_STATUS, [$id]);
    }
    function deleteStatus($id){
        global $delete;
        return $delete->explore_get(API_STATUS, [$id]);
    }
}