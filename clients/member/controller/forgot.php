<?php

require_once './clients/member/model/member.php';
if (isPost()) {
    $body = getBody();
    $errors = [];
    if (empty(trim($body['email']))) {
        $errors['email'] = 'Vui lòng nhập email';
    } else {
        if (!isEmail($body['email'])) {
            $errors['email'] = 'Email không đúng định dạng!';
        } else {
            if (checkEmailExits(trim($body['email'])) < 1) {
                $errors['email'] = 'Email không tồn tại trong hệ thống';
            }
        }
    }

    if (empty($errors)) {
        $email = trim($body['email']);
        // tao token forgot
        $token_forgot = sha1(uniqid() . time());
        $dataUpdate = [
            'forgot' => $token_forgot,
            'update_at' => date('Y-m-d H:i:s')
        ];

        $condition = "email='$email'";

        $updateStatus = update('student', $dataUpdate, $condition);

        if (!empty($updateStatus)) {

            // tạo link reset
            $linkReset = _WEB_HOST_ROOT . '?module=member&action=reset&token=' . $token_forgot;

            $subject = 'Hướng dẫn khôi phục mật khẩu';
            $content = 'Chào bạn, chúng tôi nhận được yêu cầu khôi phục mật khẩu từ bạn! <br/>';
            $content .= 'Vui lòng click vào link dưới đây để đổi lại mật khẩu mới: <br/>';
            $content .= $linkReset . '<br/>';
            $content .= 'Trân trọng!';

            $sendMailStatus = sendMail($email, $subject, $content);

            if (!empty($sendMailStatus)) {
                setFlashData("msg", 'Bạn hãy kiểm tra email để đổi mật khẩu mới');
                setFlashData('msg_type', 'success');
            } else {
                setFlashData("msg", 'Lỗi hệ thống, vui lòng liên hệ quản trị viên!');
                setFlashData('msg_type', 'danger');
            }
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng liên hệ quản trị viên!');
            setFlashData("msg_type", 'danger');
        }
    } else {
        setFlashData('msg', "Vui lòng kiểm tra dữ liệu nhập vào");
        setFlashData("msg_type", 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=member&action=forgot');
}
viewClient();