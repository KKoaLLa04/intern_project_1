<?php

require_once 'clients/exam_online/model/exam_online.php';

$data = [
    'exam_online' => getAllTest(),
];

viewClient($data);
