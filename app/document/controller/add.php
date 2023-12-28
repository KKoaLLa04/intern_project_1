<?php

require_once './document/model/document.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'document', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty(trim($body['title']))) {
        $errors['title'] = 'Tiêu đề tài liệu không được để trống';
    }

    if (empty(trim($body['document_id']))) {
        $errors['document_id'] = 'Danh mục tài liệu bắt buộc phải chọn';
    }

    if (empty($_FILES['answers']['name'])) {
        $errors['answer'] = 'File đáp án bắt buộc phải thêm';
    }

    if (empty($errors)) {
        $fileName = $_FILES['answers']['name'];
        $from = $_FILES['answers']['tmp_name'];
        $to = _WEB_PATH_ROOT . '/uploads/' . $fileName;
        move_uploaded_file($from, $to);
        $dataInsert = [
            'title' => trim($body['title']),
            'document_id' => trim($body['document_id']),
            'answers' => trim($fileName),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('document', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm tài liệu mới thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=document&action=add');
}

$data = [
    'doc_cate' => getAllDocCate(),
];
view($data);
