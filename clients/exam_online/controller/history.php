<?php

require_once './clients/exam_online/model/exam_online.php';

$studentId = isLoginStudent()['id'];
$data = [
    'all_result' => getResult($studentId),
];
viewClient($data);
