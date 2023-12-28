<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<p class="py-1">Trang chủ > Thành viên</p>

<div class="login">
    <h3 class="pb-3">ĐĂNG NHẬP VỚI TƯ CÁCH GIẢNG VIÊN</h3>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email..." name="email">
            <p></p>
        </div>

        <div class="form-group mb-3">
            <input type="password" class="form-control" placeholder="Mật khẩu..." name="password">
        </div>

        <button type="submit" class="btn btn-danger form-control my-4 py-2">Đăng nhập ngay</button>
        <p><b><a href="?module=member&action=login" style="text-decoration: none;">Đăng nhập với tư cách học
                    viên</a></b></p>
    </form>
</div>
<div class="distance" style="height: 1px;"></div>