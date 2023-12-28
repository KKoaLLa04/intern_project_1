<?php

function getStudentDetail($student_id)
{
    $sql = "SELECT * FROM student WHERE id=$student_id";
    $data = firstRaw($sql);
    return $data;
}

function checkEmailExist($email, $student_id)
{
    $sql = "SELECT * FROM student WHERE email='$email' AND id <> $student_id";
    $data = getRows($sql);
    return $data;
}
