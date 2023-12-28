<?php

function getAllCartStudent()
{
    $student_id = isLoginStudent()['id'];

    $sql = "SELECT * FROM bill WHERE client_id=$student_id ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getCartDetail($code)
{
    $sql = "SELECT * FROM cart WHERE code_id=$code";
    $data = getRaw($sql);
    return $data;
}