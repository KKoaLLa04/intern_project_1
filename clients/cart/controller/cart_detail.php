<?php

require_once './clients/cart/model/cart.php';

if (!empty($_GET['code'])) {
    $code = $_GET['code'];
    $billDetail = getBillDetail($code);

    $cartDetail = getCartBill($code);
}

$data = [
    'bill_detail' => $billDetail,
    'cart_detail' => $cartDetail,
];

viewClient($data);
