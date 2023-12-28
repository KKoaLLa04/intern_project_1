<?php
session_start();
ob_start();
require_once '../core/phpmailer/PHPMailer.php';
require_once '../core/phpmailer/SMTP.php';
require_once '../core/phpmailer/Exception.php';

require_once '../configs/database.php'; //Load database connection
require_once '../configs/web.php'; // load config web

require_once '../core/connection.php'; // load connection
require_once '../core/database.php'; // load database
require_once '../core/helpers.php'; // load all function (helpers)
require_once '../core/session.php'; // load session
require_once '../core/permission.php'; // load session
require_once '../core/chart.php'; // load chart
require_once '../core/chart_helper.php'; // load chart helper

require_once '../public/assets/admin/templates/header.php'; //import header layout
require_once '../public/assets/admin/templates/sidebar.php'; //import sidebar layout
require_once '../public/assets/admin/templates/breadcrumb.php'; //import breadcrumb layout

$module = _MODULE_DEFAULT_ADMIN;
$action = _ACTION_DEFAULT;

if (!empty($_GET['module'])) {
    $module = $_GET['module'];
}

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$path = $module . '/controller/' . $action . '.php';
if (file_exists($path)) {
    require_once $path;
} else {
    require_once 'errors/404.php';
}

require_once '../public/assets/admin/templates/footer.php'; //import footer layout