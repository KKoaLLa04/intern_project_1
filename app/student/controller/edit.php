<?php

require_once './student/model/student.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'student', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $studentInfo = studentDetail($id);
    if (empty($studentInfo)) {
        setFlashData('msg', 'Học sinh không tồn tại hoặc đã bị xóa!');
        setFlashData('msg_type', 'danger');
        redirect('?module=student&action=lists');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=student&action=lists');
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate

    if (empty(trim($body['fullname']))) {
        $errors['fullname'] = "Tên học viên không được để trống";
    }

    if (empty(trim($body['email']))) {
        $errors['email'] = "Email học viên không được để trống";
    } else {
        if (!isEmail($body["email"])) {
            $errors["email"] = 'Email không đúng định dạng';
        } else {
            if (checkEmailExistEdit($body['email'], $id) > 0) {
                $errors['email'] = 'Email đã tồn tại! vui lòng dùng email khác';
            }
        }
    }

    if (empty(trim($body['phone']))) {
        $errors['phone'] = 'Số điện thoại của học viên không được để trống';
    }

    if (empty(trim($body['status'])) && trim($body['status']) != 1) {
        $errors['status'] = 'Tình trạng phải là đã kích hoạt';
    }

    // if (empty(trim($body['password']))) {
    //     $errors['password'] = 'Mật khẩu không được để trống';
    // }

    // if (empty(trim($body['confirm_password']))) {
    //     $errors['confirm_password'] = 'Xác nhận mật khẩu không được để trống';
    // } else {
    //     if (trim($body['password']) !== trim($body['confirm_password'])) {
    //         $errors['confirm_password'] = 'Xác nhận mật khẩu không trùng khớp';
    //     }
    // }

    if (empty($errors)) {
        if (!empty(trim($body['password']))) {
            $dataUpdate = [
                'fullname' => trim($body['fullname']),
                'email' => trim($body['email']),
                'phone' => trim($body['phone']),
                'status' => trim($body['status']),
                'password' => password_hash(trim($body['password']), PASSWORD_DEFAULT),
                'role' => 0,
                'update_at' => date('Y-m-d H:i:s'),
            ];
        } else {
            $dataUpdate = [
                'fullname' => trim($body['fullname']),
                'email' => trim($body['email']),
                'phone' => trim($body['phone']),
                'status' => trim($body['status']),
                'role' => 0,
                'update_at' => date('Y-m-d H:i:s'),
            ];
        }

        $condition = "id=$id";
        $updateStatus = update('student', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật thông tin học viên thành công!');
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

    redirect('?module=student&action=edit&id=' . $id);
}

$data = [
    'student_info' => $studentInfo,
];

view($data);
