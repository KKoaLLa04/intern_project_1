<?php

require_once './document/model/document.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'document', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'document' => getAllDoc(),
];
view($data);
