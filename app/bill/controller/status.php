<?php

if (!empty($_GET['status']) && !empty($_GET['id'])) {
    $status = $_GET['status'];

    $id = $_GET['id'];
    $condition = "id=$id";
    $dataUpdate = [
        'status' => $status,
        'update_at' => date('Y-m-d H:i:s'),
    ];

    update('bill', $dataUpdate, $condition);
}

redirect('?module=bill&action=lists');
