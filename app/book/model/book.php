<?php

function getAllbook($filter = '')
{
    $sql = "SELECT * FROM book";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $data = getRaw($sql);
    return $data;
}
function getAllBookCate()
{
    $sql = "SELECT * FROM book_category";
    $data = getRaw($sql);
    return $data;
}
function getBookDetail($id)
{
    $sql = "SELECT * FROM book WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
