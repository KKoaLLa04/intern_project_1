<?php

require_once './clients/course/model/course.php';

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

$data = [
    'course_category' => getAllCate(),
    'course_detail' => $course,
];

viewClient($data);
