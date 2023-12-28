<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=groups&action=lists"><button class="btn btn-warning btn-sm">Quay lai</button></a>
    <hr>
    <h4>Thêm nhóm người dùng mới</h4>
    <?php getMsg($msg, $msg_type); ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Tên nhóm người dùng</label>
            <input type="text" class="form-control" name="name" placeholder="Tên nhóm người dùng..."
                value="<?php echo oldData('name', $old) ?>">
            <p class="error"><?php echo errorData('name', $errors) ?></p>
        </div>

        <button class="btn btn-primary">Thêm mới</button>
    </form>
</div>