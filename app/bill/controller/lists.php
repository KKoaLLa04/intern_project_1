<?php

require_once './bill/model/bill.php';

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " WHERE (name LIKE '%$keyword%' OR email LIKE '%$keyword%' OR phone LIKE '%$keyword%' OR address LIKE '%$keyword%') ";
    }
}

$data = [
    'bill' => getAllBill($filter),
];

view($data);
