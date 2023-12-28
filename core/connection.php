<?php

global $config;
// Kết nối db
try {
    $dsn = 'mysql:dbname=' . $config['db'] . ';host=' . $config['host'];

    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $conn = new PDO($dsn, $config['user'], '', $options);

    // self::$conn = $con;
} catch (Exception $exception) {
    $mess = $exception->getMessage();

    // if(preg_match('/Access denied for users/', $mess)){
    //     die('Lỗi kết nối cơ sở dữ liệu');
    // }

    // if(preg_match('/Unknown database/', $mess)){
    //     die('Không tìm thấy cơ sở dữ liệu');
    // }
    die($mess);
}
