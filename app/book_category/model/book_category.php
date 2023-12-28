<?php

function getAllBookCate($filter = '')
{
    $sql = "SELECT * FROM book_category";

    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $data = getRaw($sql);
    return $data;
}
function getBookCateDetail($id)
{
    $sql = "SELECT * FROM book_category WHERE id=$id";
    $data =  firstRaw($sql);
    return $data;
}

function checkForeignKey($book_id)
{
    $sql = "SELECT * FROM book WHERE book_id=$book_id";
    $data = getRows($sql);
    return $data;
}
