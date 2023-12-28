<?php

require_once './clients/cart/model/cart.php';
if (!empty($_GET['id']) && !empty($_GET['book_id'])) {
    $id = $_GET['id'];
    $book_id = $_GET['book_id'];

    $cartDetail = getCartDetail($id);

    $bookDetail = getBookCart($book_id);

    if ($cartDetail['quantity'] < $bookDetail['quantity']) {
        if (!empty($cartDetail)) {
            $quantity = $cartDetail['quantity'];
            $quantity++;
            $dataUpdate = [
                'quantity' => $quantity,
            ];

            $condition = "id=$id";

            update('cart', $dataUpdate, $condition);
        }
    } else {
        setFlashData('msg', 'Không thể thêm, hiện số lượng hàng bạn đặt là số lượng shop còn!');
        setFlashData('msg_type', 'danger');
    }

    redirect('?module=cart&action=lists');
}
