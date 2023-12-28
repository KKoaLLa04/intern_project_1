<?php

require_once './bill/model/bill.php';
if (!empty($_GET['code'])) {
    $code = $_GET['code'];
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
    setFlashData('msg_type', 'danger');
    redirect('?module=bill&action=lists');
}

$data = [
    'cart_bill' => getCartToBill($code),
    'bill_info' => getBillCode($code),
];

view($data);