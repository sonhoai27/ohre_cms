<?php
include __SITE_PATH . '/app/' . 'Base.Model.php';
include __SITE_PATH . '/app/' . 'Base.Controller.php';
include __SITE_PATH . '/app/' . 'Base.View.php';
include __SITE_PATH . '/app/' . 'Route.php';
include __SITE_PATH . '/constant/' . 'URL.php';

include __SITE_PATH . '/share/' . 'Get.php';
include __SITE_PATH . '/share/' . 'Post.php';
include __SITE_PATH . '/share/' . 'Delete.php';
include __SITE_PATH . '/share/' . 'Put.php';
include __SITE_PATH . '/share/' . 'pagination.php';
include __SITE_PATH . '/share/' . 'ImagePHP.php';
include __SITE_PATH . '/share/' . 'function.php';
$post = new Post();
$get = new Get();
$delete = new Delete();
$put = new Put();
?>