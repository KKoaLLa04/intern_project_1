<?php

require_once './module/model/module.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'module', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['subject_id'])) {
    $subject_id = $_GET['subject_id'];
} else {
    $subject_id = '';
}

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " AND module.title LIKE '%$keyword%'";
    }
}

$data = [
    'module' => getAllModule($subject_id, $filter)
];

view($data);