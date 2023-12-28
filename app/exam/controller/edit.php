<?php

use CKSource\CKFinder\Filesystem\File\UploadedFile;

require_once './exam/model/exam.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'exam', 'Sửa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $examDetail = getExamDetail($id);

    if (!empty($examDetail)) {
        setFlashData('exam_detail', $examDetail);
    } else {
        setFlashData('msg', 'Đề thi không tồn tại hoặc đã bị xóa!');
        setFlashData('msg_type', 'danger');
        redirect('?module=exam&action=lists');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=exam&action=lists');
}

if (isPost()) {
    $body = getBody();

    $errors = [];
    // validate

    if (empty($body['title'])) {
        $errors['title'] = 'Tiêu đề đề thi không được để trống';
    }

    if (empty($body['exam_id'])) {
        $errors['exam_id'] = 'Bắt buộc chọn danh mục đề thi';
    }

    if (empty($body['content'])) {
        $errors['content'] = 'Nội dung không được để trống';
    }

    if (empty($errors)) {

        $images = $_FILES['images']['name'];
        $from = $_FILES['images']['tmp_name'];
        $to = _WEB_PATH_ROOT . '/uploads/' . $images;
        move_uploaded_file($from, $to);

        $dataUpdate = [
            'title' => trim($body['title']),
            'exam_id' => trim($body['exam_id']),
            'description' => trim($body['description']),
            'content' => trim($body['content']),
            'create_at' => trim($body['create_at'])
        ];

        if (!empty($_FILES['images']['name'])) {
            $dataUpdate['images'] = trim($images);
        }

        $condition = 'id=' . $id;

        $updateStatus = update('exam', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật đề thi thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu. Vui lòng kiểm tra lại dữ liệu');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=exam&action=edit&id=' . $id);
}

$data = [
    'exam_category' => getAllCate(),
];

view($data);
