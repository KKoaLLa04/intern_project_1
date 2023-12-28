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

$data = [
    'student_cart' => $studentCart,
];
viewClient($data);
