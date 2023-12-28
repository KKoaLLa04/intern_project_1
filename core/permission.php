<?php

function checkPermission($permissionData, $module, $role = 'Xem')
{
    if (!empty($permissionData)) {
        if (!empty($permissionData[$module])) {
            $moduleDetail = $permissionData[$module];

            foreach ($moduleDetail as $item) {
                if ($role == $item) {
                    return true;
                }
            }
        }
    }

    return false;
}

function getCurrentLogin($id = null)
{
    if (empty($id)) {
        if (!empty($_SESSION['loginTeacher'])) {
            $id = $_SESSION['loginTeacher']['id'];
        }
    }
    $sql = "SELECT * FROM teacher INNER JOIN groups ON groups.id=teacher.group_id WHERE teacher.id = $id";
    $data = firstRaw($sql);
    return $data;
}

function permissionData()
{
    $teacher = getCurrentLogin();

    $group_id = $teacher['group_id'];

    $sql = "SELECT * FROM groups WHERE id=$group_id";
    $data = firstRaw($sql);

    $permissionJson = $data['permission'];
    $permissionArr = json_decode($permissionJson, true);
    return $permissionArr;
}
