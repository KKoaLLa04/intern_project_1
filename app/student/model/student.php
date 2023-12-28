<?php

function getAllStudent($filter = '')
{
    $sql = "SELECT * FROM student WHERE 1 ";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $data = getRaw($sql);
    return $data;
}

function checkEmailExist($email)
{
    $sql = "SELECT * FROM student WHERE email ='$email'";
    $data = getRows($sql);
    return $data;
}

function checkEmailExistEdit($email, $id)
{
    $sql = "SELECT * FROM student WHERE email='$email' ANd id <> $id";
    $data = getRows($sql);
    return $data;
}

function studentDetail($id)
{
    $sql = "SELECT * FROM student WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
