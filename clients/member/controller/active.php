<?php

require_once './clients/member/model/member.php';

if (!empty($_GET['token'])) {
    $token = $_GET['token'];

    $checkTokenExit = checkActiveToken($token);

    if (!empty($checkTokenExit)) {
        $dataUpdate = [
            'token' => null,
            'status' => 1,
            'update_at' => date('Y-m-d H:i:S')
        ];

        $condition = "token='$token'";

        $updateStatus = update('student', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Kích hoạt tài khoản thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
        setFlashData('msg_type', 'danger');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
    setFlashData('msg_type', 'danger');
}

redirect('?module=member&action=login');