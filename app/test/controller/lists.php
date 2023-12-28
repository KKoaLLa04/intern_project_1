<?php

require_once './test/model/test.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'test', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'test' => getAllTest(),
];
view($data);
