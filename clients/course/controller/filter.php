<?php

require_once './clients/course/model/course.php';

$filter = '';
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    $filter = " WHERE course.title LIKE '%$keyword%'";
}

$data = [
    'course_filter' => courseFilter($filter),
];

viewClient($data);
