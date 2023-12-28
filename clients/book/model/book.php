<?php

function getAllBookCate()
{
    $sql = "SELECT * FROM book_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
function getAllBook()
{
    $sql = "SELECT book.*, book_category.title as title_cate FROM book INNER JOIN book_category ON book_category.id=book.book_id";
    $data = getRaw($sql);
    return $data;
}

function getCateBookDetail($id)
{
    $sql = "SELECT book.*, book_category.title as title_cate FROM book INNER JOIN book_category ON book_category.id=book.book_id WHERE book_id=$id";
    $data = getRaw($sql);
    return $data;
}

function getBookDetail($id)
{
    $sql = "SELECT book.*, book_category.title as title_cate FROM book INNER JOIN book_category ON book_category.id=book.book_id WHERE book.id=$id";
    $data = firstRaw($sql);
    return $data;
}

function checkCartBook($book_id)
{
    $sql = "SELECT * FROM cart WHERE book_id=$book_id AND status=0";
    $data = getRows($sql);
    return $data;
}

function cartDetail($book_id)
{
    $sql = "SELECT * FROM cart WHERE book_id=$book_id AND status = 0";
    $data = firstRaw($sql);
    return $data;
}
