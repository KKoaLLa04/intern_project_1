<?php
if (empty(isLoginTeacher())) {
    setFlashData('msg', 'Bạn không có quyền truy cập');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT);
} else {
    $loginInfo = isLoginTeacher();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SONLINE | Quản trị</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/css/style.css?ver=<?php echo rand() ?>">

    <script type="text/javascript" src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/ckeditor/ckeditor/ckeditor.js">
    </script>
    <script type="text/javascript" src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/ckfinder/ckfinder/ckfinder.js">
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo _WEB_HOST_ROOT ?>">
                        Trang chủ <i class="fa fa-home"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        hi, xin chào <?= $loginInfo['fullname'] ?> <i class="fa fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Hệ thống quản trị</span>
                        <div class="dropdown-divider"></div>
                        <a href="?module=profile&action=profile" class="dropdown-item">
                            <i class="fa fa-file mr-2"></i> Thông tin cá nhân
                            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="?module=profile&action=change_password" class="dropdown-item">
                            <i class="fa fa-lock mr-2"></i> Đổi mật khẩu
                            <!-- <span class="float-right text-muted text-sm">12 hours</span> -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="?module=profile&action=logout" class="dropdown-item">
                            <i class="fa fa-sign-out-alt mr-2"></i> Đăng xuất
                            <!-- <span class="float-right text-muted text-sm">2 days</span> -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">SONLINE</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->