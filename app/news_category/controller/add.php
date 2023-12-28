<?php

if (isPost()) {
    $body = getBody();

    $errors = [];

    if (empty(trim($body['title']))) {
        $errors['title'] = 'Tiêu đề danh mục sách không được để trống';
    } else {
        if (strlen(trim($body['title'])) <= 6) {
            $errors['title'] = 'Tiêu đề danh mục sách không được nhỏ hơn 6 ký tự';
        }
    }

    if (empty($errors)) {
        $dataInsert = [
            'title' => trim($body['title']),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('news_category', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm danh mục sách thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại sau!');
            setFlashData('msg_type', 'warning');
        }
    } else {
        setFlashData('msg', 'Dữ liệu không hợp lệ, vui lòng thử lại sau');
        setFlashData('msg_type', 'warning');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }
    // redirect('?module=book_category&action=add');
}

view();
