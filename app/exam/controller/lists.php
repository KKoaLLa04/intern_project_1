<?php

require_once './exam/model/exam.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'exam', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " WHERE exam.title LIKE '%$keyword%' OR exam.description LIKe '%$keyword%' OR exam.content LIKE '%$keyword%' ";
    }
}

$data = [
    'exam_control' => getAllExam($filter),
];
view($data);
