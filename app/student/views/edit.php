<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
if (empty($old) && !empty($data['student_info'])) {
    $old = $data['student_info'];
}
?>
<div class="container-fluid">
    <a href="?module=student&action=lists"><button class="btn btn-warning btn-sm">Quay lai</button></a>
    <hr>
    <h4>Cập nhật thông tin học viên</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Họ và tên học viên</label>
                    <input type="text" class="form-control" placeholder="Họ và tên học viên...." name="fullname"
                        value="<?php echo oldData('fullname', $old) ?>">
                    <p class="error"><?php echo errorData('fullname', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" placeholder="Số điện thoại của học viên...." name="phone"
                        value="<?php echo oldData('phone', $old) ?>">
                    <p class="error"><?php echo errorData('phone', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Mật khẩu (không nhập nếu không đổi)</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu...." name="password">
                    <p class="error"><?php echo errorData('password', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Email học viên</label>
                    <input type="text" class="form-control" placeholder="Email học viên...." name="email"
                        value="<?php echo oldData('email', $old) ?>">
                    <p class="error"><?php echo errorData('email', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Tình Trạng</label>
                    <select name="status" class="form-control">
                        <option value="0" <?php echo (oldData('status', $old) == 0) ? 'selected' : false ?>>Chưa kích
                            hoạt</option>
                        <option value="1" <?php echo (oldData('status', $old) == 1) ? 'selected' : false ?>>Đã kích hoạt
                        </option>
                    </select>
                    <p class="error"><?php echo errorData('status', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Xác nhận mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu...."
                        name="confirm_password" value="<?php echo oldData('confirm_password', $old) ?>">
                    <p class="error"><?php echo errorData('confirm_password', $errors) ?></p>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>