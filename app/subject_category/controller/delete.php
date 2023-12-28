<?php

require_once './subject_category/model/read.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'subject_category', 'Xóa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];

    $condition = 'id = ' . $id;

    $checkForeignKey = checkForeignKey($id);
    if ($checkForeignKey > 0) {
        setFlashData('msg', 'Trong danh mục khóa học còn ' . $checkForeignKey . ' Khóa học, không thể xóa');
        setFlashData('msg_type', 'danger');
    } else {
        $deleteStatus = delete('course_category', $condition);
        if (!empty($deleteStatus)) {
            setFlashData('msg', 'Xóa danh mục khóa học thành công');
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

redirect('?module=subject_category&action=lists');
