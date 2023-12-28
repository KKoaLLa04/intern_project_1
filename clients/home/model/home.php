<?php

function getAllCourse()
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id ORDER BY course.cate_id DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllCate()
{
    $sql = "SELECT * FROM course_category ORDER BY id ASC LIMIT 0,6 ";
    $data = getRaw($sql);
    return $data;
}

function getAllCourseId($id)
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id WHERE course.cate_id = '$id' ORDER BY course.cate_id DESC";
    $data = getRaw($sql);
    return $data;
}
function getAllBookCate()
{
    $sql = "SELECT * FROM book_category ORDER BY id DESC LIMIT 0,4 ";
    $data = getRaw($sql);
    return $data;
}
function getAllBook()
{
    $sql = "SELECT book.*, book_category.title as title_cate FROM book INNER JOIN book_category ON book_category.id=book.book_id LIMIT 0,4";
    $data = getRaw($sql);
    return $data;
}

function getAllCateexam()
{
    $sql = "SELECT * FROM exam_category ORDER BY id DESC LIMIT 0,3";
    $data = getRaw($sql);
    return $data;
}

function getAllExam($exam_id)
{
    $sql = "SELECT * FROM exam WHERE exam_id=$exam_id ORDER BY id DESC LIMIT 0,4";
    $data = getRaw($sql);
    return $data;
}

function getDetailExam($id)
{
    $sql = "SELECT * FROM exam INNER JOIN exam_category ON exam_category.id=exam.exam_id WHERE exam.id=$id";
    $data = firstRaw($sql);
    return $data;
}

function getAllnews()
{
    $sql = "SELECT * FROM news LIMIT 0,4";
    $data = getRaw($sql);
    return $data;
}
function getAllNewsCate()
{
    $sql = "SELECT * FROM news_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
function getAllDocCate()
{
    $sql = "SELECT * FROM document_category LIMIT 0,3";
    $data = getRaw($sql);
    return $data;
}

function getAllDoc()
{
    $sql = "SELECT * FROM document ORDER BY id DESC LIMIT 0,4";
    $data = getRaw($sql);
    return $data;
}
