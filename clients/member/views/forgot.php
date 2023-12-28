<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<p class="py-1">Trang chủ > Thành viên</p>

<div class="login">
    <h3 class="pb-3">Quên mật khẩu</h3>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email..." name="email"
                value="<?php echo oldData('email', $old) ?>">
            <p class="error"><?php echo errorData('email', $errors) ?></p>
        </div>

        <p class="text-left"><b>*</b>Vui lòng nhập vào email chính xác để đổi lại mật khẩu</p>

        <button type="submit" class="btn btn-danger form-control my-4 py-2">Xác nhận</button>
        <p><i>Bạn chưa có tài khoản? </i> <b><a href="?module=member&action=register"
                    style="text-decoration: none;">Đăng ký
                    ngay</a></b></p>
        <p><i>Bạn đã có tài khoản? </i> <b><a href="?module=member&action=register" style="text-decoration: none;">Đăng
                    nhập
                    ngay</a></b></p>
    </form>
</div>
<div class="distance" style="height: 1px;"></div>