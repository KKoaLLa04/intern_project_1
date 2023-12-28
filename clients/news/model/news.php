<?php
function getAllnews(){
    $sql = "SELECT * FROM news";
    $data = getRaw($sql);
    return $data;
}
function getAllNewsCate(){
    $sql = "SELECT * FROM news_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
function getNewsDetail($id){
    $sql = "SELECT news.*,news_category.title FROM news INNER JOIN news_category ON news_category.id=news.news_id WHERE news.id=$id";
    $data =  firstRaw($sql);
    return $data;
}
