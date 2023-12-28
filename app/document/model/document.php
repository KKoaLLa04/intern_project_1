<?php

function getAllDocCate()
{
    $sql = "SELECT * FROM document_category";
    $data = getRaw($sql);
    return $data;
}

function getDocCateDetail($id)
{
    $sql = "SELECT * FROM document_category WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}

function getAllDoc()
{
    $sql = "SELECT document.*, document_category.name as cate_name FROM document INNER JOIN document_category ON document_category.id=document.document_id ORDER BY document_id DESC";
    $data = getRaw($sql);
    return $data;
}
