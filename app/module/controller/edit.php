<?php

require_once './module/model/module.php';

if (!checkPermission($permissionData, 'module', 'Sửa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $moduleDetail = getModuleDetail($id);
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
    setFlashData('msg_type', 'danger');
    redirect('?module=module&action=lists');
}

if (isPost()) {
    $body = getBody();
    $id = $body['id'];
    $errors = [];

    // validate
    if (empty($body['title'])) {
        $errors['title'] = 'Tiêu đề chương học không được để trống...';
    }

    if (empty($body['course_id'])) {
        $errors['course_id'] = 'Bắt buộc chọn khóa học của chương học';
    }

    if (empty($errors)) {
        $dataUpdate = [
            'title' => trim($body['title']),
            'course_id' => trim($body['course_id']),
            'update_at' => date('Y-m-d H:i:s')
        ];

        $condition = 'id = ' . $id;

        $updateStatus = update('module', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật chương học thành công');
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

    redirect('?module=module&action=edit&id=' . $id);
}

$data = [
    'course' => getAllCourse(),
    'module_detail' => $moduleDetail,
    'id' => $id
];
view($data);
