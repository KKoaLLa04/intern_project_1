<?php

require_once 'clients/exam_online/model/exam_online.php';

if (!empty($_GET['id'])) {
    $studentId = $_GET['id'];
    $resultDetail = getResultDetail($studentId);

    if (empty($resultDetail)) {
        setFlashData('msg', 'Kết quả không tồn tại hoặc đã bị xóa!');
        setFlashData('msg_type', 'danger');
        redirect('?module=exam_online&action=lists');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=exam_online&action=lists');
}

$data = [
    'result' => $resultDetail,
];

viewClient($data);
