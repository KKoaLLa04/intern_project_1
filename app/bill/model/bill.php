<?php

function getAllBill($filter = '')
{
    $sql = "SELECT * FROM bill ";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $sql .= " ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getBillDetail($id)
{
    $sql = "SELECT * FROM bill WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}


function getCartToBill($code)
{
    $sql = "SELECT * FROM cart WHERE code_id=$code";
    $data = getRaw($sql);
    return $data;
}

function getBillCode($code)
{
    $sql = "SELECT * FROM bill WHERE code=$code";
    $data = firstRaw($sql);
    return $data;
}

function getBillCourse($filter = "")
{
    $sql = "SELECT code_course.*, course.thumbnail,course.title,student.fullname,student.email FROM code_course INNER JOIN course ON course.id=code_course.course_id INNER JOIN student ON student.id=code_course.student_id ";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $sql .= " ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
