<?php

function getAllGroups()
{
    $sql = "SELECT * FROM groups WHERE name <> 'Super Admin'";
    $data = getRaw($sql);
    return $data;
}

function getGroupDetail($id)
{
    $sql = "SELECT * FROM groups WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

function getAllBlocks()
{
    $sql = "SELECT * FROM blocks WHERE name <> 'groups'";
    $data = getRaw($sql);
    return $data;
}