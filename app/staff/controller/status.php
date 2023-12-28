<?php

if (isset($_GET['status']) && !empty($_GET['id'])) {
    $status = $_GET['status'];
    echo $status;

    $id = $_GET['id'];

    $condition = "id=$id";

    $dataUpdate = [
        'status' => $status,
        'update_at' => date('Y-m-d H:i:s'),
    ];

    update('teacher', $dataUpdate, $condition);
}

redirect('?module=staff&action=lists');
