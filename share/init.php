<?php
include __SITE_PATH . '/app/' . 'Base.Model.php';
include __SITE_PATH . '/app/' . 'Base.Controller.php';
include __SITE_PATH . '/app/' . 'Base.View.php';
include __SITE_PATH . '/app/' . 'Route.php';
include __SITE_PATH . '/constant/' . 'URL.php';

include __SITE_PATH . '/share/' . 'Get.php';
include __SITE_PATH . '/share/' . 'Post.php';
include __SITE_PATH . '/share/' . 'Delete.php';
include __SITE_PATH . '/share/' . 'pagination.php';
$post = new Post();
$get = new Get();
$delete = new Delete();
?>