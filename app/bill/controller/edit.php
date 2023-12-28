<?php

require_once './bill/model/bill.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=bill&action=lists');
}

if (isPost()) {
    $body = getBody();

    $dataUpdate = [
        'status' => trim($body['status']),
        'note' => trim($body['note']),
        'update_at' => date('Y-m-d H:i:s')
    ];

    $condition = "id=$id";

    $updateStatus = update('bill', $dataUpdate, $condition);

    if (!empty($updateStatus)) {
        setFlashData('msg', 'Cập nhật đơn hàng thành công');
        setFlashData('msg_type', 'success');
    } else {
        setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
        setFlashData('msg_type', 'danger');
    }

    redirect('?module=bill&action=edit&id=' . $id);
}
$data = [
    'bill_detail' => getBillDetail($id),
];
view($data);
