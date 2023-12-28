<?php

require_once 'clients/exam_online/model/exam_online.php';

if (!empty($_GET['test_id'])) {
    $test_id = $_GET['test_id'];
    $student_id = isLoginStudent()['id'];
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã bị xóa');
    setFlashData('msg_type', 'danger');
    redirect('?module=exam_online&action=lists');
}
$data = [
    'test_detail' => getTestDetail($test_id),
    'exam_online' => getAllTest(),
    'id' => $test_id,
    'check_exam_todo' => checkToDoExam($student_id, $test_id),
];

viewClient($data);
