<?php

require_once 'profile/model/profile.php';

if (isPost()) {
    $body = getBody();

    $errors = [];

    $profile = getProfile();
    $id = $profile['id'];
    // validate
    if (empty(trim($body['password']))) {
        $errors['password'] = 'Mật khẩu cũ bắt buộc phải nhập';
    } else {
        $passwordHash = $profile['password'];
        $password = trim($body['password']);
        if (!password_verify($password, $passwordHash)) {
            $errors['password'] = 'Mật khẩu cũ không chính xác';
        }
    }

    if (empty(trim($body['new_password']))) {
        $errors['new_password'] = 'Mật khẩu mới bắt buộc phải nhập!';
    } else {
        if (strlen(trim($body['new_password'])) < 6) {
            $errors['new_password'] = 'Mật khẩu mới bắt buộc phải lớn hơn 6 ký tự';
        }
    }

    if (empty(trim($body['confirm_password']))) {
        $errors['confirm_password'] = 'Xác nhận mật khẩu không được để trống';
    } else {
        if (trim($body['new_password']) !== trim($body['confirm_password'])) {
            $errors['confirm_password'] = 'Xác nhận mật không không trùng khớp!';
        }
    }

    if (empty($errors)) {
        $dataUpdate = [
            'password' => password_hash(trim($body['new_password']), true),
            'update_at' => date('Y-m-d H:i:s'),
        ];

        $condition = "id=$id";

        $updateStatus = update('teacher', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Đổi mật khẩu thành công');
            setFlashData('msg_type', 'success');
            redirect('?module=profile&action=logout');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
            setFlashData('errors', $errors);
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
    }

    redirect('?module=profile&action=change_password');
}

view();
