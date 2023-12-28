<?php
require_once './clients/cart/model/cart.php';
if (isGet()) {
    $body = getBody();
    $course_id = $body['course_id'];
}
if (!empty($_GET['vnp_BankTranNo'])) {
    $body = getBody();
    $studentDetail = isLoginStudent();
    $studentId = $studentDetail['id'];
    $code = $_GET['code'];
    $course_id = $body['course_id'];
    $dataInsert = [
        'price' => trim($body['price']),
        'course_id' => $course_id,
        'student_id' => $studentId,
        'code' => trim($body['code']),
        'create_at' => date('Y-m-d H:i:s'),
    ];

    $insertStatus = insert('code_course', $dataInsert);

    // if (!empty($insertStatus)) {
    // }
    $vnp_Amount = $_GET['vnp_Amount'];
    $vnp_BankCode = $_GET['vnp_BankCode'];
    $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
    $vnp_CardType = $_GET['vnp_CardType'];
    $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
    $vnp_PayDate = $_GET['vnp_PayDate'];
    $vnp_TmnCode = $_GET['vnp_TmnCode'];
    $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
    $code_cart = $code;

    $dataInsert = [
        'vnp_Amount' => $vnp_Amount,
        'vnp_BankCode' => $vnp_BankCode,
        'vnp_BankTranNo' => $vnp_BankTranNo,
        'vnp_CardType' => $vnp_CardType,
        'vnp_OrderInfo' => $vnp_OrderInfo,
        'vnp_PayDate' => $vnp_PayDate,
        'vnp_TmnCode' => $vnp_TmnCode,
        'vnp_TransactionNo' => $vnp_TransactionNo,
        'code_cart' => $code_cart,
    ];
    $insertStatus = insert('vnpay', $dataInsert);
    if (!empty($insertStatus)) {
        setFlashData('msg', 'Bạn đã mua khóa học thành công!');
        setFlashData('msg_type', 'success');
    } else {
        setFlashData('msg', 'Lỗi hệ thống, vui lòng liên hệ quản trị viên');
        setFlashData('msg_type', 'danger');
    }
} else {
    redirect('?module=course&action=buy_course&id=' . $course_id);
}

redirect('?module=course&action=detail&course_id=' . $course_id);