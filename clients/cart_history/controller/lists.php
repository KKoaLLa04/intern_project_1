<?php

require_once './clients/cart_history/model/cart_history.php';

$data = [
    'cart_history' => getAllCartStudent(),
];
viewClient($data);
