<?php

require_once './teacher/model/teacher.php';
if (!checkPermission($permissionData, 'teacher', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}
if (isPost()) {
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

    if (empty($body['email'])) {
        $errors['email'] = 'Email của giảng viên không được để trống';
    } else {
        if (!isEmail($body['email'])) {
            $errors['email'] = 'Email không đúng định dạng';
        } else {
            $email = trim($body['email']);
            $checkEmail = checkEmailExist($email);
            if (!empty($checkEmail)) {
                $errors['email'] = 'Email đã tồn tại!';
            }
        }
    }

    if (empty($body['phone'])) {
        $errors['phone'] = 'Số điện thoại không được để trống';
    } else {
        if (!isPhone($body['phone'])) {
            $errors['phone'] = 'Số điện thoại không hợp lệ!';
        }
    }

    if (empty($body['password'])) {
        $errors['password'] = 'Mật khẩu không được để trống';
    }

    if (empty($body['confirm_password'])) {
        $errors['confirm_password'] = 'Xác nhận mật khẩu không được để trống';
    } else {
        if (trim($body['password']) !== trim($body['confirm_password'])) {
            $errors['confirm_password'] = 'Xác nhận mật khẩu không trùng khớp';
        }
    }

    if (empty($errors)) {

        $dataInsert = [
            'fullname' => trim($body['fullname']),
            'phone' => trim($body['phone']),
            'email' => trim($body['email']),
            'exp' => trim($body['exp']),
            'password' => password_hash(trim($body['password']), PASSWORD_DEFAULT),
            'group_id' => 3,
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('teacher', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm giảng viên mới thành công');
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

    redirect('?module=teacher&action=add');
}

view();
