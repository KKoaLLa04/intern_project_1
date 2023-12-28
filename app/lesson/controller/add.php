<?php

require_once './lesson/model/lesson.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'lesson', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty($body['title'])) {
        $errors['title'] = 'Tiêu đề bài giảng không được để trống';
    }

    if (empty($body['module_id'])) {
        $errors['module_id'] = 'Chương học của bài giảng không được để trống!';
    }

    if (empty($body['video_url'])) {
        $errors['video_url'] = 'Đường dẫn của bài giảng không được để trống!';
    }

    if (empty($errors)) {
        $teacherId = isLoginTeacher()['id'];
        $dataInsert = [
            'title' => trim($body['title']),
            'module_id' => trim($body['module_id']),
            'video_url' => trim($body['video_url']),
            'status' => 0,
            'teacher_id' => $teacherId,
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('lesson', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm bài giảng mới thành công, vui lòng chờ duyệt!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra dữ liệu nhập vào');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=lesson&action=add');
}

$data = [
    'module' => getAllModule(),
];

view($data);
