<?php

require_once './staff/model/staff.php';

$data = [
    'staff' => getAllStaff(),
];

view($data);
