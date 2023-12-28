<?php

require_once './clients/cart/model/cart.php';
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $condition = "id=$id";

    delete('cart', $condition);

    redirect('?module=cart&action=lists');
}
