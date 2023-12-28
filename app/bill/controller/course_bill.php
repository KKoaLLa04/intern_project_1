<?php

require_once './bill/model/bill.php';

$filter = '';

if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    if (!empty($keyword)) {
        $filter = " WHERE (code LIKE '%$keyword%' OR student.fullname LIKE '%$keyword%' OR student.email LIKE '%$keyword%' OR course.title LIKE '%$keyword%' OR code_course.price LIKE '%$keyword%')";
    }
}
$data = [
    'bill_course' => getBillCourse($filter),
];
view($data);
