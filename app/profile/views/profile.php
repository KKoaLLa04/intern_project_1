<?php
if (!empty($data['profile'])) {
    $item = $data['profile'];
}
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
?>
<div class="container-fluid">
    <h4>Thông tin cá nhân</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Họ và tên</label>
            <input type="text" class="form-control" placeholder="Họ và tên..." name="fullname"
                value="<?php echo $item['fullname'] ?>">
            <p class="error"><?php echo errorData('fullname', $errors) ?></p>
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" placeholder="Email..." name="email"
                value="<?php echo $item['email'] ?>" disabled>
            <p class="error"><?php echo errorData('email', $errors) ?></p>
        </div>

        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" class="form-control" placeholder="Số điện thoại..." name="phone"
                value="<?php echo $item['phone'] ?>">
            <p class="error"><?php echo errorData('phone', $errors) ?></p>
        </div>

        <button class="btn btn-primary" type="submit">Đồng ý</button>
    </form>
</div>