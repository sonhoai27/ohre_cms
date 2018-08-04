<?php

class Put
{
    function send($form,$idEdit,$apiUrl)
    {
        $payload = json_encode($form);

        $ch = curl_init($apiUrl."/".$idEdit);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json'
            )
        );
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
    function headerSend($form,$headers = array(), $idEdit,$apiUrl)
    {
        $payload = json_encode($form);
        $header = ['Content-Type: application/json'];
        foreach ($headers as $item){
            array_push($header, $item);
        }
        $ch = curl_init($apiUrl."/".$idEdit);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header
        );
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}