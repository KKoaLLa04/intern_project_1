<?php

require_once './clients/book/model/book.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
    setFlashData('msg_type', 'danger');
    redirect('index.php');
}

$data = [
    'book_detail' => getBookDetail($id),
    'book' => getAllBook(),
];
viewClient($data);
