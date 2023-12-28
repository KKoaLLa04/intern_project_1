<?php

function getAllCart($student_id)
{
    $sql = "SELECT * FROM cart WHERE student_id=$student_id AND status = 0";
    $data = getRaw($sql);
    return $data;
}

function getCartDetail($id)
{
    $sql = "SELECT * FROM cart WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}

function getBillDetail($code)
{
    $sql = "SELECT * FROM bill WHERE code='$code'";
    $data = firstRaw($sql);
    return $data;
}

function getCartBill($code)
{
    $sql = "SELECT * FROM cart WHERE code_id='$code'";
    $data = getRaw($sql);
    return $data;
}

function getBookCart($book_id)
{
    $sql = "SELECT * FROM book WHERE id=$book_id";
    $data = firstRaw($sql);
    return $data;
}

function selectCart($code)
{
    $sql = "SELECT * FROM cart WHERE status = 1 AND code_id='$code'";
    $data = getRaw($sql);
    return $data;
}

function getBook($book_id)
{
    $sql = "SELECT * FROM book WHERE id=$book_id";
    $data = firstRaw($sql);
    return $data;
}
