<?php

require_once 'news_category/model/news_category.php';


if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " WHERE title LIKE '%$keyword%' ";
    }
}


$data = [
    'news_category' => getAllNewsCate($filter)
];
view($data);