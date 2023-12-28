<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=subject_category&action=lists"><button class="btn btn-warning">Quay lại</button></a>
    <hr>
    <h4>Thêm danh mục khóa học mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Tiêu đề danh mục</label>
            <input type="text" class="form-control" placeholder="Tiêu đề danh mục khóa học..." name="title"
                value="<?php echo oldData('title',$old) ?>">
            <p class="error"><?php echo errorData('title', $errors) ?></p>
        </div>

        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>