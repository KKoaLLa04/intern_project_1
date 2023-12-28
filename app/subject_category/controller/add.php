<?php
$permissionData = permissionData();

if (!checkPermission($permissionData, 'subject_category', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];
    // validate
    if (empty($body['title'])) {
        $errors['title'] = 'Tiêu đề không được để trống';
    } else {
        if (strlen($body['title']) <= 6) {
            $errors['title'] = 'Tiêu đề không được nhỏ hơn 6 ký tự';
        }
    }

    if (empty($errors)) {
        // không có lỗi xảy ra
        if (isLoginTeacher()) {
            $teacher_id = isLoginTeacher()['id'];
        }
        $dataInsert = [
            'title' => $body['title'],
            'teacher_id' => $teacher_id,
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('course_category', $dataInsert);
        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm danh mục khóa học thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống! Vui lòng thử lại sau');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Dữ liệu nhập vào không hợp lệ! Vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=subject_category&action=add');
}

view();