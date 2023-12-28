<?php

function getAllCateTest()
{
    $sql = "SELECT * FROM test_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getTestDetail($id)
{
    $sql = "SELECT * FROM test_category WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}

function getAllTest()
{
    $sql = "SELECT test.*,name FROM test INNER JOIN test_category ON test_category.id=test.test_id ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getDetail($id)
{
    $sql = "SELECT * FROM test WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
