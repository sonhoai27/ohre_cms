<?php
class AnalyticsModel extends BaseModel {
    function homeAnalyticsNormal($form){
        global $post;
        return json_decode($post->send($form, HOMEANALYTICS.'normal'));
    }
    function homeAnalyticsChart($weekListDays){
        global $post;
        return $post->send($weekListDays, HOMEANALYTICS.'chart');
    }
    function homeAnalyticsTop10(){
        global $get;
        return $get->normal_get(HOMEANALYTICS.'top10');
    }
    function detailDayAnalyticsChart($form){
        global $post;
        return $post->send($form, DETAILANALYTICS.'day');
    }
    function detailMonthAnalyticsChart($form){
        global $post;
        return $post->send($form, DETAILANALYTICS.'month');
    }
    function detailYearAnalyticsChart($form){
        global $post;
        return $post->send($form, DETAILANALYTICS.'year');
    }
    function topHot10($form, $url){
        global $post;
        return $post->send($form, DETAILANALYTICSTOP10.$url);
    }
    function detailDayAnalyticsUser($form, $url){
        global $post;
        return $post->send($form, DETAILANALYTICSUSER.$url);
    }
}