<?php

require_once './clients/news/model/news.php';

$data = [
    'news_category' => getAllNewsCate(),
    'news' => getAllnews(),
];

viewClient($data);