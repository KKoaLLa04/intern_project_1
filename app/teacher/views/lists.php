<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'teacher', 'Thêm');
$checkEdit = checkPermission($permissionData, 'teacher', 'Sửa');
$checkDelete = checkPermission($permissionData, 'teacher', 'Xóa');

if (isset($_GET['status_search'])) {
    $status = $_GET['status_search'];
}
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
        <a href="?module=teacher&action=add"><button class="btn btn-success">Thêm giảng viên mới <i class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <p></p>
    <h4 class="text-center">Danh sách giảng viên đào tạo</h4>
    <hr>
    <form action="" method="get">
        <input type="hidden" name="module" value="teacher">
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
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered border_color">
        <thead class="border_header">
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Kinh Nghiệm</th>
                <th width="10%">Tình trạng</th>
                <?php if ($checkEdit) : ?>
                    <th width="5%">Sửa</th>
                <?php endif;
                if ($checkDelete) : ?>
                    <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['teachers'])) :
                foreach ($data['teachers'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['fullname'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td><?php echo $item['exp'] ?> năm</td>
                        <td class="text-center">
                            <?php echo ($item['status'] == 1) ? '<button class="btn btn-success">Kích hoạt</button>' : '<button class="btn btn-danger">Khóa</button>' ?>
                            <br>
                            <?php echo ($item['status'] == 1) ? '<a href="?module=teacher&action=status&status=0&id=' . $item['id'] . '">Khóa</a>' : '<a href="?module=teacher&action=status&status=1&id=' . $item['id'] . '")>Kích hoạt</a>'  ?>
                        </td>
                        <?php if ($checkEdit) : ?>
                            <td><a href="?module=teacher&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <?php endif;
                        if ($checkDelete) : ?>
                            <td><a href="?module=teacher&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                        <?php endif ?>
                    </tr>
                <?php endforeach;
            else :
                ?>
                <td colspan="8">
                    <div class="alert alert-warning text-center">Không có thông tin bạn tìm kiếm</div>
                </td>
            <?php
            endif ?>
        </tbody>
    </table>
</div>