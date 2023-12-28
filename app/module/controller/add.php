<?php

require_once './module/model/module.php';

if (!checkPermission($permissionData, 'module', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty($body['title'])) {
        $errors['title'] = 'Tiêu đề chương học không được để trống...';
    }

    if (empty($body['course_id'])) {
        $errors['course_id'] = 'Bắt buộc chọn khóa học của chương học';
    }

    if (empty($errors)) {
        if (isLoginTeacher()) {
            $teacher_id = isLoginTeacher()['id'];
        }
        $dataInsert = [
            'title' => trim($body['title']),
            'course_id' => trim($body['course_id']),
            'teacher_id' => $teacher_id,
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('module', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm chương học mới cho khóa học thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=module&action=add');
}

$data = [
    'course' => getAllCourse(),
];
view($data);
