<?php
class MenuModel extends BaseModel {
    function getAll(){
        global $get;
        return json_decode($get->normal_get(API_CATEGORY_ALL));
    }
    function add($formData){
        global $post;
        return $post->send($formData, API_CATEGORY);
    }
    function getChild(){
        global $get;
        return json_decode($get->normal_get(API_CATEGORY_CHILD));
    }
}