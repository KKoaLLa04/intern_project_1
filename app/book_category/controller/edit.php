<?php

require_once './book_category/model/book_category.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $bookDetail = getBookCateDetail($id);
    setFlashData('book_category', $bookDetail);
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
    setFlashData('msg_type', 'danger');
    redirect('?module=book_category&action=lists');
}

if (isPost()) {
    $body = getBody();
    $id = $body['id'];
    $errors = [];
    
    if (empty(trim($body['title']))) {
        $errors['title'] = 'Tiêu đề danh mục sách không được để trống';
    } else {
        if (strlen(trim($body['title'])) <= 6) {
            $errors['title'] = 'Tiêu đề danh mục sách không được nhỏ hơn 6 ký tự';
        }
    }

    if (empty($errors)) {
        $dataUpdate = [
            'title' => trim($body['title']),
            'update_at' => date('Y-m-d H:i:s')
        ];

        $condition = "id=$id";

        $updateStatus = update('book_category', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật danh mục sách thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Dữ liệu không hợp lệ, vui lòng thử lại sau');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }
    redirect('?module=book_category&action=edit&id=' . $id);
}

view();
