<?php
class AnalyticsModel extends BaseModel {
    function homeAnalyticsNormal($form){
        global $post;
        return json_decode($post->send($form, HOMEANALYTICSNORMAL));
    }
}