<?php

function getTotalQ1()
{
    return getToTalJanuary() + totalJanuaryCourse() + getToTalFeb() + getToTalFeb() + getToTalMarch() + totalMarchCourse();
}

function getTotalQ2()
{
    return getToTalApril() + totalAprilCourse() + getToTalMay() + totalMayCourse() + totalMayCourse() + totalJuneCourse();
}

function getTotalQ3()
{
    return getToTalJuly() + totalJulyCourse() + getToTalAugust() + totalAugustCourse() + getToTalSep() + totalSepCourse();
}

function getTotalQ4()
{
    return getToTalOc() + totalOcCourse() + getToTalNo() + totalNoCourse() + getToTaDec() + totalDecCourse();
}


function countStudentChart()
{
    $sql = "SELECT * FROM student";
    $data = getRows($sql);
    return $data;
}

function countTeacherChart()
{
    $sql = "SELECT * FROM teacher";
    $data = getRows($sql);
    return $data;
}

function countCourseChart()
{
    $sql = "SELECT * FROM course";
    $data = getRows($sql);
    return $data;
}

function countLessonChart()
{
    $sql = "SELECT * FROM lesson";
    $data = getRows($sql);
    return $data;
}

function countNewsChart()
{
    $sql = "SELECT * FROM news";
    $data = getRows($sql);
    return $data;
}

function countCateChart()
{
    $sql = "SELECT * FROM course_category";
    $data = getRows($sql);
    return $data;
}


// doanh thu ngày, tuần, tháng, năm
function totalDayBook()
{
    $now = date('Y-m-d');
    $sql = "SELECT * FROM bill WHERE create_at LIKE '%$now%'";
    $data = getRaw($sql);
    $totalBook = null;
    if (!empty($data)) {
        foreach ($data as $key => $item) {
            $totalBook += $item['total'];
        }
    } else {
        $totalBook = 0;
    }
    return $totalBook;
}

function totalDayCourse()
{
    $now = date('Y-m-d');
    $sql = "SELECT * FROM code_course WHERE create_at LIKE '%$now%'";
    $data = getRaw($sql);
    $totalCourse = null;
    if (!empty($data)) {
        foreach ($data as $key => $item) {
            $totalCourse += $item['price'];
        }
    } else {
        $totalCourse = 0;
    }
    return $totalCourse;
}

function totalDay()
{
    return totalDayBook() + totalDayCourse();
}

function totalWeekBook()
{
    $year = date('Y');
    $month = date('m');
    $day = date('d');
    if ($day > 1) {
        $day1 = $day - 1;
    } else {
        $month1 = $month - 1;
        switch ($month1) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day1 = 31;
                break;
            case '2':
                $day1 = 28;
                break;
            default:
                $day1 = 30;
                break;
        }
    }

    if ($day > 2) {
        $day2 = $day - 2;
    } else if ($day == 1) {
        $month2 = $month - 1;
        switch ($month2) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day2 = 30;
                break;
            case '2':
                $day2 = 27;
                break;
            default:
                $day2 = 29;
                break;
        }
    } else {
        $month2 = $month - 1;
        switch ($month2) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day2 = 31;
                break;
            case '2':
                $day2 = 28;
                break;
            default:
                $day2 = 30;
                break;
        }
    }

    if ($day > 3) {
        $day3 = $day - 3;
    } else if ($day == 1) {
        $month3 = $month - 1;
        switch ($month3) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day3 = 29;
                break;
            case '2':
                $day3 = 26;
                break;
            default:
                $day3 = 28;
                break;
        }
    } else if ($day == 2) {
        $month3 = $month - 1;
        switch ($month3) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day3 = 30;
                break;
            case '2':
                $day3 = 27;
                break;
            default:
                $day3 = 29;
                break;
        }
    } else {
        $month3 = $month - 1;
        switch ($month3) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day3 = 31;
                break;
            case '2':
                $day3 = 28;
                break;
            default:
                $day3 = 30;
                break;
        }
    }


    if (!empty($month1)) {
        $month = $month1;
    }
    $timeStr1 = "$year-$month-$day1";
    $time1 = date_create($timeStr1);
    $timeFormat1 =  date_format($time1, 'Y-m-d');
    $sql1 = "SELECT total FROM bill WHERE create_at LIKE '%$timeFormat1%'";
    $data1 = getRaw($sql1);
    $total1 = 0;
    if (!empty($data1)) {
        foreach ($data1 as $key => $item) {
            $total1 += $item['total'];
        }
    }

    if (!empty($month2)) {
        $month = $month2;
    }
    $timeStr2 = "$year-$month-$day2";
    $time2 = date_create($timeStr2);
    $timeFormat2 =  date_format($time2, 'Y-m-d');
    $sql2 = "SELECT total FROM bill WHERE create_at LIKE '%$timeFormat2%'";
    $data2 = getRaw($sql2);
    $total2 = 0;
    if (!empty($data2)) {
        foreach ($data2 as $key => $item) {
            $total2 += $item['total'];
        }
    }

    if (!empty($month3)) {
        $month = $month3;
    }
    $timeStr3 = "$year-$month-$day3";
    $time3 = date_create($timeStr3);
    $timeFormat3 =  date_format($time3, 'Y-m-d');
    $sql3 = "SELECT total FROM bill WHERE create_at LIKE '%$timeFormat3%'";
    $data3 = getRaw($sql3);
    $total3 = 0;
    if (!empty($data3)) {
        foreach ($data3 as $key => $item) {
            $total3 += $item['total'];
        }
    }

    $total = $total1 + $total2 + $total3;
    return $total;
}

