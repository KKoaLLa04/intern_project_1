<?php
require_once './dashboard/model/chart.php';
require_once './dashboard/model/chat.php';

// tinh nang chat xu ly them vao database
if (isPost()) {
    $body = getBody();

    if (!empty(trim($body['message']))) {
        $message = trim($body['message']);
        $teacherDetail = isLoginTeacher();

        $dataInsert = [
            'message' => $message,
            'teacher_id' => $teacherDetail['id'],
            'create_at' => date('Y-m-d H:i:s'),
        ];

        insert('chat', $dataInsert);
    }
    redirect(_WEB_HOST_ROOT_ADMIN . '#chat_form_custom');
}

// ***************************************chart************************************
$totalBook = getTotalBook();
$totalCourse = getTotalCourse();
$cateToCourse = getCateToCourse();

// box
$totalBox = $totalBook + $totalCourse;
$countStudent = getCountStudent();
$countTeacher = getCountTeacher();
$countLesson = getCountLesson();
$countCourse = getCountCourse();
$data = [
    'total_book' => $totalBook,
    'total_course' => $totalCourse,
    'cate_to_course' => $cateToCourse,
    'total_box' => $totalBox,
    'count_student' => $countStudent,
    'count_teacher' => $countTeacher,
    'count_lesson' => $countLesson,
    'count_course' => $countCourse,
    'chat' => getAllChat(),
];

view($data);
