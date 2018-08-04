<?php
class ShopModel extends BaseModel{
    function getAll(){
        global $get;
        $resultShops = $get->normal_get(API_SHOP);
        if($resultShops!="ERROR"){
            return json_decode($resultShops);
        }
    }
    function update($form, $id){
        global $put;
        return $put->send($form, $id, API_SHOP);
    }
    function detail($id){
        global $get;
        return $get->explore_get(API_SHOP, [$id]);
    }
    function delete($id){
        global $delete;
        return $delete->explore_get(API_SHOP, [$id]);
    }
}