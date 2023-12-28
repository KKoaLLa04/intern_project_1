<?php

function getAllDocCate()
{
    $sql = "SELECT * FROM document_category";
    $data = getRaw($sql);
    return $data;
}

function getAllDoc()
{
    $sql = "SELECT * FROM document ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
