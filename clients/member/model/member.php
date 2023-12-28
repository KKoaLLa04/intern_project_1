<?php

function checkEmailExits($email)
{
    $sql = "SELECT * FROM student WHERE email='$email'";
    $data = getRows($sql);
    return $data;
}

function checkActiveToken($token)
{
    $sql = "SELECT * FROM student WHERE token='$token'";
    $data = firstRaw($sql);
    return $data;
}

function checkAccount($email)
{
    $sql = "SELECT * FROM student WHERE email='$email'";
    $data = firstRaw($sql);
    return $data;
}

function checkForgotToken($token)
{
    $sql = "SELECT * FROM student WHERE forgot='$token'";
    $data = firstRaw($sql);
    return $data;
}

function checkAccountTeacher($email)
{
    $sql = "SELECT * FROM teacher WHERE email='$email'";
    $data = firstRaw($sql);
    return $data;
}