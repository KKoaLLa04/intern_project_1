<?php
if (!empty($data['student_detail'])) {
    $student = $data['student_detail'];
}
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
if (!empty($student) && empty($old)) {
    $old = $student;
}
?>
<p class="py-1">Trang chủ > đổi mật khẩu</p>
<h4>Đổi mật khẩu</h4>

<div class="row">
    <div class="col-6">
        <?php getMsg($msg, $msg_type) ?>
        <form action="" method="post">
            <div class="row">
                <div class="form-group">
                    <label for="">Mật khẩu cũ</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu cũ..." name="old_password">
                    <p class="error"><?php echo errorData('old_password', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Mật khẩu mới</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu mới..." name="password">
                    <p class="error"><?php echo errorData('password', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Xác nhận mật khẩu mới</label>
                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu mới..."
                        name="confirm_password">
                    <p class="error"><?php echo errorData('confirm_password', $errors) ?></p>
                </div>
            </div>

            <button class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>

    <div class="col-6">
        <img src="<?= _WEB_HOST_TEMPLATE . '/images/profile.png' ?>" alt="" width="100%" height="500px">
    </div>
</div>