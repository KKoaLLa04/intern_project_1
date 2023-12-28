<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<p class="py-1">Trang chủ > Thành viên</p>

<div class="login">
    <h3 class="pb-3">ĐĂNG NHẬP TÀI KHOẢN CỦA BẠN</h3>
    <p>Học tập và giao lưu <br> với hàng triệu học sinh trên mọi miền đất nước</p>
    <div class="login__button">
        <a href="#"><i class="fab fa-facebook-f"></i> Đăng nhập bằng Facebook</a>
        <a href="#"><i class="fab fa-google"></i> Đăng nhập bằng Google</a>
    </div>

    <p class="my-4">Hoặc</p>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email..." name="email">
            <p></p>
        </div>

        <div class="form-group mb-3">
            <input type="password" class="form-control" placeholder="Mật khẩu..." name="password">
        </div>

        <a href="?module=member&action=forgot" style="text-decoration: none;">Quên mật khẩu</a>
        <button type="submit" class="btn btn-danger form-control my-4 py-2">Đăng nhập ngay</button>
        <p>Bạn chưa có tài khoản?<b><a href="?module=member&action=register" style="text-decoration: none;">Đăng ký
                    ngay</a></b></p>
        <p><b><a href="?module=member&action=teacher" style="text-decoration: none;">Đăng nhập với tư cách giảng
                    viên</a></b></p>
    </form>
</div>
<div class="distance" style="height: 1px;"></div>