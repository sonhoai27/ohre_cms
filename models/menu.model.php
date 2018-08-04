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
    function detail($id){
        global $get;
        return $get->explore_get(API_CATEGORY, [$id]);
    }
    function update($form, $id){
        global $put;
        return $put->send($form, $id, API_CATEGORY);
    }
    function delete($id){
        global $delete;
        return $delete->explore_get(API_CATEGORY, [$id]);
    }
}