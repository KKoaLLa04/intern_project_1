<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'student', 'Thêm');
$checkEdit = checkPermission($permissionData, 'student', 'Sửa');
$checkDelete = checkPermission($permissionData, 'student', 'Xóa');

if (isset($_GET['status_search'])) {
    $status = $_GET['status_search'];
}
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
        <a href="?module=student&action=add"><button class="btn btn-success">Thêm học viên mới <i class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <p></p>
    <h4 class="text-center">Danh Sách Thông Tin Học Viên</h4>
    <hr>
    <form action="" method="get">
        <input type="hidden" name="module" value="student">
        <input type="hidden" name="action" value="lists">
        <div class="row">
            <div class="col-3">
                <select name="status_search" class="form-control">
                    <option value="">Trạng thái</option>
                    <option value="0" <?php echo (isset($status) && $status == 0) ? 'selected' : false ?>>Chưa kích hoạt
                    </option>
                    <option value="1" <?php echo (isset($status) && $status == 1) ? 'selected' : false ?>>Đã kích hoạt
                    </option>
                </select>
            </div>
            <div class="col-7">
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
                <th width="3%">STT</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th width="10%">Tình trạng</th>
                <th width="10%">Quyền</th>
                <?php if ($checkEdit) : ?>
                    <th width="5%">Sửa</th>
                <?php endif;
                if ($checkDelete) : ?>
                    <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['student'])) :
                foreach ($data['student'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['fullname'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td class="text-center">
                            <a href="?module=student&action=status&status=<?= $item['status'] ?>&id=<?= $item['id'] ?>"><?php echo ($item['status'] == 0) ? '<button class="btn btn-danger btn-sm">Chưa kích hoạt</button>' : '<button class="btn btn-success btn-sm">Kích hoạt</button>' ?></a>
                        </td>
                        <td class="text-center">
                            <?php echo ($item['role'] == 0) ? '<button class="btn btn-primary btn-sm">Học Viên</button>' : '<button class="btn btn-success btn-sm">Super Admin</button>' ?>
                        </td>
                        <?php if ($checkEdit) : ?>
                            <td><a href="?module=student&action=edit&id=<?= $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <?php endif;
                        if ($checkDelete) : ?>
                            <td><a href="#"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                        <?php endif ?>
                    </tr>
                <?php endforeach;
            else :
                ?>
                <td colspan="8">
                    <div class="alert alert-warning text-center">
                        Không có thông tin tìm kiếm
                    </div>
                </td>
            <?php
            endif ?>
        </tbody>
    </table>
</div>