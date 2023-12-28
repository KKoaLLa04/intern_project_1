<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'subject', 'Thêm');
$checkEdit = checkPermission($permissionData, 'subject', 'Sửa');
$checkDelete = checkPermission($permissionData, 'subject', 'Xóa');

if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
        <a href="?module=subject&action=add"><button class="btn btn-success">Thêm khóa học mới <i class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <p></p>
    <h4 class="text-center">Danh sách khóa học</h4>
    <?php getMsg($msg, $msg_type) ?>
    <hr>
    <form action="" method="get">
        <input type="hidden" name="module" value="subject">
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
                <th width="15%">Ảnh</th>
                <th>tiêu đề</th>
                <th>Danh mục</th>
                <th>giá</th>
                <th>giảng viên</th>
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
            <?php if (!empty($data['data'])) :
                foreach ($data['data'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><img src="<?php echo _WEB_HOST_ROOT . '/uploads/course/' . $item['thumbnail'] ?>" width="100%"></td>
                        <td><a href="?module=module&action=lists&subject_id=<?= $item['id'] ?>"><?php echo $item['title']; ?></a>
                        </td>
                        <td><a href="#"><?php echo $item['cate_name'] ?></a></td>
                        <td><?php echo number_format($item['price']); ?> VND</td>
                        <td><?php echo $item['fullname'] ?></td>
                        <td><a href="?module=module&action=lists&subject_id=<?= $item['id'] ?>"><button class="btn btn-primary">Xem Chi Tiết</button></a></td>
                        <?php if ($checkEdit) : ?>
                            <td><a href="?module=subject&action=edit&id=<?php echo $item['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                        <?php endif;
                        if ($checkDelete) : ?>
                            <td><a href="?module=subject&action=delete&id=<?php echo $item['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash"></i></a></td>
                        <?php endif ?>
                    </tr>
                <?php endforeach;
            else :
                ?>
                <td colspan="9">
                    <div class="alert alert-warning text-center">
                        Không có thông tin tìm kiếm
                    </div>
                </td>
            <?php
            endif;
            ?>
        </tbody>
    </table>
</div>