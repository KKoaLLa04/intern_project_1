<?php

require_once './exam_category/model/exam_category.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'exam_category', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " WHERE name LIKE '%$keyword%' ";
    }
}

$data = [
    'exam_cate' => getAllExamCate($filter),
];

view($data);
