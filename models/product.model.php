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
}