<?php

require_once './subject/model/course.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'subject', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty(trim($body['title']))) {
        $errors['title'] = 'Tiêu đề khóa học không được để trống';
    }

    if (empty(trim($body['teacher_id']))) {
        $errors['teacher_id'] = 'Bắt buộc chọn giảng viên dạy khóa học';
    }

    if (empty(trim($body['cate_id']))) {
        $errors['cate_id'] = 'Bắt buộc chọn danh mục khóa học';
    }

    if (empty(trim($body['price']))) {
        $errors['price'] = 'Bắt buộc nhập giá';
    } else {
        if (!isNumberInt(trim($body['price']))) {
            $errors['price'] = 'Giá bắt buộc phải là 1 số';
        }
    }

    if (empty(trim($_FILES['thumbnail']['name']))) {
        $errors['thumbnail'] = 'Tiêu đề khóa học không được để trống';
    }

    if (empty($errors)) {
        if (isLoginTeacher()) {
            $teacher_id = isLoginTeacher()['id'];
        }

        $fileName = $_FILES['thumbnail']['name'];
        $from = $_FILES['thumbnail']['tmp_name'];
        $to = _WEB_PATH_ROOT . '/uploads/course/' . $fileName;

        move_uploaded_file($from, $to);
        $dataInsert = [
            'title' => trim($body['title']),
            'cate_id' => trim($body['cate_id']),
            'thumbnail' => $fileName,
            'price' => trim($body['price']),
            'teacher_id' => $teacher_id,
            'description' => trim($body['description']),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('course', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm khóa học mới thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    // redirect('?module=subject&action=add');
}

$data = [
    'teacher' => getAllTeacher(),
    'course_category' => getAllCate(),
];
view($data);