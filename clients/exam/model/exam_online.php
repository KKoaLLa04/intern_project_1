<?php

function getAllCate()
{
    $sql = "SELECT * FROM exam_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllExam()
{
    $sql = "SELECT * FROM exam ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getDetailExam($id)
{
    $sql = "SELECT * FROM exam INNER JOIN exam_category ON exam_category.id=exam.exam_id WHERE exam.id=$id ";
    $data = firstRaw($sql);
    return $data;
}
