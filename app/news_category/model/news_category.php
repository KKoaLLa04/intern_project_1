<?php

function getAllNewsCate($filter = '')
{
    $sql = "SELECT * FROM news_category";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $data = getRaw($sql);
    return $data;
}
function getNewsCateDetail($id)
{
    $sql = "SELECT * FROM news_category WHERE id=$id";
    $data =  firstRaw($sql);
    return $data;
}
