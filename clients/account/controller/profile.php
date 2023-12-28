<?php

require_once './clients/account/model/account.php';
$student = isLoginStudent();
$studentId = $student['id'];

if (isPost()) {
    $body = getBody();

    $errors = [];
    // validate

    if (empty(trim($body['fullname']))) {
        $errors['fullname'] = 'Họ và tên không được để trống!';
    }

    if (empty(trim($body['email']))) {
        $errors['email'] = 'Email không được để trống!';
    } else {
        if (!isEmail(trim($body['email']))) {
            $errors['email'] = 'Email không đúng định dạng';
        } else {
            if (checkEmailExist(trim($body['email']), $studentId) > 0) {
                $errors['email'] = 'Email trùng với email của một account khác';
            }
        }
    }

    if (empty(trim($body['phone']))) {
        $errors['phone'] = 'Số diện thoại không được để trống!';
    } else {
        if (!isPhone(trim($body['phone']))) {
            $errors['phone'] = 'Số điện thoại không hợp lệ!';
        }
    }

    if (empty($errors)) {

        $dataUpdate = [
            'fullname' => trim($body['fullname']),
            'email' => trim($body['email']),
            'phone' => trim($body['phone']),
            'address' => trim($body['address']),
            'update_at' => date('Y-m-d H:i:s'),
        ];

        $condition = "id=$studentId";

        $updateStatus = update('student', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật thông tin thành công');
            setFlashData('msg_type', 'success');
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

    redirect('?module=account&action=profile');
}

$data = [
    'student_detail' => getStudentDetail($studentId),
];
viewClient($data);
