<?php

require_once './clients/exam_online/model/exam_online.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $testDetail = getTestDetail($id);
    if (empty($testDetail)) {
        setFlashData('msg', 'Bài thi đã hết hạn hoặc đã bị xóa!');
        setFlashData('msg_type', 'danger');
        redirect('?module=exam_online&action=lists');
    } else {
        setFlashData('test_detail', $testDetail);
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=exam_online&action=lists');
}

if (isPost()) {
    $body = getBody();

    $result = $body['result'];
    $answerArr = json_decode($testDetail['answer'], true);
    $countQuestion = count($answerArr);
    $avg = (float)(10 / $countQuestion);
    $score = 0;
    foreach ($result as $key => $item) {
        if ($item[0] == $answerArr[$key]) {
            $score = (float)($score + $avg);
        }
    }
    $studentId = isLoginStudent()['id'];
    $dataInsert = [
        'student_id' => $studentId,
        'test_id' => $id,
        'score' => $score,
        'create_at' => date('Y-m-d H:i:s')
    ];

    $insertStatus = insert('result', $dataInsert);

    if (!empty($insertStatus)) {
        redirect('?module=exam_online&action=result&id=' . $studentId);
    } else {
        setFlashData('msg', 'Lỗi hệ thống, bài của bạn hiện vẫn chưa được nộp');
        setFlashData('msg_type', 'danger');
    }
}

$data = [
    'test_detail' => getTestDetail($id),
];

viewClient($data);
