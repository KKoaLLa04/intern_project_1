<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
if (empty($old) && !empty($data['module_detail'])) {
    $old = $data['module_detail'];
}
?>
<div class="container-fluid">
    <a href="?module=module&action=lists"><button class="btn btn-warning btn-sm">Quay lai</button></a>
    <hr>
    <h4>Thêm chương học mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Tiêu đề chương</label>
            <input type="text" class="form-control" placeholder="Tiêu đề chương học..." name="title"
                value="<?php echo oldData('title', $old) ?>">
            <p class="error"><?php echo errorData('title', $errors) ?></p>
        </div>

        <div class="form-group">
            <label for="">Chương học thuộc khóa học</label>
            <select name="course_id" class="form-control">
                <option value="0">Chọn khóa học</option>
                <?php if (!empty($data['course'])) :
                    foreach ($data['course'] as $item) :
                ?>
                <option value="<?php echo $item['id'] ?>"
                    <?php echo (oldData('course_id', $old) == $item['id']) ? 'selected' : false ?>>
                    <?php echo $item['title'] ?></option>
                <?php endforeach;
                endif ?>
            </select>
            <p class="error"><?php echo errorData('course_id', $errors) ?></p>
        </div>

        <input type="hidden" name="id" value="<?php echo !empty($data['id'])?$data['id']:1 ?>">

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>