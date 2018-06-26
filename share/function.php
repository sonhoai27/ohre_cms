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