<?php

require_once './clients/course/model/course.php';

if (!empty($_GET['course_id'])) {
    $id = $_GET['course_id'];
    $course_detail = getCourseDetail($id);
    $module_id['module_id'] = [];
    $informationCourse = getAllInfo($id);
    $courseInfo = courseInfo($id);

    if (isLoginStudent()) {
        $studentDetail = isLoginStudent();
        $student_id = $studentDetail['id'];
        $permissionCourse = permissionCourse($id, $student_id);
    }
    foreach ($course_detail as $key => $item) {
        if (!empty($item['module_id']) && !in_array($item['module_id'], $module_id['module_id'])) {
            $module_id['module_id'][] = $item['module_id'];
        }
    }
    $module_id['module_id'] = array_filter($module_id['module_id']);

    $lesson = [];
    foreach ($module_id['module_id'] as $key => $item) {
        $lesson[] = getLessonModule($item);
    }

    $videoUrl = '';
    if (!empty($_GET['video_url'])) {
        $videoUrl =  $_GET['video_url'];
    }

    $data = [
        'module' => getModuleDetail($id),
        'course_detail' => $lesson,
        'course_id' => $id,
        'video_url' => $videoUrl,
        'information' => $informationCourse,
        'price' => selectCourse($id),
        'course_info' => $courseInfo,
    ];

    if (isLoginStudent()) {
        $data['permission'] = $permissionCourse;
    }
}

viewClient($data);
