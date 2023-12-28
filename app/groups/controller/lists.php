<?php

require_once './groups/model/groups.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'groups', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'groups' => getAllGroups(),
];

$permissionData = permissionData();

if (!checkPermission($permissionData, 'groups', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

view($data);