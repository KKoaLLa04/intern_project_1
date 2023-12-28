<?php

// *********************************************************chart**************************************************************
function getTotalBook()
{
    $sql = "SELECT total FROM bill";
    $data = getRaw($sql);
    $total = 0;
    foreach ($data as $key => $item) {
        $total += $item['total'];
    }

    return $total;
}

function getTotalCourse()
{
    $sql = "SELECT price FROM code_course";
    $data = getRaw($sql);
    $total = 0;
    foreach ($data as $key => $item) {
        $total += $item['price'];
    }

    return $total;
}

function getCateToCourse()
{
    $sql = "SELECT course.title, course_category.title as cate_title, count(course.cate_id) as count_course FROM course INNER JOIN course_category ON course_category.id=course.cate_id GROUP BY cate_id";
    $data = getRaw($sql);
    return $data;
}

//********************************************************** box************************************************
function getCountStudent()
{
    $sql = "SELECT * FROM student";
    $data = getRows($sql);
    return $data;
}

function getCountTeacher()
{
    $sql = "SELECT * FROM teacher";
    $data = getRows($sql);
    return $data;
}

function getCountLesson()
{
    $sql = "SELECT * FROM lesson";
    $data = getRows($sql);
    return $data;
}

function getCountCourse()
{
    $sql = "SELECT * FROM course";
    $data = getRows($sql);
    return $data;
}
