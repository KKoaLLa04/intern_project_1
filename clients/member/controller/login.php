<?php

require_once './clients/member/model/member.php';

if (isLoginStudent() || isLoginTeacher()) {
    redirect('index.php');
}

if (isPost()) {
    $body = getBody();

    if (!empty(trim($body['email']))) {
        $email = trim($body['email']);

        $checkAccount = checkAccount($email);
        if (!empty($checkAccount)) {
            $password = trim($body['password']);
            $password_hash = $checkAccount['password'];

            if (password_verify($password, $password_hash)) {
                if (!empty($checkAccount['token']) || $checkAccount['status'] == 0) {
                    setFlashData('msg', 'Tài khoản của bạn chưa được kích hoạt hoặc đã bị khóa');
                    setFlashData('msg_type', 'danger');
                } else {
                    setSession('loginStudent', $checkAccount);
                    redirect('index.php');
                }
            } else {
                setFlashData('msg', 'Mật khẩu sai, vui lòng thử lại!');
                setFlashData('msg_type', 'danger');
            }
        } else {
            setFlashData('msg', 'Email không tồn tại trong hệ thống!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Vui lòng nhập email');
        setFlashData('msg_type', 'danger');
    }

    redirect('?module=member&action=login');
}

return viewClient();
