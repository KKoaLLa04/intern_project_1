<?php
require_once './clients/cart/model/cart.php';
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}
if (!empty($_GET['vnp_BankTranNo'])) {
    $studentDetail = isLoginStudent();
    $studentId = $studentDetail['id'];
    $code = $_GET['code'];
    $body = getFlashData('body');
    $dataInsert = [
        'name' => trim($body['fullname']),
        'email' => trim($body['email']),
        'address' => trim($body['address']),
        'phone' => trim($body['phone']),
        'pay' => trim($body['pay']),
        'client_id' => $studentId,
        'total' => trim($body['price']),
        'status' => 0,
        'code' => trim($code),
        'create_at' => date('Y-m-d H:i:s'),
    ];

    $insertStatus = insert('bill', $dataInsert);

    if (!empty($insertStatus)) {
        // insert cart
        $dataInsert = [
            'name' => trim($body['name']),
            'images' => trim($body['thumbnail']),
            'price' => trim($body['price']),
            'quantity' => 1,
            'code_id' => $code,
            'student_id' => $studentId,
            'book_id' => trim($body['book_id']),
            'status' => 1,
            'create_at' => date('Y-m-d H:i:s'),
        ];

        insert('cart', $dataInsert);
        // update book
        $cartCode = selectCart($code);
        foreach ($cartCode as $key => $item) {
            $quantity = $item['quantity'];
            $bookDetail = getBook($item['book_id']);
            $quantityUpdate = $bookDetail['quantity'] - $quantity;
            $dataUpdate = [
                'quantity' => $quantityUpdate,
                'update_at' => date('Y-m-d H:i:s')
            ];

            $condition = "id=" . $item['book_id'];

            update('book', $dataUpdate, $condition);
        }
        // end update
    }
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
        setFlashData('msg', 'Bạn đã đặt hàng thành công!');
        setFlashData('msg_type', 'success');
    } else {
        setFlashData('msg', 'Lỗi hệ thống, vui lòng liên hệ quản trị viên');
        setFlashData('msg_type', 'danger');
    }
} else {
    redirect('?module=book&action=buy&id=' . $id);
}

redirect('?module=cart&action=thanks&code=' . $code_cart);