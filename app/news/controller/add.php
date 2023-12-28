<?php

require_once './news/model/news.php';

if (isPost()) {
    $body = getBody();

    $errors = [];



    if (empty($body['title'])) {
        $errors['title'] = 'Tiêu đề không được để trống';
    }

    if (empty($body['content'])) {
        $errors['content'] = 'Nội dung không được để trống';
    }
    if (empty($body['news_id'])) {
        $errors['news_id'] = 'Danh mục sách bắt buộc phải chọn';
    }

    if (empty($errors)) {

        $uploadDir = '../uploads/news/';
        $thumbnail = $_FILES['thumbnail'];
        $thumbnailName = basename($thumbnail['name']);
        $thumbnailPath = $uploadDir . $thumbnailName;

        move_uploaded_file($thumbnail['tmp_name'], $thumbnailPath);
        $dataInsert = [
            'title' => trim($body['title']),
            'content' => trim($body['content']),
            'thumbnail' => $thumbnailName,
            'news_id' => trim($body['news_id']),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('news', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm tin tức thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại sau!');
            setFlashData('msg_type', 'warning');
        }
    } else {
        setFlashData('msg', 'Dữ liệu không hợp lệ, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'warning');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=news&action=add');
}


$data = [
    'news_category' => getAllNewsCate(),
];

view($data);
