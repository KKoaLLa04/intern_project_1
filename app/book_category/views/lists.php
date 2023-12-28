<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <a href="?module=book_category&action=add"><button class="btn btn-success">Thêm khóa danh mục sách mới <i class="fa fa-plus"></i></button></a>
    <h4 class="text-center">Danh mục sách</h4>
    <hr>
    <form action="" method="get">
        <input type="hidden" name="module" value="book_category">
        <input type="hidden" name="action" value="lists">
        <div class="row">
            <div class="col-10">
                <input type="text" placeholder="Nhập từ khóa tìm kiếm..." name="keyword" class="form-control" value="<?= !empty($data['keyword']) ? $data['keyword'] : false ?>">
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
                <th>Thời gian</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['book_category'])) :
                foreach ($data['book_category'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['create_at'] ?></td>
                        <td><a href="?module=book_category&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <td><a href="?module=book_category&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                    </tr>
                <?php endforeach;
            else :
                ?>
                <td colspan="5">
                    <div class="alert alert-danger text-center">Không có dữ liệu</div>
                </td>
            <?php
            endif; ?>
        </tbody>
    </table>

</div>