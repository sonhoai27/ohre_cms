<?php
class ShopModel extends BaseModel{
    function getAll(){
        global $get;
        $resultShops = $get->normal_get(API_SHOP);
        if($resultShops!="ERROR"){
            return json_decode($resultShops);
        }
    }
}