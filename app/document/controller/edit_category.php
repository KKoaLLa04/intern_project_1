<?php

require_once './document/model/document.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'document', 'Sửa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $cateDetail = getDocCateDetail($id);
    if (!empty($cateDetail)) {
        setFlashData('doc_cate', $cateDetail);
    } else {
        setFlashData('msg', 'Danh mục không tồn tại hoặc đã bị xóa!');
        setFlashData('msg_type', 'danger');
        redirect('?module=document&action=category');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
    setFlashData('msg_type', 'danger');
    redirect('?module=document&action=category');
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty(trim($body['name']))) {
        $errors['name'] = 'Tiêu đề danh mục không được để trống';
    }

    if (empty($errors)) {
        // khong co loi xay ra
        $dataUpdate = [
            'name' => trim($body['name']),
            'update_at' => date("Y-m-d H:i:s"),
        ];

        $condition = "id=$id";

        $updateStatus = update('document_category', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật danh mục tài liệu thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData("msg", 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=document&action=category&id=' . $id);
}

if (!empty($id)) {
    view([], 'edit_category');
}
