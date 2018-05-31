<?php

$sitePath = realpath(dirname(__FILE__));
define("__SITE_PATH", $sitePath);
define("BASE_URL", 'http://localhost:8080/ohre/');
include_once ('./share/init.php');
$route = new Route();
$route->setPath(__SITE_PATH.'\app\controllers');
$route->loader();
