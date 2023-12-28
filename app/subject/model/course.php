<?php

function getAllCourse($cate_id = '', $filter = '')
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id WHERE 1";
    if (!empty($cate_id)) {
        $sql .= " AND cate_id=$cate_id";
    }

    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            if (empty($cate_id)) {
                $sql .= " AND course.teacher_id=$id";
            } else {
                $sql .= " AND course.teacher_id=$id";
            }
        }
    }

    if (!empty($filter)) {
        $sql .= " $filter";
    }

    $sql .= " ORDER BY course.cate_id DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllTeacher()
{
    $sql = "SELECT * FROM teacher";
    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            $sql .= " WHERE id=$id";
        }
    }
    $data = getRaw($sql);
    return $data;
}

function getAllCate()
{
    $sql = "SELECT * FROM course_category";
    // if (isLoginTeacher()) {
    //     $id = isLoginTeacher()['id'];
    //     $group_id = isLoginTeacher()['group_id'];
    //     if ($group_id !== 1 && $group_id !== 2) {
    //         $sql .= " WHERE teacher_id=$id";
    //     }
    // }
    $data = getRaw($sql);
    return $data;
}

function getCourseDetail($id)
{
    $sql = "SELECT * FROM course WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

function checkForeignKey($course_id)
{
    $sql = "SELECT * FROM module WHERE course_id=$course_id";
    $data = getRows($sql);
    return $data;
}
