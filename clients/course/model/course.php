<?php

function getAllCourse()
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id ORDER BY course.cate_id DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllCate($filter = '')
{
    $sql = "SELECT * FROM course_category";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $data = getRaw($sql);
    return $data;
}

function getAllCourseId($id)
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id WHERE course.cate_id = '$id' ORDER BY course.cate_id DESC LIMIT 0,4";
    $data = getRaw($sql);
    return $data;
}

function getAllCourseIdToCate($id)
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id WHERE course.cate_id = '$id' ORDER BY course.cate_id DESC";
    $data = getRaw($sql);
    return $data;
}


function getAllLesson()
{
    $sql = "SELECT * FROM lesson";
    $data = getRaw($sql);
    return $data;
}

function getCourseDetail($id)
{
    $sql = "SELECT lesson.*,module.title as module_name FROM course INNER JOIN module ON module.course_id = course.id INNER JOIN lesson ON lesson.module_id = module.id WHERE course.id = $id";
    $data = getRaw($sql);
    return $data;
}

function getModuleDetail($course_id)
{
    $sql = "SELECT * FROM module WHERE course_id=$course_id";
    $data = getRaw($sql);
    return $data;
}

function getLessonModule($module_id)
{
    $sql = "SELECT * FROM lesson WHERE module_id=$module_id";
    $data = getRaw($sql);
    return $data;
}

function getAllInfo($course_id)
{
    $sql = "SELECT *, count(course_id) as count_module FROM module WHERE course_id = $course_id GROUP BY course_id";
    $data = firstRaw($sql);
    return $data;
}

function selectCourse($course_id)
{
    $sql = "SELECT * FROM course WHERE id = $course_id";
    $data = firstRaw($sql);
    return $data;
}

function permissionCourse($course_id, $student_id)
{
    $sql = "SELECT * FROM code_course WHERE course_id=$course_id AND student_id=$student_id";
    $data = firstRaw($sql);
    return $data;
}

function courseInfo($id)
{
    $sql = "SELECT course.*, fullname FROM course INNER JOIN teacher ON teacher.id=course.teacher_id WHERE course.id=$id";
    $data = firstRaw($sql);
    return $data;
}

function checkBuyCourse($course_id)
{
    if (isLoginStudent()) {
        $studentId = isLoginStudent()['id'];
    }
    $sql = "SELECT * FROM code_course WHERE course_id=$course_id AND student_id=$studentId";
    $data = firstRaw($sql);
    if (!empty($data)) {
        return true;
    }

    return false;
}

function courseInfoStudent()
{
    if (isLoginStudent()) {
        $studentId = isLoginStudent()['id'];
    }
    $sql = "SELECT * FROM code_course INNER JOIN course ON course.id=code_course.course_id INNER JOIN teacher ON teacher.id=course.teacher_id WHERE student_id=$studentId";
    $data = getRaw($sql);
    return $data;
}

// loc du lieu
function courseFilter($filter = '')
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id";
    if (!empty($filter)) {
        $sql .= " $filter";
    }

    $sql .= " ORDER BY create_at DESC";

    $data = getRaw($sql);
    return $data;
}
