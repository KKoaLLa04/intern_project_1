<?php

require_once './clients/cart_history/model/cart_history.php';

if (!empty($_GET['code'])) {
    $code = $_GET['code'];
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã bị xóa!');
    setFlashData('msg_type', 'danger');
    redirect('?module=cart_history&action=lists');
}

$data = [
    'cart_detail' => getCartDetail($code),
];

viewClient($data);
