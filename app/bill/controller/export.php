<?php
// ************************** ************************** ************************** ************************** ************************** **************************
// ***********************************************************file export nay la copy*****************************************************************
// **************************** ************************** ************************** ************************** ************************** **************************

// filter the excel data

require_once '../../../configs/database.php';
require_once '../../../core/connection.php';
require_once '../../../core/database.php';

function filterData(&$str)
{
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

// Excel file name for download
$fileName = "hoa-don-thanh-toan_" . date('Y-m-d') . ".xls";

// column names
$fields = array("id", 'name', 'email', 'address', 'phone', 'pay', 'total', 'note', 'status', 'client_id', 'code', 'create_at', 'update_at');

// Display column names as first row
$excelData = implode("\t", array_values($fields)) . "\n";

// Fetch records from database
$query = getRaw("SELECT * FROM bill ORDER BY id DESC");
if (!empty($query)) {
    foreach ($query as $key => $item) {
        $lineData = [
            $item['id'],
            $item['name'],
            $item['email'],
            $item['address'],
            $item['phone'],
            $item['pay'],
            $item['total'],
            $item['note'],
            $item['status'],
            $item['client_id'],
            $item['code'],
            $item['create_at'],
            $item['update_at'],
        ];
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
} else {
    $excelData .= "No records found....\n";
}
// Export for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$fileName\"");

echo $excelData;
exit();
