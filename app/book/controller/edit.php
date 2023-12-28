<?php

require_once './book/model/book.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $bookDetail = getBookDetail($id);
}

if (isPost()) {
    $body = getBody(); // $_POST $body = $_POST
    $id = $body['id'];
    $errors = [];

    if (empty($body['name'])) {
        $errors['name'] = 'Tên đầu sách không được để trống';
    }

    if (empty($body['author'])) {
        $errors['author'] = 'Tên tác giả không được để trống';
    }

    if (empty($body['description'])) {
        $errors['description'] = 'Mô tả không được để trống';
    }

    if (empty($body['content'])) {
        $errors['content'] = 'Nội dung không được để trống';
    }

    if (empty($body['book_id'])) {
        $errors['book_id'] = 'Danh mục sách bắt buộc phải chọn';
    }

    if (empty($body['price'])) {
        $errors['price'] = 'Giá không được để trống';
    } else {
        if (!isNumberFloat($body['price'])) {
            $errors['price'] = 'Giá phải là 1 số';
        }
    }

    if (empty($errors)) {

        $dataUpdate = [
            'name' => trim($body['name']),
            'author' => trim($body['author']),
            'description' => trim($body['description']),
            'content' => trim($body['content']),
            'quantity' => trim($body['quantity']),
            'price' => trim($body['price']),
            'status' => trim($body['status']),
            'book_id' => trim($body['book_id']),
            'update_at' => date('Y-m-d H:i:s')
        ];

        if (!empty($_FILES['thumbnail']['name'])) {

            $uploadDir = '../uploads/books/';
            $thumbnail = $_FILES['thumbnail'];
            $thumbnailName = basename($thumbnail['name']);
            $thumbnailPath = $uploadDir . $thumbnailName;

            if (move_uploaded_file($thumbnail['tmp_name'], $thumbnailPath)) {

                $dataUpdate['thumbnail'] = $thumbnailName;
            }
        }

        $condition = "id=$id";

        $updateStatus = update('book', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật đầu sách thành công!');
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

    redirect('?module=book&action=edit&id=' . $id);
}


$data = [
    'book_category' => getAllBookCate(),
    'book_detail' => $bookDetail,
    'id' => $id
];

view($data);
