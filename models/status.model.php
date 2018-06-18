<?php
class StatusModel extends BaseModel {
    function getStatus(){
        global $get;
        return json_decode($get->normal_get(API_GET_STATUS));
    }
}