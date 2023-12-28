<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

const _INCODE = true;

const _MODULE_DEFAULT = 'home'; // module mac dinh
const _ACTION_DEFAULT = 'home'; // action mac dinh
const _MODULE_DEFAULT_ADMIN = 'dashboard'; // module mac dinh
// thiet lap host

define('_WEB_HOST_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/project_one_sonline'); //Địa chỉ trang chủ

define('_WEB_HOST_TEMPLATE', _WEB_HOST_ROOT . '/public/assets/clients');

define('_WEB_HOST_ROOT_ADMIN', _WEB_HOST_ROOT . '/app');

define('_WEB_HOST_ADMIN_TEMPLATE', _WEB_HOST_ROOT . '/public/assets/admin');

//Thiết lập path
$dirStr = __DIR__;
$dirIndex = str_replace('\configs', '', $dirStr);

define('_WEB_PATH_ROOT', $dirIndex); // fix cung tam thoi
define('_WEB_PATH_TEMPLATE', _WEB_PATH_ROOT . '/public/assets');