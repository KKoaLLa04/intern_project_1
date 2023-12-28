<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
?>
<div class="container-fluid">
    <h4>Thay đổi mật khẩu</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Mật khẩu cũ</label>
            <input type="password" name="password" class="form-control" placeholder="Mật khẩu cũ...">
            <p class="error"><?php echo errorData('password', $errors) ?></p>
        </div>

        <div class="form-group">
            <label for="">Mật khẩu mới</label>
            <input type="password" name="new_password" class="form-control" placeholder="Mật khẩu mới...">
            <p class="error"><?php echo errorData('new_password', $errors) ?></p>
        </div>

        <div class="form-group">
            <label for="">Xác nhận mật khẩu mới</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="Xác nhận mật khẩu mới...">
            <p class="error"><?php echo errorData('confirm_password', $errors) ?></p>
        </div>

        <button type="submit" class="btn btn-primary">Đồng ý</button>
    </form>
</div>