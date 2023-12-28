<?php

require_once './clients/account/model/account.php';
$student = isLoginStudent();
$studentId = $student['id'];

if (isPost()) {
    $body = getBody();

    $errors = [];
    // validate

    if (empty(trim($body['old_password']))) {
        $errors['old_password'] = 'Mật khẩu cũ không được để trống!';
    } else {
        $passwordHash = $student['password'];
        $oldPassword = trim($body['old_password']);

        if (!password_verify($oldPassword, $passwordHash)) {
            $errors['old_password'] = 'Mật khẩu cũ không chính xác';
        }
    }

    if (empty(trim($body['password']))) {
        $errors['password'] = 'Mật khẩu mới bắt buộc nhập!';
    } else {
        if (strlen(trim($body['password'])) < 6) {
            $errors['password'] = 'Mật khẩu mới không được nhỏ hơn 6 ký tự';
        }
    }

    if (trim($body['confirm_password']) !== trim($body['password'])) {
        $errors['confirm_password'] = 'Xác nhận mật khẩu không trùng khớp';
    }

    if (empty($errors)) {

        $dataUpdate = [
            'password' => password_hash(trim($body['password']), PASSWORD_DEFAULT),
            'update_at' => date('Y-m-d H:i:s'),
        ];

        $condition = "id=$studentId";

        $updateStatus = update('student', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Thay đổi mật khẩu thành công');
            setFlashData('msg_type', 'success');
            redirect('?module=member&action=logout');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=account&action=change_password');
}

$data = [
    'student_detail' => getStudentDetail($studentId),
];
viewClient($data);
