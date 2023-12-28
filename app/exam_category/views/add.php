<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=exam_category&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Thêm danh mục đề thi mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Tiêu đề danh mục đề thi</label>
            <input type="text" class="form-control" placeholder="Tiêu đề danh mục đề thi...." name="name" value="<?php echo oldData('name', $old) ?>">
            <p class="error"><?php echo errorData('name', $errors) ?></p>
        </div>

        <button class="btn btn-primary">Thêm mới</button>
    </form>
</div>