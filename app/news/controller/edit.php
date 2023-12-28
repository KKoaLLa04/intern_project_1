<?php

require_once './news/model/news.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $newsDetail = getNewsDetail($id);
}

if (isPost()) {
    $body = getBody();
    $id = $body['id'];
    $errors = [];

    if (empty($body['title'])) {
        $errors['title'] = 'Tiêu đề tin tức không được để trống';
    }

    if (empty($body['content'])) {
        $errors['content'] = 'Nội dung không được để trống';
    }
    if (empty($body['news_id'])) {
        $errors['news_id'] = 'Danh mục tin tức bắt buộc phải chọn';
    }
    if (empty($errors)) {

        $dataUpdate = [
            'title' => trim($body['title']),
            'content' => trim($body['content']),
            'update_at' => date('Y-m-d H:i:s')
        ];

        if (!empty($_FILES['thumbnail']['name'])) {

            $uploadDir = '../uploads/news/';
            $thumbnail = $_FILES['thumbnail'];
            $thumbnailName = basename($thumbnail['name']);
            $thumbnailPath = $uploadDir . $thumbnailName;

            if (move_uploaded_file($thumbnail['tmp_name'], $thumbnailPath)) {

                $dataUpdate['thumbnail'] = $thumbnailName;
            }
        }

        $condition = "id=$id";

        $updateStatus = update('news', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật tin tức thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Dữ liệu không hợp lệ, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=news&action=edit&id=' . $id);
}


$data = [
    'news_category' => getAllNewsCate(),
    'news_detail' => $newsDetail,
    'id' => $id
];

view($data);
