<?php
session_start();
ob_start();
// Library import
require_once './core/phpmailer/PHPMailer.php';
require_once './core/phpmailer/SMTP.php';
require_once './core/phpmailer/Exception.php';


require_once './configs/database.php'; //Load database connection
require_once './configs/web.php'; // load config web

require_once './core/connection.php'; // load connection
require_once './core/database.php'; // load database
require_once './core/helpers.php'; // load all function (helpers)
require_once './core/session.php'; // load session
require_once './core/permission.php'; // load permission
require_once './core/chart.php'; // load chart
download();
require_once './public/assets/clients/templates/header.php'; //import header layout

// dang nhap admin => chuyen sang trang admin
if (isLoginTeacher()) {
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$module = _MODULE_DEFAULT;
$action = _ACTION_DEFAULT;

if (!empty($_GET['module'])) {
    $module = $_GET['module'];
}

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$path = 'clients/' . $module . '/controller/' . $action . '.php';
if (file_exists($path)) {
    require_once $path;
} else {
    require_once 'app/errors/404.php';
}

require_once './public/assets/clients/templates/footer.php'; //import footer layout