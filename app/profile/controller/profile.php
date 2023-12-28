<?php

require_once 'profile/model/profile.php';

if (isPost()) {
    if (!empty($_SESSION['loginTeacher'])) {
        $id = $_SESSION['loginTeacher']['id'];
    }

    $body = getBody();

    $errors = [];
    // validate
    if (empty($body["fullname"])) {
        $errors['fullname'] = 'Họ tên giảng viên không được để trống!';
    } else {
        if (strlen($body['fullname']) <= 6) {
            $errors['fullname'] = 'Họ và tên giảng viên không được nhỏ hơn 6 ký tự';
        }
    }

    // if (empty($body['email'])) {
    //     $errors['email'] = 'Email của giảng viên không được để trống';
    // } else {
    //     if (!isEmail($body['email'])) {
    //         $errors['email'] = 'Email không đúng định dạng';
    //     } else {
    //         $email = trim($body['email']);
    //         $checkEmail = checkEmailUpdate($email, $id);
    //         if ($checkEmail > 1) {
    //             $errors['email'] = 'Email đã tồn tại!';
    //         }
    //     }
    // }

    if (empty($body['phone'])) {
        $errors['phone'] = 'Số điện thoại không được để trống';
    } else {
        if (!isPhone($body['phone'])) {
            $errors['phone'] = 'Số điện thoại không hợp lệ!';
        }
    }

    if (empty($errors)) {

        $dataUpdate = [
            'fullname' => trim($body['fullname']),
            'phone' => trim($body['phone']),
            // 'email' => trim($body['email']),
            'update_at' => date('Y-m-d H:i:s')
        ];

        $condition = "id=$id";

        $updateStatus = update('teacher', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật thông tin thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Dữ liệu nhập vào không hợp lệ, vui lòng thử lại');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=profile&action=profile');
}

$data = [
    'profile' => getProfile(),
];

view($data);
