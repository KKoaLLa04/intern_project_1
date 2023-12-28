<?php

require_once './student/model/student.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'student', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " AND (fullname LIKE '%$keyword%' OR email LIKE '%$keyword%')";
    }

    if (isset($body['status_search'])) {
        if ($body['status_search'] == 0 || $body['status_search'] == 1) {
            $status = $body['status_search'];
            $filter .= " AND status=$status";
        }
    }
}


$data = [
    'student' => getAllStudent($filter),
];
view($data);
