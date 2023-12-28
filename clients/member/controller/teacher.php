<?php

require_once './clients/member/model/member.php';

if (isLoginStudent() || isLoginTeacher()) {
    redirect('index.php');
}

if (isPost()) {
    $body = getBody();

    if (!empty(trim($body['email']))) {
        $email = trim($body['email']);

        $checkAccount = checkAccountTeacher($email);

        $status = $checkAccount['status'];
        if ($status === 1) {
            if (!empty($checkAccount)) {
                $password = trim($body['password']);
                $password_hash = $checkAccount['password'];

                if (password_verify($password, $password_hash)) {
                    setSession('loginTeacher', $checkAccount);
                    redirect('index.php');
                } else {
                    setFlashData('msg', 'Mật khẩu sai, vui lòng thử lại!');
                    setFlashData('msg_type', 'danger');
                }
            } else {
                setFlashData('msg', 'Email không tồn tại trong hệ thống!');
                setFlashData('msg_type', 'danger');
            }
        } else {
            setFlashData('msg', 'Account của bạn đã bị khóa, vui lòng liên lệ quản trị viên!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Vui lòng nhập email');
        setFlashData('msg_type', 'danger');
    }

    redirect('?module=member&action=teacher');
}

return viewClient();
