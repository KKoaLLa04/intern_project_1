<?php

require_once './clients/cart/model/cart.php';
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $cartDetail = getCartDetail($id);

    if (!empty($cartDetail)) {
        $quantity = $cartDetail['quantity'];
        $quantity--;
        if ($quantity > 0) {
            $dataUpdate = [
                'quantity' => $quantity,
            ];

            $condition = "id=$id";

            update('cart', $dataUpdate, $condition);
        }

        redirect('?module=cart&action=lists');
    }
}
