<?php

require_once './check_course/model/check_course.php';

$data = [
    'lesson' => getLesson(),
];

view($data);
