<?php
require_once './module/model/module.php';

if (!checkPermission($permissionData, 'module', 'Xóa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];

    $condition = 'id = ' . $id;

    $checkForeignKey = checkForeignKey($id);

    if ($checkForeignKey > 0) {
        setFlashData('msg', 'Trong chương học còn ' . $checkForeignKey . ' Bài học, không thể xóa');
        setFlashData('msg_type', 'danger');
    } else {
        $deleteStatus = delete('module', $condition);
        if (!empty($deleteStatus)) {
            setFlashData('msg', 'Xóa chương học thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau');
            setFlashData('msg_type', 'danger');
        }
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
}

redirect('?module=module&action=lists');
