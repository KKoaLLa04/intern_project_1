<?php

function getAllTeacher($filter = '')
{
    $sql = "SELECT * FROM teacher WHERE group_id=3";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $sql .= " ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function checkEmailExist($email)
{
    $sql = "SELECT * FROM teacher WHERE email='$email'";
    $data = firstRaw($sql);
    echo $sql;
    return $data;
}

function teacherDetail($id)
{
    $sql = "SELECT * FROM teacher WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

function checkEmailUpdate($email, $id)
{
    $sql = "SELECT * FROM teacher WHERE email='$email' ANd id <> $id";
    $data = firstRaw($sql);
    echo $sql;
    return $data;
}
