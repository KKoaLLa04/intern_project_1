<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <a href="?module=news_category&action=add"><button class="btn btn-success">Thêm danh mục tin tức mới <i class="fa fa-plus"></i></button></a>
    <p></p>
    <h4 class="text-center">Danh mục tin tức</h4>
    <hr>
    <form method="get">
        <input type="hidden" name="module" value="news_category">
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
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Thời gian</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['news_category'])) :
                foreach ($data['news_category'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['create_at'] ?></td>
                        <td><a href="?module=news_category&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <td><a href="?module=news_category&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                    </tr>
                <?php endforeach;
            else :
                ?>
                <td colspan="5">
                    <div class="alert alert-warning text-center">Thông tin bạn tìm kiếm không có dữ liệu</div>
                </td>
            <?php
            endif; ?>
        </tbody>
    </table>
</div>