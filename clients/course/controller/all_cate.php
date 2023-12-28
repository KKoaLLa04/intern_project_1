<?php

require_once './clients/course/model/course.php';

if (!empty($_GET['cate_id'])) {
    $cateId = $_GET['cate_id'];

    $filter = " WHERE id=$cateId";
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=course&action=lists');
}

$course_category = getAllCate($filter);
$course = [];
if (!empty($course_category)) {
    foreach ($course_category as $key => $item) {
        $course[$key] = getAllCourseIdToCate($item['id']);
    }
}

$course = array_filter($course);
// $course = array_values($course);

$data = [
    'course_category' => getAllCate($filter),
    'course_detail' => $course,
];

viewClient($data);
