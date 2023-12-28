<?php

require_once './lesson/model/lesson.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'lesson', 'Sửa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $lessonDetail = getLessonDetail($id);
}

if (isPost()) {
    $body = getBody();
    $id = $body['id'];
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
        $dataUpdate = [
            'title' => trim($body['title']),
            'module_id' => trim($body['module_id']),
            'video_url' => trim($body['video_url']),
            'update_at' => date('Y-m-d H:i:s')
        ];

        $condition = "id=$id";

        $updateStatus = update('lesson', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật bài giảng thành công!');
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

    redirect('?module=lesson&action=edit&id=' . $id);
}

$data = [
    'module' => getAllModule(),
    'lesson_detail' => $lessonDetail,
    'id' => $id
];

view($data);
