<?php

class Delete{
    function query_get($url,$params = array()){
        static $isOne = false;
        $param = '';

        for($i = 0; $i < count($params);$i++){
            if(!$isOne){
                $param .='?'.$params[$i];
                $isOne = true;
            }
            $param .='&'.$params[$i];
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url.$param);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        return json_decode($output);
        curl_close($ch);
    }

    function explore_get($url, $params = array()){
        $param = '';

        for($i = 0; $i < count($params);$i++){
            $param .='/'.$params[$i];
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url.$param);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        return json_decode($output);
        curl_close($ch);
    }
    function normal_get($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'access_token: aaaaaaaa'
            )
        );
        $output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        return json_decode($output);
        curl_close($ch);
    }
}