<?php

$permissionData = permissionData();

if (!checkPermission($permissionData, 'test', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];
    // validate
    if (empty(trim($body['name']))) {
        $errors['name'] = 'Tiêu đề không được để trống...';
    }

    if (empty($errors)) {
        $dataInsert = [
            'name' => trim($body['name']),
            'create_at' => date('Y-m-d H:i:s'),
        ];

        $insertStatus = insert('test_category', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm danh mục thi online thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=test&action=category');
}

view([], 'add_category');
