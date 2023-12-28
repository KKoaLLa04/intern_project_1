<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'lesson', 'Thêm');
$checkEdit = checkPermission($permissionData, 'lesson', 'Sửa');
$checkDelete = checkPermission($permissionData, 'lesson', 'Xóa');

if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
        <a href="?module=lesson&action=add"><button class="btn btn-success">Thêm bài học mới <i class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <p></p>
    <h4 class="text-center">Danh sách bài học</h4>
    <hr>
    <form action="" method="get">
        <input type="hidden" name="module" value="lesson">
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
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered border_color">
        <thead class="border_header">
            <tr>
                <th width="3%">STT</th>
                <th>Tiêu đề</th>
                <th>Chương</th>
                <th>Khóa học</th>
                <th width="9%">Học thử</th>
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
            <?php if (!empty($data['lesson'])) :
                foreach ($data['lesson'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['module_name'] ?></td>
                        <td><?php echo $item['course_name'] ?></td>
                        <td class="text-center">
                            <a href="?module=lesson&action=share_lesson&id=<?= $item['id'] ?>&share=<?= $item['share_lesson'] ?>"><?= (!empty($item['share_lesson']) && $item['share_lesson'] == 1) ? '<button class="btn btn-success btn-sm">cho phép</button>' : '<button class="btn btn-danger btn-sm">Không</button>' ?></a>
                        </td>
                        <td class="text-center">
                            <?= ($item['status'] == 0) ? '<button class="btn btn-warning btn-sm">Chờ Duyệt</button>' : '<button class="btn btn-success btn-sm">Đã Duyệt</button>' ?>
                        </td>
                        <?php if ($checkEdit) : ?>
                            <td><a href="?module=lesson&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <?php endif;
                        if ($checkDelete) : ?>
                            <td><a href="?module=lesson&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                        <?php endif ?>
                    </tr>
                <?php endforeach;
            else :
                ?>
                <td colspan="7">
                    <div class="alert alert-warning text-center">
                        Không có thông tin tìm kiếm
                    </div>
                </td>
            <?php
            endif; ?>
        </tbody>
    </table>
</div>