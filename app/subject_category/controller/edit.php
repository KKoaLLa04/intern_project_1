<?php

require_once './subject_category/model/read.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'subject_category', 'Sửa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

// Lay du lieu cu
$id = null;
if (isGet()) {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $allCourseCate = getDetailCate($id);
        setFlashData('course_category', $allCourseCate);
    }
}

if (isPost()) {
    $body = getBody();
    $errors = [];
    // validate
    if (empty($body['title'])) {
        $errors['title'] = 'Tiêu đề không được để trống';
    } else {
        if (strlen($body['title']) <= 6) {
            $errors['title'] = 'Tiêu đề không được nhỏ hơn 6 ký tự';
        }
    }

    if (empty($errors)) {

        $dataUpdate = [
            'title' => $body['title'],
            'update_at' => date('Y-m-d H:i:s')
        ];

        $id = getBody()['id'];
        $condition = 'id=' . $id;
        echo $condition;

        $updateStatus = update('course_category', $dataUpdate, $condition);
        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật danh mục khóa học thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống! Vui lòng thử lại sau');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Dữ liệu nhập vào không hợp lệ! Vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=subject_category&action=edit&id=' . $id);
}

$data = [
    'title' => 'Cập nhật danh mục khóa học',
];

view($data);