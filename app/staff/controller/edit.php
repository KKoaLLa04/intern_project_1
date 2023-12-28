<?php

require_once './staff/model/staff.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $staffDetail = getStaffDetail($id);
    if (empty($staffDetail)) {
        setFlashData('msg', 'Cộng tác viên không tồn tại hoặc đã bị xóa');
        setFlashData('msg_type', 'danger');
        redirect('?module=staff&action=lists');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=staff&action=lists');
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
            $checkEmail = checkEMailUpdate($email);
            if ($checkEmail > 1) {
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

    if (empty($body['group_id'])) {
        $errors['group_id'] = 'Vui lòng phân quyền cho cộng tác viên!';
    }

    if (empty($errors)) {

        if (empty(trim($body['password']))) {
            $dataUpdate = [
                'fullname' => trim($body['fullname']),
                'phone' => trim($body['phone']),
                'email' => trim($body['email']),
                'exp' => trim($body['exp']),
                'group_id' => trim($body['group_id']),
                'status' => trim($body['status']),
                'update_at' => date('Y-m-d H:i:s')
            ];
        } else {
            $dataUpdate = [
                'fullname' => trim($body['fullname']),
                'phone' => trim($body['phone']),
                'email' => trim($body['email']),
                'exp' => trim($body['exp']),
                'password' => password_hash(trim($body['password']), PASSWORD_DEFAULT),
                'group_id' => trim($body['group_id']),
                'status' => trim($body['status']),
                'update_at' => date('Y-m-d H:i:s')
            ];
        }

        $condition = "id=$id";

        $updateStatus = update('teacher', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật cộng tác viên thành công');
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

    redirect('?module=staff&action=edit&id=' . $id);
}


$data = [
    'groups' => getAllGroups(),
    'staff' => $staffDetail,
];
view($data);
