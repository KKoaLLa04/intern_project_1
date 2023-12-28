<?php
require_once  "./subject/model/course.php";

$permissionData = permissionData();

if (!checkPermission($permissionData, 'subject', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['cate_id'])) {
    $cate_id = $_GET['cate_id'];
} else {
    $cate_id = '';
}

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " AND course.title LIKE '%$keyword%'";
    }
}

$data = [
    "data" => getAllCourse($cate_id, $filter)
];


view($data);