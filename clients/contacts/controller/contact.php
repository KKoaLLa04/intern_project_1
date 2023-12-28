<?php

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
        }
    }

    if (empty(trim($body['phone']))) {
        $errors['phone'] = 'Số điện thoại không được để trống!';
    } else {
        if (!isPhone(trim($body['phone']))) {
            $errors['phone'] = 'Số điện thoại không đúng định dạng';
        }
    }

    if (empty(trim($body['content']))) {
        $errors['content'] = 'Nội dung không được để trống!';
    }

    if (empty($errors)) {

        $dataInsert = [
            'fullname' => trim($body['fullname']),
            'email' => trim($body['email']),
            'phone' => trim($body['phone']),
            'status' => 0,
            'content' => trim($body['content']),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('contact', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Gửi liên hệ thành công!');
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

    redirect('?module=contacts&action=contact#form-contact');
}


viewClient();
