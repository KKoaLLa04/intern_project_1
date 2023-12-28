<?php

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $dataUpdate = [
        'status' => 1,
        'update_at' => date('Y-m-d H:i:s'),
    ];

    $condition = "id=$id";
    update('lesson', $dataUpdate, $condition);
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã bị xóa');
    setFlashData('msg_type', 'danger');
}

redirect('?module=check_course&action=lists');
