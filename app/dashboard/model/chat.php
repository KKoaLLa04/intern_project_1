<?php

function getAllChat()
{
    $sql = "SELECT chat.*, fullname,email, name FROM chat INNER JOIN teacher ON teacher.id=chat.teacher_id INNER JOIN groups ON groups.id=teacher.group_id ORDER BY chat.id DESC";
    $data = getRaw($sql);
    return $data;
}
