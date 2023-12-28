<?php

require_once './lesson/model/lesson.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'lesson', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['module_id'])) {
    $module_id = $_GET['module_id'];
} else {
    $module_id = '';
}

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " AND lesson.title LIKE '%$keyword%'";
    }
}


$data = [
    'lesson' => getAllLesson($module_id, $filter),
];
view($data);