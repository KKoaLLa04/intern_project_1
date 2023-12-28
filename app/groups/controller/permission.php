<?php

require_once './groups/model/groups.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'groups', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=groups&action=lists');
}

if (isPost()) {
    $body = getBody();

    $errors = []; // mảng lữu trữ lỗi

    if (empty($errors)) {
        if (!empty($body['permission'])) {
            $permissionJson = json_encode($body['permission']);
        } else {
            $permissionJson = '';
        }

        $dataUpdate = [
            'permission' => trim($permissionJson),
            'update_at' => date('Y-m-d H:i:s'),
        ];

        $condition = "id=$id";

        $updateStatus = update('groups', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Phân quyền nhóm người dùng thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Vui lòng kiểm tra lại dữ liệu');
        setFlashData('msg_type', 'danger');
    }
    redirect('?module=groups&action=permission&id=' . $id);
}

$data = [
    'group_detail' => getGroupDetail($id),
    'blocks' => getAllBlocks(),
];

view($data);
