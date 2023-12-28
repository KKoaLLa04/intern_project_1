<?php

require_once 'book_category/model/book_category.php';

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " WHERE title LIKE '%$keyword%'";
    }
}

$data = [
    'book_category' => getAllBookCate($filter)
];

if (!empty($keyword)) {
    $data['keyword'] = $keyword;
}

view($data);
