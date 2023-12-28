<?php

require_once './clients/news/model/news.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
    setFlashData('msg_type', 'danger');
    redirect('index.php');
}

$data = [
    'news_detail' => getNewsDetail($id),
    'news' => getAllnews(),
];
viewClient($data);
