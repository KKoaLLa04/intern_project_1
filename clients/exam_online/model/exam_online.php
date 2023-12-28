<?php

function getTestDetail($id)
{
    $sql = "SELECT * FROM test WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}

function getResultDetail($student_id)
{
    $sql = "SELECT result.*,test.title as test_title, student.fullname as student_name  FROM result INNER JOIN test ON test.id=result.test_id INNER JOIN student ON student.id=result.student_id WHERE student_id=$student_id ORDER BY result.id DESC";
    $data = firstRaw($sql);
    return $data;
}

function getResult($student_id)
{
    $sql = "SELECT result.*,test.title as test_title, student.fullname as student_name  FROM result INNER JOIN test ON test.id=result.test_id INNER JOIN student ON student.id=result.student_id WHERE student_id=$student_id ORDER BY result.id DESC";
    $data = getRaw($sql);
    return $data;
}

function checkToDoExam($student_id, $test_id)
{
    $sql = "SELECT result.*,test.title as test_title, student.fullname as student_name  FROM result INNER JOIN test ON test.id=result.test_id INNER JOIN student ON student.id=result.student_id WHERE result.student_id=$student_id AND result.test_id=$test_id";
    $data = firstRaw($sql);
    return $data;
}

function getAllTest()
{
    $sql = "SELECT test.*,name FROM test INNER JOIN test_category ON test_category.id=test.test_id";
    $data = getRaw($sql);
    return $data;
}
