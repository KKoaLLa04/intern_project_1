<?php

function getAllContact($filter = '')
{
    $sql = "SELECT * FROM contact";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $data = getRaw($sql);
    return $data;
}

function getContactDetail($id)
{
    $sql = "SELECT * FROM contact WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
