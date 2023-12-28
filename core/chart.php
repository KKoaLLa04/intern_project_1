<?php
// ===========================================================Xử lý chia thời gian (nháp)===================================================
// $now = time();
// $dateTimeInfo = getDate($now);

// // 1,3,5,7,8,10,12: 31
// // 2: 28-29
// // 2,4,6,9,11: 30

// // january
// $start_january = date_create('2023-1-1'); tra ve object
// $dateFormatJanuaryStart = date_format($start_january, 'Y/m/d'); tra ve dang string

// $end_january = date_create('2023-1-31');
// $dateFormatJanuaryEnd =   date_format($end_january, 'Y/m/d');

// // February
// $start_february = date_create('2023-2-1');
// $dateFormatFebStart = date_format($start_february, 'Y/m/d');

// $end_february = date_create('2023-2-28');
// $dateFormatFebEnd =   date_format($end_february, 'Y/m/d');

// // march
// $start_march = date_create('2023-3-1');
// $dateFormatMarchStart = date_format($start_march, 'Y/m/d');

// $end_march = date_create('2023-3-31');
// $dateFormatMarchEnd =   date_format($end_march, 'Y/m/d');

// // april
// $start_april = date_create('2023-4-1');
// $dateFormatAprilStart = date_format($start_april, 'Y/m/d');

// $end_april = date_create('2023-4-30');
// $dateFormatAprilEnd =   date_format($end_april, 'Y/m/d');

// // May
// $start_may = date_create('2023-5-1');
// $dateFormatMayStart = date_format($start_may, 'Y/m/d');

// $end_may = date_create('2023-5-31');
// $dateFormatMayEnd =   date_format($end_may, 'Y/m/d');

// // June
// $start_june = date_create('2023-6-1');
// $dateFormatJuneStart = date_format($start_june, 'Y/m/d');

// $end_june = date_create('2023-6-30');
// $dateFormatJuneEnd =   date_format($end_june, 'Y/m/d');

// // July
// $start_july = date_create('2023-7-1');
// $dateFormatJulyStart = date_format($start_july, 'Y/m/d');

// $end_july = date_create('2023-7-31');
// $dateFormatJulyEnd =   date_format($end_july, 'Y/m/d');

// // August
// $start_august = date_create('2023-8-1');
// $dateFormatAugustStart = date_format($start_august, 'Y/m/d');

// $end_august = date_create('2023-8-31');
// $dateFormatAugustEnd =   date_format($end_august, 'Y/m/d');

// // September
// $start_september = date_create('2023-9-1');
// $dateFormatSeptemberStart = date_format($start_september, 'Y/m/d');

// $end_september = date_create('2023-9-30');
// $dateFormatSeptemberEnd =   date_format($end_september, 'Y/m/d');

// // October
// $start_october = date_create('2023-10-1');
// $dateFormatOctoberStart = date_format($start_october, 'Y/m/d');

// $end_october = date_create('2023-10-31');
// $dateFormatOctoberEnd =   date_format($end_october, 'Y/m/d');

// // November
// $start_november = date_create('2023-11-1');
// $dateFormatNovemberStart = date_format($start_november, 'Y/m/d');

// $end_november = date_create('2023-11-30');
// $dateFormatNovemberEnd =   date_format($end_november, 'Y/m/d');

// // December
// $start_december = date_create('2023-12-1');
// $dateFormatDecemberStart = date_format($start_december, 'Y/m/d');

// $end_december = date_create('2023-12-31');
// $dateFormatDecemberEnd =   date_format($end_december, 'Y/m/d');



function getToTalJanuary()
{
    // january
    $start_january = date_create('2023-1-1');
    $dateFormatJanuaryStart = date_format($start_january, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatJanuaryStart);

    $end_january = date_create('2023-1-31');
    $dateFormatJanuaryEnd =   date_format($end_january, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatJanuaryEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }

    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }

    return $total;
}

