<?php

require_once './clients/exam/model/exam_online.php';

$data = [
    'exam_category' => getAllCate(),
    'exam' => getAllExam(),
];

viewClient($data);
