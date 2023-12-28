<?php

function getAllModule($subject_id = '', $filter = '')
{
    $sql = "SELECT module.*, course.title as course_title FROM module INNER JOIN course ON module.course_id = course.id WHERE 1";
    if (!empty($subject_id)) {
        $sql .= " AND course_id = $subject_id";
    }

    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            if (empty($subject_id)) {
                $sql .= " AND module.teacher_id=$id";
            } else {
                $sql .= " AND module.teacher_id=$id";
            }
        }
    }

    if (!empty($filter)) {
        $sql .= " $filter";
    }

    $sql .= " ORDER BY course_id DESC";

    $data = getRaw($sql);
    return $data;
}

function getAllCourse()
{
    $sql = "SELECT * FROM course";
    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            $sql .= " WHERE teacher_id=$id";
        }
    }
    $sql .= " ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}


function getModuleDetail($id)
{
    $sql = "SELECT * FROM module WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

function checkForeignKey($module_id)
{
    $sql = "SELECT * FROM lesson WHERE module_id=$module_id";
    $data = getRows($sql);
    return $data;
}
