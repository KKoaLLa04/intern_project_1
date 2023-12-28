<?php

function getAllLesson($module_id = '', $filter = '')
{
    $sql = "SELECT lesson.*, module.title as module_name, course.title as course_name FROM lesson INNER JOIN module ON module.id=lesson.module_id INNER JOIN course ON course.id=module.course_id";
    if (!empty($module_id)) {
        $sql .= " AND module_id=$module_id";
    }

    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            $sql .= " AND lesson.teacher_id=$id";
        }
    }

    if (!empty($filter)) {
        $sql .= " $filter";
    }

    $sql .= " ORDER BY course.title DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllModule()
{
    $sql = "SELECT * FROM module";
    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            $sql .= " WHERE teacher_id=$id";
        }
    }
    $sql .= " ORDER BY course_id DESC";
    $data = getRaw($sql);
    return $data;
}


function getLessonDetail($id)
{
    $sql = "SELECT * FROM lesson WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}
