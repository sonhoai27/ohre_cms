<?php
function resizeImage($src, $size = 10){
    if($src != null && $size != null){
        header('Content-Type: image/jpeg');
        $image = new ImagePHP(RESOURCE.$src);
        $image->scale($size);
        $image->output();
    }
}

function NULLABLE($data){
    if($data == ''){
        return 'null';
    }else return $data;
}

function isPost(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        return true;
    }else {
        return false;
    }
}