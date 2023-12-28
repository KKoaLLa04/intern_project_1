<?php

if (isset($_GET['status']) && !empty($_GET['id'])) {
    $status = $_GET['status'];
    $id = $_GET['id'];
    $condition = "id=$id";
    if ($status == 1) {
        $dataUpdate = [
            'status' => 0,
            'update_at' => date('Y-m-d H:i:s'),
        ];
    } else {
        $dataUpdate = [
            'status' => 1,
            'update_at' => date('Y-m-d H:i:s'),
        ];
    }

    update('student', $dataUpdate, $condition);
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã bị xóa!');
    setFlashData('msg_type', 'danger');
}

redirect('?module=student&action=lists');
