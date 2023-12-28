<?php

function getProfile()
{
    if (!empty($_SESSION['loginTeacher'])) {
        $id = $_SESSION['loginTeacher']['id'];
        $sql = "SELECT * FROM teacher WHERE id = $id";
        $data = firstRaw($sql);
        return $data;
    }

    return false;
}

function checkEmailUpdate($email, $id)
{
    $sql = "SELECT * FROM teacher WHERE email='$email' ANd id <> $id";
    $data = firstRaw($sql);
    echo $sql;
    return $data;
}
