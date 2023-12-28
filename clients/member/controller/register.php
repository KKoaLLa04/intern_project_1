<?php

require_once './clients/member/model/member.php';

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty(trim($body['phone']))) {
        $errors['phone'] = 'Số điện thoại không được để trống!';
    } else {
        if (!isPhone(trim($body['phone']))) {
            $errors['phone'] = 'Số điện thoại không đúng định dạng';
        }
    }

    if (empty(trim($body['email']))) {
        $errors['email'] = 'Email bắt buộc phải nhập';
    } else {
        if (!isEmail(trim($body['email']))) {
            $errors['email'] = 'Email không đúng định dạng';
        } else {
            $email = trim($body['email']);
            if (checkEmailExits($email) > 0) {
                $errors['email'] = 'Email đã tồn tại!';
            }
        }
    }

    if (empty(trim($body['fullname']))) {
        $errors['fullname'] = 'Họ và tên không được để trống';
    }

    if (empty(trim($body['password']))) {
        $errors['password'] = 'Mật khẩu không được để trống';
    } else {
        if (strlen(trim($body['password'])) < 6) {
            $errors['password'] = 'Mật khẩu không được nhỏ hơn 6 ký tự';
        }
    }

    if (empty(trim($body['confirm_password']))) {
        $errors['confirm_password'] = 'Xác nhận mật khẩu không được để trống!';
    } else {
        if (trim($body['password']) !== trim($body['confirm_password'])) {
            $errors['confirm_password'] = 'Xác nhận mật khẩu không trùng khớp';
        }
    }

    if (empty($errors)) {

        // Tao link active
        $token = sha1(uniqid() . time());
        $linkActive = _WEB_HOST_ROOT . '/?module=member&action=active&token=' . $token;
        $dataInsert = [
            'fullname' => trim($body['fullname']),
            'email' => trim($body['email']),
            'phone' => trim($body['phone']),
            'password' => password_hash(trim($body['password']), PASSWORD_DEFAULT),
            'status' => 0,
            'role' => 0,
            'token' => $token,
            'create_at' => date("Y-m-d H:i:s")
        ];

        $insertStatus = insert('student', $dataInsert);
        if (!empty($insertStatus)) {

            $subject = 'Hướng dẫn kích hoạt tài khoản!';
            $content = 'Chào bạn: <b>' . trim($body['fullname']) . '</b> <br/>';
            $content .= 'Bạn vừa đăng ký tài khoản, vui lòng click vào link dưới đây để kích hoạt tài khoản của bạn! <br/>';
            $content .= $linkActive . '<br/>';
            $content .= 'Trân trọng!';

            $sendMailStatus = sendMail(trim($body['email']), $subject, $content);

            if (!empty($sendMailStatus)) {
                setFlashData('msg', 'Chúc mừng bạn đăng ký tài khoản thành công, vui lòng vào email để kích hoạt tài khoản');
                setFlashData('msg_type', 'success');
            } else {
                setFlashData('msg', 'Lỗi hệ thống, vui lòng liên hệ quản trị viên để được xử lý!');
                setFlashData('msg_type', 'danger');
            }
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại dữ liệu!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }
    redirect('?module=member&action=register');
}

viewClient();
