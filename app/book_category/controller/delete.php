<?php

require_once './book_category/model/book_category.php';
if (!empty($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];

    $condition = 'id = ' . $id;

    $checkForeignKey = checkForeignKey($id);

    if ($checkForeignKey > 0) {
        setFlashData('msg', 'Trong danh mục còn ' . $checkForeignKey . ' đầu sách, không thể xóa');
        setFlashData('msg_type', 'danger');
    } else {
        $deleteStatus = delete('book_category', $condition);

        if (!empty($deleteStatus)) {
            setFlashData('msg', 'Xóa danh mục sách thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
    setFlashData('msg_type', 'danger');
}
redirect('?module=book_category&action=lists');
