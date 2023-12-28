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
<p class="py-1">Trang chủ > cập nhật thông tin</p>
<h4>Cập nhật thông tin cá nhân</h4>

<div class="row">
    <div class="col-6">
        <?php getMsg($msg, $msg_type) ?>
        <form action="" method="post">
            <div class="row">
                <div class="form-group">
                    <label for="">Họ và tên</label>
                    <input type="text" class="form-control" placeholder="Họ và tên..." name="fullname" value="<?php echo oldData('fullname', $old) ?>">
                    <p class="error"><?php echo errorData('fullname', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" placeholder="Số điện thoại..." name="phone" value="<?php echo oldData('phone', $old) ?>">
                    <p class="error"><?php echo errorData('phone', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Email..." name="email" value="<?php echo oldData('email', $old) ?>">
                    <p class="error"><?php echo errorData('email', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" placeholder="Địa chỉ..." name="address" value="<?php echo oldData('address', $old) ?>">
                    <p></p>
                </div>
            </div>

            <button class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>

    <div class="col-6">
        <img src="<?= _WEB_HOST_TEMPLATE . '/images/profile.png' ?>" alt="" width="100%" height="500px">
    </div>
</div>