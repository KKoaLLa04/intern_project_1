<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<p class="py-1">Trang chủ > Thành viên</p>

<div class="login">
    <h3 class="pb-3">TẠO TÀI KHOẢN CỦA BẠN</h3>
    <p>Học tập và giao lưu <br> với hàng triệu học sinh trên mọi miền đất nước</p>
    <div class="login__button">
        <a href="#"><i class="fab fa-facebook-f"></i> Đăng nhập bằng Facebook</a>
        <a href="#"><i class="fab fa-google"></i> Đăng nhập bằng Google</a>
    </div>

    <p class="my-4">Hoặc</p>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Số điện thoại..." name="phone" value="<?php echo oldData('phone', $old) ?>">
            <p class="error"><?php echo errorData('phone', $errors) ?></p>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email..." name="email" value="<?php echo oldData('email', $old) ?>">
            <p class="error"><?php echo errorData('email', $errors) ?></p>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tên của bạn..." name="fullname" value="<?php echo oldData('fullname', $old) ?>">
            <p class="error"><?php echo errorData('fullname', $errors) ?></p>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mật khẩu..." name="password">
                </div>
                <p class="error"><?php echo errorData('password', $errors) ?></p>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu..." name="confirm_password">
                    <p class="error"><?php echo errorData('confirm_password', $errors) ?></p>
                </div>
            </div>
        </div>

        <p class="pt-3"><b>*</b> Khi bấm vào đăng ký tài khoản, bạn chắc chắn đã đọc và đồng ý với
            Chính sách bảo mật và Điều khoản dịch vụ của SONLINE.</p>

        <button type="submit" class="btn btn-danger form-control py-2 mb-3">Đăng KÝ TÀI KHOẢN NGAY</button>
        <p><i>Bạn đã có tài khoản? </i> <b><a href="?module=member&action=login" style="text-decoration: none;">Đăng
                    nhập
                    ngay</a></b></p>
    </form>
</div>
<div class="distance" style="height: 1px;"></div>