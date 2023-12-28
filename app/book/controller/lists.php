<?php

require_once 'book/model/book.php';

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " WHERE name LIKE '%$keyword%'";
    }
}

$data = [
    'book' => getAllbook($filter)
];
view($data);