function totalJanuaryCourse()
{
    // january
    $start_january = date_create('2023-1-1');
    $dateFormatJanuaryStart = date_format($start_january, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatJanuaryStart);

    $end_january = date_create('2023-1-31');
    $dateFormatJanuaryEnd =   date_format($end_january, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatJanuaryEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }

    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }

    return $total;
}


function getToTalFeb()
{
    // Feb
    $start_february = date_create('2023-2-1');
    $dateFormatFebStart = date_format($start_february, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatFebStart);

    $end_february = date_create('2023-2-28');
    $dateFormatFebEnd =   date_format($end_february, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatFebEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalFebCourse()
{
    // Feb
    $start_february = date_create('2023-2-1');
    $dateFormatFebStart = date_format($start_february, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatFebStart);

    $end_february = date_create('2023-2-28');
    $dateFormatFebEnd =   date_format($end_february, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatFebEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTalMarch()
{
    // March
    $start_march = date_create('2023-3-1');
    $dateFormatMarchStart = date_format($start_march, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatMarchStart);

    $end_march = date_create('2023-3-31');
    $dateFormatMarchEnd =   date_format($end_march, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatMarchEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalMarchCourse()
{
    // March
    $start_march = date_create('2023-3-1');
    $dateFormatMarchStart = date_format($start_march, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatMarchStart);

    $end_march = date_create('2023-3-31');
    $dateFormatMarchEnd =   date_format($end_march, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatMarchEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTalApril()
{
    // April
    $start_april = date_create('2023-4-1');
    $dateFormatAprilStart = date_format($start_april, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatAprilStart);

    $end_april = date_create('2023-4-30');
    $dateFormatAprilEnd =   date_format($end_april, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatAprilEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalAprilCourse()
{
    // April
    $start_april = date_create('2023-4-1');
    $dateFormatAprilStart = date_format($start_april, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatAprilStart);

    $end_april = date_create('2023-4-30');
    $dateFormatAprilEnd =   date_format($end_april, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatAprilEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTalMay()
{
    // May
    $start_may = date_create('2023-5-1');
    $dateFormatMayStart = date_format($start_may, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatMayStart);

    $end_may = date_create('2023-5-31');
    $dateFormatMayEnd =   date_format($end_may, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatMayEnd);


    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalMayCourse()
{
    // May
    $start_may = date_create('2023-5-1');
    $dateFormatMayStart = date_format($start_may, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatMayStart);

    $end_may = date_create('2023-5-31');
    $dateFormatMayEnd =   date_format($end_may, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatMayEnd);


    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTalJune()
{
    // June
    $start_june = date_create('2023-6-1');
    $dateFormatJuneStart = date_format($start_june, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatJuneStart);

    $end_june = date_create('2023-6-30');
    $dateFormatJuneEnd =   date_format($end_june, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatJuneEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalJuneCourse()
{
    // June
    $start_june = date_create('2023-6-1');
    $dateFormatJuneStart = date_format($start_june, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatJuneStart);

    $end_june = date_create('2023-6-30');
    $dateFormatJuneEnd =   date_format($end_june, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatJuneEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTalJuly()
{
    // July
    $start_july = date_create('2023-7-1');
    $dateFormatJulyStart = date_format($start_july, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatJulyStart);

    $end_july = date_create('2023-7-31');
    $dateFormatJulyEnd =   date_format($end_july, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatJulyEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalJulyCourse()
{
    // July
    $start_july = date_create('2023-7-1');
    $dateFormatJulyStart = date_format($start_july, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatJulyStart);

    $end_july = date_create('2023-7-31');
    $dateFormatJulyEnd =   date_format($end_july, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatJulyEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTalAugust()
{
    // August
    $start_august = date_create('2023-8-1');
    $dateFormatAugustStart = date_format($start_august, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatAugustStart);

    $end_august = date_create('2023-8-31');
    $dateFormatAugustEnd =   date_format($end_august, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatAugustEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalAugustCourse()
{
    // August
    $start_august = date_create('2023-8-1');
    $dateFormatAugustStart = date_format($start_august, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatAugustStart);

    $end_august = date_create('2023-8-31');
    $dateFormatAugustEnd =   date_format($end_august, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatAugustEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTalSep()
{
    // Sep
    $start_september = date_create('2023-9-1');
    $dateFormatSeptemberStart = date_format($start_september, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatSeptemberStart);

    $end_september = date_create('2023-9-30');
    $dateFormatSeptemberEnd =   date_format($end_september, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatSeptemberEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalSepCourse()
{
    // Sep
    $start_september = date_create('2023-9-1');
    $dateFormatSeptemberStart = date_format($start_september, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatSeptemberStart);

    $end_september = date_create('2023-9-30');
    $dateFormatSeptemberEnd =   date_format($end_september, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatSeptemberEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTalOc()
{
    // Oc
    $start_october = date_create('2023-10-1');
    $dateFormatOctoberStart = date_format($start_october, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatOctoberStart);

    $end_october = date_create('2023-10-31');
    $dateFormatOctoberEnd =   date_format($end_october, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatOctoberEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalOcCourse()
{
    // Oc
    $start_october = date_create('2023-10-1');
    $dateFormatOctoberStart = date_format($start_october, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatOctoberStart);

    $end_october = date_create('2023-10-31');
    $dateFormatOctoberEnd =   date_format($end_october, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatOctoberEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTalNo()
{
    // No
    $start_november = date_create('2023-11-1');
    $dateFormatNovemberStart = date_format($start_november, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatNovemberStart);

    $end_november = date_create('2023-11-30');
    $dateFormatNovemberEnd =   date_format($end_november, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatNovemberEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalNoCourse()
{
    // No
    $start_november = date_create('2023-11-1');
    $dateFormatNovemberStart = date_format($start_november, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatNovemberStart);

    $end_november = date_create('2023-11-30');
    $dateFormatNovemberEnd =   date_format($end_november, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatNovemberEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

function getToTaDec()
{
    // Dec
    $start_december = date_create('2023-12-1');
    $dateFormatDecemberStart = date_format($start_december, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatDecemberStart);

    $end_december = date_create('2023-12-31');
    $dateFormatDecemberEnd =   date_format($end_december, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatDecemberEnd);

    $sql = "SELECT create_at FROM bill";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM bill WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['total'];
        }
    }
    return $total;
}

function totalDecCourse()
{
    // Dec
    $start_december = date_create('2023-12-1');
    $dateFormatDecemberStart = date_format($start_december, 'Y/m/d');
    $startStrToTime = strtotime($dateFormatDecemberStart);

    $end_december = date_create('2023-12-31');
    $dateFormatDecemberEnd =   date_format($end_december, 'Y/m/d');
    $endStrToTime = strtotime($dateFormatDecemberEnd);

    $sql = "SELECT create_at FROM code_course";
    $data = getRaw($sql);
    $dataTime = [];
    foreach ($data as $key => $item) {
        $create_atStrToTime = strtotime($item['create_at']);
        if ($startStrToTime < $create_atStrToTime and $create_atStrToTime < $endStrToTime) {
            $sql = "SELECT * FROM code_course WHERE $startStrToTime < $create_atStrToTime AND $create_atStrToTime < $endStrToTime";
            $dataTime[] = firstRaw($sql);
        }
    }


    $total = 0;
    if (!empty($dataTime)) {
        foreach ($dataTime as $key => $item) {
            $total += $item['price'];
        }
    }
    return $total;
}


function saleBook()
{
    $sql = "SELECT * FROM cart WHERE status=1";
    $data = getRows($sql);
    return $data;
}

function saleCourse()
{
    $sql = "SELECT * FROM code_course";
    $data = getRows($sql);
    return $data;
}

function countCooperate()
{
    $sql = "SELECT * FROM teacher";
    $data = getRows($sql);
    return $data;
}

function countDocument()
{
    $sql = "SELECT * FROM document";
    $data = getRows($sql);
    return $data;
}
