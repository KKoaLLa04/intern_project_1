<?php

if (isGet()) {
    $body = getBody();

    $course_id = $_GET['course_id'];
    if (!empty($_GET['permission'])) {

        setFlashData('msg', 'Bạn chưa mua khóa học, vui lòng mua khóa học để xem video bài giảng!');
        setFlashData('msg_type', 'danger');
        redirect('?module=course&action=detail&course_id=' . $course_id);
    }

    setFlashData('msg', 'Vui lòng đăng nhập để xem video khóa học');
    setFlashData('msg_type', 'danger');
    redirect('?module=course&action=detail&course_id=' . $course_id);
}
