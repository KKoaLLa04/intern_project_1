<?php
if (isLoginStudent()) {
    $studentDetail = isLoginStudent();
}
// lọc dữ liệu (theo khóa học)
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/login.css?ver=<?php echo rand() ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/course.css?ver=<?php echo rand() ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/style.css?ver=<?php echo rand() ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/slidershow.css?ver=<?php echo rand() ?>">
</head>

<body>
    <header>
        <div class="row">
            <div class="col-1">
                <div class="header__logo">
                    <a href="<?= _WEB_HOST_ROOT ?>" style="color: black; text-decoration: none">
                        <h4 style="padding: 0;"><?= getOption('general_logo') ?></h4>
                    </a>
                </div>
            </div>

            <div class="col-4">
                <div class="header__search">
                    <form action="#" method="get">
                        <input type="search" placeholder="Tìm kiếm..." class="header__input" name="keyword" value="<?= !empty($keyword) ? $keyword : '' ?>">
                        <input type="hidden" name="module" value="course">
                        <input type="hidden" name="action" value="filter">
                    </form>
                </div>
            </div>

            <div class="col-3">
                <div class="header__hotline">
                    <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/phone.svg" alt="">
                    <span class="hotline__span">Hotline: <?= getOption('general_hotline') ?></span>
                </div>
            </div>

            <div class="col-1">
                <div class="header__cart">
                    <a href="?module=cart&action=lists" style="color: black;"><i class="fa fa-shopping-cart"></i>
                    </a>
                </div>
            </div>

            <div class="col-3">
                <?php if (empty($_SESSION["loginStudent"]) && empty($_SESSION['loginTeacher'])) : ?>
                    <div class="header__button">
                        <a href="?module=member&action=login"><button class="header__login">Đăng nhập</button></a>
                        <a href="?module=member&action=register"><button class="header__register">Đăng ký</button></a>
                    </div>
                <?php elseif (!empty($_SESSION['loginTeacher'])) : ?>
                    <p class="d-flex justify-content-end"><a href="<?php echo _WEB_HOST_ROOT_ADMIN ?>" target="_blank" class="mx-3"><button class="btn btn-primary btn-sm">Trang quản trị</button></a> <a href="?module=member&action=logout"><button class="btn btn-warning btn-sm">Đăng
                                xuất</button></a></p>
                <?php else :  ?>
                    <!-- <p class="d-flex justify-content-end"><a href="?module=member&action=logout"><button
                            class="btn btn-warning btn-sm">Đăng
                            xuất</button></a></p> -->
                    <div class="dropdown d-flex justify-content-end">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                            Hi, xin chào
                            <?php echo !empty($studentDetail['fullname']) ? $studentDetail['fullname'] : 'bạn' ?> <i class="fa fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="px-3"><i class="fa fa-angle-double-right"></i> <a href="?module=account&action=profile" style="text-decoration: none;">Cập nhật thông
                                    tin</a>
                            </li>
                            <li class="px-3 pt-3"><i class="fa fa-angle-double-right"></i> <a href="?module=account&action=change_password" style="text-decoration: none;">Đổi mật
                                    khẩu</a></li>
                            <li class="px-3 pt-3"><i class="fa fa-angle-double-right"></i> <a href="?module=cart_history&action=lists" style="text-decoration: none;">Lịch sử mua
                                    hàng</a></li>
                            <li class="px-3 pt-3"><i class="fa fa-angle-double-right"></i> <a href="?module=course&action=history" style="text-decoration: none;">Khóa Học Đã Mua</a>
                            </li>
                            <li class="px-3 pt-3"><i class="fa fa-angle-double-right"></i> <a href="?module=exam_online&action=history" style="text-decoration: none;">Lịch sử thi</a>
                            </li>
                            <hr>
                            <li class="px-3"><i class="fa fa-angle-double-right"></i> <a href="?module=member&action=logout" style="text-decoration: none;">Đăng xuất</a></li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </header>

    <div class="line"></div>

    <nav class="menu">
        <ul>
            <li><a href="?module=home&action=home"><i class="fa fa-home"></i>Trang Chủ</a></li>
            <li><a href="?module=course&action=lists"><i class="fa fa-file"></i>Khóa học</a></li>
            <li><a href="?module=book&action=lists"><i class="fa fa-book"></i>Sách</a></li>
            <li><a href="?module=exam&action=lists"><i class="fa fa-file"></i>Đề Thi</a></li>
            <li><a href="?module=exam_online&action=lists"><i class="fa fa-file"></i>Thi online</a></li>
            <li><a href="?module=document&action=lists"><i class="fa fa-folder"></i>Tài liệu miễn phí</a></li>
            <li><a href="?module=news&action=lists"><i class="fa fa-newspaper"></i>Tin tức</a></li>
            <li><a href="?module=aboutus&action=introduce"><i class="fa fa-file-alt"></i>Giới thiệu</a></li>
            <li><a href="?module=contacts&action=contact"><i class="fa fa-envelope"></i>Liên hệ</a></li>
        </ul>
    </nav>

    <main>
        <div class="main">