<?php

require_once './clients/member/model/member.php';
if (!empty($_GET['token'])) {
    $token = $_GET['token'];

    $checkToken = checkForgotToken($token);
    if (empty($checkToken)) {
        setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
        setFlashData('msg_type', 'danger');
        redirect('?module=member&action=login');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=member&action=login');
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    if (empty(trim($body['password']))) {
        $errors['password'] = 'Mật khẩu không được để trống!';
    } else {
        if (strlen(trim($body['password'])) < 6) {
            $errors['password'] = 'Mật khẩu không được nhỏ hơn 6 ký tự';
        }
    }

    if (empty(trim($body['confirm_password']))) {
        $errors['confirm_password'] = 'Xác nhận mật khẩu không được để trống!';
    } else {
        if (trim($body['password']) !== trim($body['confirm_password'])) {
            $errors['confirm_password'] = "Xác nhận mật khẩu không trùng khớp!";
        }
    }

    if (empty($errors)) {

        $dataUpdate = [
            'password' => password_hash(trim($body['password']), PASSWORD_DEFAULT),
            'forgot' => null,
            'update_at' => date('Y-m-d H:i:s')
        ];

        $condition = "forgot='$token'";

        $updateStatus = update('student', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Đổi mật khẩu mới thành công!');
            setFlashData('msg_type', 'success');
            redirect('?module=member&action=login');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra dữ liệu nhập vào!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }
}

$data = [
    'token' => $token
];

viewClient($data);