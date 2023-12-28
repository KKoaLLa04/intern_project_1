<?php

require_once './teacher/model/teacher.php';

if (!checkPermission($permissionData, 'teacher', 'Sửa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $teacherDetail = teacherDetail($id);
    setFlashData('teacher_detail', $teacherDetail);
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=teacher&action=lists');
}

if (isPost()) {
    $body = getBody();
    $id = $body['id'];

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
            $checkEmail = checkEmailUpdate($email, $id);
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

    if (empty($errors)) {

        $dataUpdate = [
            'fullname' => trim($body['fullname']),
            'phone' => trim($body['phone']),
            'email' => trim($body['email']),
            'exp' => trim($body['exp']),
            'update_at' => date('Y-m-d H:i:s')
        ];

        $condition = 'id=' . $id;

        $updateStatus = update('teacher', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật thông tin giảng viên thành công');
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

    redirect('?module=teacher&action=edit&id=' . $id);
}

view();
