<?php

require_once 'test/model/test.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'test', 'Sửa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $testDetail = getDetail($id);
    if (!empty($testDetail)) {
        setFlashData('test_detail', $testDetail);
    } else {
        setFlashData('msg', 'Bài thi không tồn tại hoặc đã bị xóa!');
        setFlashData('msg_type', 'danger');
        redirect('?module=test&action=lists');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=test&action=lists');
}

if (isPost()) {
    $body =  getBody();

    $errors = [];

    // validate
    if (empty(trim($body['title']))) {
        $errors['title'] = 'Tiêu đề bài thi không được để trống';
    }

    if (empty(trim($body['test_id']))) {
        $errors['test_id'] = 'Danh mục bài thi bắt buộc phải chọn';
    }

    if (empty($errors)) {
        $question = json_encode($body['question']['content']);
        $choice =  json_encode($body['question']['choice']);
        $answer = json_encode($body['question']['answer']);
        $dataUpdate = [
            'title' => trim($body['title']),
            'test_id' => trim($body['test_id']),
            'question' => $question,
            'choice' => $choice,
            'answer' => $answer,
            'update_at' => date('Y-m-d H:i:s'),
        ];

        $condition = "id=$id";
        $updateStatus = update('test', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật bài thi thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thông, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=test&action=edit&id=' . $id);
}


$data = [
    'test_cate' => getAllCateTest(),
    'test_detail' => $testDetail,
];
view($data);
