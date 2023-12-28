<?php

require_once 'news/model/news.php';

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " WHERE (title LIKE '%$keyword%' OR content LIKE '%$keyword%')";
    }
}

$data = [
    'news' => getAllNews($filter)
];
view($data);
