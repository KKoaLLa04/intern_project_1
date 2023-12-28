<?php

function getAllCate($filter = '')
{
    $sql = "SELECT * FROM course_category WHERE 1";
    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            $sql .= " AND teacher_id=$id";
        }
    }

    if (!empty($filter)) {
        $sql .= " $filter";
    }

    $data = getRaw($sql);
    return $data;
}

function getDetailCate($id)
{
    $sql = "SELECT * FROM course_category WHERE id=$id";
    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            $sql .= " AND teacher_id=$id";
        }
    }
    $data = firstRaw($sql);
    return $data;
}

function checkForeignKey($cate_id)
{
    $sql = "SELECT * FROM course WHERE cate_id=$cate_id";
    $data = getRows($sql);
    return $data;
}
