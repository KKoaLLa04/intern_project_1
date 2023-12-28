<?php

require_once './clients/cart/model/cart.php';
if (isLoginStudent() || isLoginTeacher()) {
    if (isLoginStudent()) {
        $studentDetail = isLoginStudent();
        $studentId = $studentDetail['id'];
        $studentCart = getAllCart($studentId);
    } else {
        setFlashData('msg', 'Trang dành cho clients');
        setFlashData('msg_type', 'danger');
        redirect('index.php');
    }
} else {
    setFlashData('msg', 'Bạn phải đăng nhập để vào giỏ hàng');
    setFlashData('msg_type', 'danger');
    redirect('index.php');
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty(trim($body['fullname']))) {
        $errors['fullname'] = 'Họ và tên không được để trống';
    }

    if (empty(trim($body['email']))) {
        $errors['email'] = 'Email không được để trống';
    }

    if (empty(trim($body['address']))) {
        $errors['address'] = "Địa chỉ nhận hàng bắt buộc nhập";
    }

    if (empty(trim($body['phone']))) {
        $errors['phone'] = 'Số điện thoại bắt buộc nhập';
    }

    if (empty($errors)) {
        // Tao code id
        $code = uniqid() . time();
        // $dataInsert = [
        //     'name' => trim($body['fullname']),
        //     'email' => trim($body['email']),
        //     'address' => trim($body['address']),
        //     'phone' => trim($body['phone']),
        //     'pay' => trim($body['pay']),
        //     'client_id' => $studentId,
        //     'total' => trim($_POST['total']),
        //     'status' => 0,
        //     'code' => trim($code),
        //     'create_at' => date('Y-m-d H:i:s'),
        // ];

        setSession('information_cart', $body);
        redirect('?module=cart&action=pay');
    } else {
        setFlashData('msg', 'Vui lòng kiểm tra lại thông tin đã nhập!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=cart&action=formcart');
}

$data = [
    'student_cart' => $studentCart,
];
viewClient($data);
