<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'module', 'Thêm');
$checkEdit = checkPermission($permissionData, 'module', 'Sửa');
$checkDelete = checkPermission($permissionData, 'module', 'Xóa');

if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
        <a href="?module=module&action=add"><button class="btn btn-success">Thêm chương mới <i class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <p></p>
    <h4 class="text-center">Danh sách các chương học</h4>
    <hr>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="get">
        <input type="hidden" name="module" value="module">
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
                <th width="5%">STT</th>
                <th>Tiêu đề chương</th>
                <th>Khóa học</th>
                <th width="11%">Xem Chi Tiết</th>
                <?php if ($checkEdit) : ?>
                    <th width="5%">Sửa</th>
                <?php endif;
                if ($checkDelete) : ?>
                    <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['module'])) :
                foreach ($data['module'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><a href="?module=lesson&action=lists&module_id=<?= $item['id'] ?>"><?php echo $item['title'] ?></a>
                        </td>
                        <td><?php echo $item['course_title'] ?></td>
                        <td><a href="?module=lesson&action=lists&module_id=<?= $item['id'] ?>"><button class="btn btn-primary">Xem Chi Tiết</button></a></td>
                        <?php if ($checkEdit) : ?>
                            <td><a href="?module=module&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <?php endif;
                        if ($checkDelete) : ?>
                            <td><a href="?module=module&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach;
            else :
                ?>
                <td colspan="6">
                    <div class="alert alert-warning text-center">
                        Không có thông tin tìm kiếm
                    </div>
                </td>
            <?php
            endif ?>
        </tbody>
    </table>
</div>