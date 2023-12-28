<?php

require_once './clients/home/model/home.php';

// $course_detail = getAllCourse();
$course_category = getAllCate();
$course = [];
if (!empty($course_category)) {
    foreach ($course_category as $key => $item) {
        $course[$key] = getAllCourseId($item['id']);
    }
}

$course = array_filter($course);
// $course = array_values($course);
$exam_category = getAllCateexam();
if (!empty($exam_category)) {
    $examArr = [];
    foreach ($exam_category as $key => $item) {
        $examArr[] = getAllExam($item['id']);
    }
}
$data = [
    'course_category' => getAllCate(),
    'course_detail' => $course,
    'book_category' => getAllBookCate(),
    'book' => getAllBook(),
    'exam_category' => $exam_category,
    'exam' => $examArr,
    'news_category' => getAllNewsCate(),
    'news' => getAllnews(),
    'category' => getAllDocCate(),
    'document' => getAllDoc(),
];

viewClient($data);
