<?php
function getAllnews($filter = '')
{
    $sql = "SELECT * FROM news";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $data = getRaw($sql);
    return $data;
}
function getAllNewsCate()
{
    $sql = "SELECT * FROM news_category";
    $data = getRaw($sql);
    return $data;
}
function getNewsDetail($id)
{
    $sql = "SELECT * FROM news WHERE id=$id";
    $data =  firstRaw($sql);
    return $data;
}
