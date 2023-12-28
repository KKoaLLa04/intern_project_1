<?php
$permissionData = permissionData();

if (!checkPermission($permissionData, 'document', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty(trim($body['name']))) {
        $errors['name'] = 'Tiêu đề danh mục không được để trống';
    }

    if (empty($errors)) {
        // khong co loi xay ra
        $dataInsert = [
            'name' => trim($body['name']),
            'create_at' => date("Y-m-d H:i:s"),
        ];

        $insertStatus = insert('document_category', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm danh mục tài liệu thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData("msg", 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=document&action=category');
}

view([], 'add_category');
