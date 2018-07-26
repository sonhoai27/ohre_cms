<?php
define("API", 'http://localhost:4000/api/v1/');
define("RESOURCE", 'http://localhost:4000/');
define("API_LOGIN", API."auth/login");
define("API_REGISTER", API."auth/register");
define("API_CONFIRM_EMAIL", API."auth/register");
define("API_CHECK_TOKEN", API."auth/check-token");

define("API_GET_STATUS", API."status/all");
define("API_SHOP", API."shop");
define("PRODUCTS_PRODUCT_ALL", API."product/all");
define("PRODUCTS_PRODUCT_TIKI", API."product/tiki");
define("PRODUCTS_PRODUCT_DIDONGTHONGMINH", API."product/didongthongminh");
define("PRODUCTS_PRODUCT_ADAYROI", API."product/adayroi");
define("PRODUCTS_PRODUCT_TGDD", API."product/tgdd");
define("API_PRODUCT_DETAIL", API."product/");
define("API_PRODUCT_CRAWLER", API."product/config/crawler");


//category api
define("API_CATEGORY_ALL", API."menu/all");
define("API_CATEGORY", API."menu");
define("API_CATEGORY_CHILD", API."menu/child");


//group api
define("GROUP_ADD", API."product/group/add");
define("GROUP_DETAIL", API."product/group/detail");
define("API_GROUP_ALL", API."product/group/all");
define("API_GROUP_PRODUCT_SEARCH", API."product/group/search");
define("API_GROUP_ADD_DETAIL", API."product/group/add-detail");
define("API_GROUP_DETAIL", API."product/group/product");
define("API_PRODUCT_CONFIG", API."product/config");
//category

define("CATEGORY_MENU", BASE_URL."category/menu");
define("CATEGORY_MENU_ADD", BASE_URL."category/menu_add_handle");
define("CATEGORY_SHOP", BASE_URL."category/shop");
define("CATEGORY_BRAND", BASE_URL."category/brand");
define("CATEGORY_STATUS", BASE_URL."category/status");
define("CATEGORY_GROUP", BASE_URL."category/group");


//product
define("PRODUCTS_PRODUCT", BASE_URL."products/product");
define("PRODUCTS_GROUP", BASE_URL."products/group");
define("PRODUCT_DETAIL", BASE_URL."products/detail_handle");
define("PRODUCTS_CONFIG", BASE_URL."products/config");
define("PRODUCTS_DETAIL_CONFIG", BASE_URL."products/detail_config");

define("HOMEANALYTICSNORMAL", API.'collection/analytics/home/normal');
