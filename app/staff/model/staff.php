<?php

function getAllStaff()
{
    $sql = "SELECT teacher.*, groups.name FROM teacher INNER JOIN groups ON groups.id=teacher.group_id WHERE group_id <> 3 && group_id <> 1";
    $data = getRaw($sql);
    return $data;
}

function getAllGroups()
{
    $sql = "SELECT * FROM groups WHERE id <> 1";
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

function getStaffDetail($id)
{
    $sql = "SELECT * FROM teacher WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

function checkEMailUpdate($email)
{
    $sql = "SELECT * FROM teacher WHERE email = '$email' AND email<>'$email'";
    $data = getRows($sql);
    return $data;
}
