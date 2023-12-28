<?php
// Truy van lay id
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}
// Thông báo + đổ dữ liệu
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
$course_cate = getFlashData('course_category');
if (empty($old) && !empty($course_cate)) {
    $old = $course_cate;
}
?>
<div class="container-fluid">
    <a href="?module=subject_category&action=lists"><button class="btn btn-warning">Quay lại</button></a>
    <hr>
    <h4>Cập nhật danh mục khóa học</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Tiêu đề danh mục</label>
            <input type="text" class="form-control" placeholder="Tiêu đề danh mục khóa học..." name="title" value="<?php echo oldData('title', $old) ?>">
            <p class="error"><?php echo errorData('title', $errors) ?></p>
        </div>

        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>