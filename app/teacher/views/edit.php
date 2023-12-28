<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
$teacherDetail = getFlashData('teacher_detail');
if (empty($old) && !empty($teacherDetail)) {
    $old = $teacherDetail;
}
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}
?>
<div class="container-fluid">
    <a href="?module=teacher&action=lists"><button class="btn btn-warning btn-sm">Quay lai</button></a>
    <hr>
    <h4>Cập nhật thông tin giảng viên</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên giảng viên</label>
                    <input type="text" class="form-control" placeholder="Tên giảng viên...." name="fullname" value="<?php echo oldData('fullname', $old) ?>">
                    <p class="error"><?php echo errorData('fullname', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Email giảng viên</label>
                    <input type="text" class="form-control" placeholder="Email giảng viên...." name="email" value="<?php echo oldData('email', $old) ?>">
                    <p class="error"><?php echo errorData('email', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" placeholder="Số điện thoại...." name="phone" value="<?php echo oldData('phone', $old) ?>">
                    <p class="error"><?php echo errorData('phone', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Kinh nghiệm(năm)</label>
                    <input type="text" class="form-control" placeholder="Kinh nghiệm (năm)...." name="exp" value="<?php echo oldData('exp', $old) ?>">
                    <p></p>
                </div>
            </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>