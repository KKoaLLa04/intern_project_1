<?php

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $share_lesson = $_GET['share'];
    if ($share_lesson == 1) {
        $share_lesson = 0;
    } else {
        $share_lesson = 1;
    }

    $dataUpdate = [
        'share_lesson' => $share_lesson,
    ];

    $condition = "id=$id";

    update('lesson', $dataUpdate, $condition);
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
}

redirect('?module=lesson&action=lists');
