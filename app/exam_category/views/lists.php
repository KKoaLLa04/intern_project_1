<?php

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'exam_category', 'Thêm');
$checkEdit = checkPermission($permissionData, 'exam_category', 'Sửa');
$checkDelete = checkPermission($permissionData, 'exam_category', 'Xóa');

if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
        <a href="?module=exam_category&action=add"><button class="btn btn-success">Thêm danh mục đề thi mới <i class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <p></p>
    <h4 class="text-center">Danh mục đề thi</h4>
    <hr>
    <form method="get">
        <input type="hidden" name="module" value="exam_category">
        <input type="hidden" name="action" value="lists">
        <div class="row">
            <div class="col-10">
                <input type="text" placeholder="Nhập từ khóa tìm kiếm..." name="keyword" class="form-control" value="<?= !empty($keyword) ? $keyword : false ?>">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary w-100">Tìm kiếm</button>
            </div>
        </div>
    </form>
    <hr>
    <table class="table table-bordered border_color">
        <thead class="border_header">
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Tạo bởi (update..)</th>
                <?php if ($checkEdit) : ?>
                    <th width="5%">Sửa</th>
                <?php endif;
                if ($checkDelete) : ?>
                    <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['exam_cate'])) :
                foreach ($data['exam_cate'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td>1</td>
                        <?php if ($checkEdit) : ?>
                            <td><a href="#"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <?php endif;
                        if ($checkDelete) : ?>
                            <td><a href="#"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                        <?php endif ?>
                    </tr>
                <?php endforeach;
            else :
                ?>
                <td colspan="5">
                    <div class="alert alert-warning text-center">Thông tin bạn tìm kiếm không có dữ liệu</div>
                </td>
            <?php
            endif ?>
        </tbody>
    </table>
</div>