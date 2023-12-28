<?php

$permissionData = permissionData();

if (!checkPermission($permissionData, 'groups', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty(trim($body['name']))) {
        $errors['name'] = 'Tên nhóm người dùng không được để trống!';
    } else {
        if (strlen(trim($body['name'])) < 2) {
            $errors['name'] = 'Tên nhóm người dùng không được nhỏ hơn 3 ký tự';
        }
    }

    if (empty($errors)) {
        $dataInsert = [
            'name' => trim($body['name']),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('groups', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm nhóm người dùng mới thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra dữ liệu đầu vào');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=groups&action=add');
}

view();
