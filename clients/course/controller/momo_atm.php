<?php

require_once './clients/cart/model/cart.php';
if (isGet()) {
    $body = getBody();
    $course_id = $body['course_id'];
}
if (!empty($_GET['payType'])) {
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

    $partner_code = $_GET['partnerCode'];
    $order_id = $_GET['orderId'];
    $amount = $_GET['amount'];
    $order_info = $_GET['orderInfo'];
    $order_type = $_GET['orderType'];
    $trans_id = $_GET['transId'];
    $pay_type = $_GET['payType'];
    $code_cart = $code;

    $dataInsert = [
        'partner_code' => $partner_code,
        'order_id' => $order_id,
        'amount' => $amount,
        'order_info' => $order_info,
        'order_type' => $order_type,
        'trans_id' => $trans_id,
        'pay_type' => $pay_type,
        'code_cart' => $code_cart,
    ];
    $insertStatus = insert('momo', $dataInsert);
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