function totalWeekCourse()
{
    $year = date('Y');
    $month = date('m');
    $day = date('d');
    if ($day > 1) {
        $day1 = $day - 1;
    } else {
        $month1 = $month - 1;
        switch ($month1) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day1 = 31;
                break;
            case '2':
                $day1 = 28;
                break;
            default:
                $day1 = 30;
                break;
        }
    }

    if ($day > 2) {
        $day2 = $day - 2;
    } else if ($day == 1) {
        $month2 = $month - 1;
        switch ($month2) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day2 = 30;
                break;
            case '2':
                $day2 = 27;
                break;
            default:
                $day2 = 29;
                break;
        }
    } else {
        $month2 = $month - 1;
        switch ($month2) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day2 = 31;
                break;
            case '2':
                $day2 = 28;
                break;
            default:
                $day2 = 30;
                break;
        }
    }

    if ($day > 3) {
        $day3 = $day - 3;
    } else if ($day == 1) {
        $month3 = $month - 1;
        switch ($month3) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day3 = 29;
                break;
            case '2':
                $day3 = 26;
                break;
            default:
                $day3 = 28;
                break;
        }
    } else if ($day == 2) {
        $month3 = $month - 1;
        switch ($month3) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day3 = 30;
                break;
            case '2':
                $day3 = 27;
                break;
            default:
                $day3 = 29;
                break;
        }
    } else {
        $month3 = $month - 1;
        switch ($month3) {
            case '1':
            case '3':
            case '5':
            case '7':
            case '8':
            case '10':
            case '12':
                $day3 = 31;
                break;
            case '2':
                $day3 = 28;
                break;
            default:
                $day3 = 30;
                break;
        }
    }


    if (!empty($month1)) {
        $month = $month1;
    }
    $timeStr1 = "$year-$month-$day1";
    $time1 = date_create($timeStr1);
    $timeFormat1 =  date_format($time1, 'Y-m-d');
    $sql1 = "SELECT price FROM code_course WHERE create_at LIKE '%$timeFormat1%'";
    $data1 = getRaw($sql1);
    $total1 = 0;
    if (!empty($data1)) {
        foreach ($data1 as $key => $item) {
            $total1 += $item['price'];
        }
    }

    if (!empty($month2)) {
        $month = $month2;
    }
    $timeStr2 = "$year-$month-$day2";
    $time2 = date_create($timeStr2);
    $timeFormat2 =  date_format($time2, 'Y-m-d');
    $sql2 = "SELECT price FROM code_course WHERE create_at LIKE '%$timeFormat2%'";
    $data2 = getRaw($sql2);
    $total2 = 0;
    if (!empty($data2)) {
        foreach ($data2 as $key => $item) {
            $total2 += $item['price'];
        }
    }

    if (!empty($month3)) {
        $month = $month3;
    }
    $timeStr3 = "$year-$month-$day3";
    $time3 = date_create($timeStr3);
    $timeFormat3 =  date_format($time3, 'Y-m-d');
    $sql3 = "SELECT price FROM code_course WHERE create_at LIKE '%$timeFormat3%'";
    $data3 = getRaw($sql3);
    $total3 = 0;
    if (!empty($data3)) {
        foreach ($data3 as $key => $item) {
            $total3 += $item['price'];
        }
    }

    $total = $total1 + $total2 + $total3;
    return $total;
}

function totalWeek()
{
    return totalWeekBook() + totalWeekCourse() + totalDay();
}

function totalMonthBook()
{
    $now = date('Y-m');
    $sql = "SELECT * FROM bill WHERE create_at LIKE '%$now%'";
    $data = getRaw($sql);
    $totalBook = null;
    if (!empty($data)) {
        foreach ($data as $key => $item) {
            $totalBook += $item['total'];
        }
    } else {
        $totalBook = 0;
    }
    return $totalBook;
}

function totalMonthCourse()
{
    $now = date('Y-m');
    $sql = "SELECT * FROM code_course WHERE create_at LIKE '%$now%'";
    $data = getRaw($sql);
    $totalCourse = null;
    if (!empty($data)) {
        foreach ($data as $key => $item) {
            $totalCourse += $item['price'];
        }
    } else {
        $totalCourse = 0;
    }
    return $totalCourse;
}

function totalMonth()
{
    return totalMonthBook() + totalMonthCourse();
}

function totalYearBook()
{
    $now = date('Y');
    $sql = "SELECT * FROM bill WHERE create_at LIKE '%$now%'";
    $data = getRaw($sql);
    $totalBook = null;
    if (!empty($data)) {
        foreach ($data as $key => $item) {
            $totalBook += $item['total'];
        }
    } else {
        $totalBook = 0;
    }
    return $totalBook;
}

function totalYearCourse()
{
    $now = date('Y');
    $sql = "SELECT * FROM code_course WHERE create_at LIKE '%$now%'";
    $data = getRaw($sql);
    $totalCourse = null;
    if (!empty($data)) {
        foreach ($data as $key => $item) {
            $totalCourse += $item['price'];
        }
    } else {
        $totalCourse = 0;
    }
    return $totalCourse;
}

function totalYear()
{
    return totalYearBook() + totalYearCourse();
}
