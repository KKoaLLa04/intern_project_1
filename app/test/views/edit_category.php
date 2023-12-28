<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
if (!empty($data['cate_detail'])) {
    $cateDetail = $data['cate_detail'];
}
if (empty($old) && !empty($cateDetail)) {
    $old = $cateDetail;
}
?>
<h4>Cập nhật danh mục - <b><?php echo $cateDetail['name'] ?></b></h4>
<?php getMsg($msg, $msg_type) ?>
<form action="" method="post">
    <div class="form-group">
        <label for="">Tiêu đề danh mục</label>
        <input type="text" class="form-control" placeholder="Tiêu đề danh mục..." name="name"
            value="<?php echo oldData('name', $old) ?>">
        <p class="error"><?php echo errorData('name', $errors) ?></p>
    </div>

    <button class="btn btn-primary">Cập nhật</button>
</form>