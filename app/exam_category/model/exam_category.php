<?php

function getAllExamCate($filter = "")
{
    $sql = "SELECT * FROM exam_category";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $sql .= " ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
