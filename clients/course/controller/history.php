<?php

require_once './clients/course/model/course.php';

$data = [
    'course_info' => courseInfoStudent(),
];

viewClient($data);
