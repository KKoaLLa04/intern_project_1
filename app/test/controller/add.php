<?php

require_once 'test/model/test.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'test', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
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
        $dataInsert = [
            'title' => trim($body['title']),
            'test_id' => trim($body['test_id']),
            'question' => $question,
            'choice' => $choice,
            'answer' => $answer,
            'create_at' => date('Y-m-d H:i:s'),
        ];
        $insertStatus = insert('test', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm bài thi mới thành công');
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

    redirect('?module=test&action=add');
}


$data = [
    'test_cate' => getAllCateTest(),
];
view($data);
