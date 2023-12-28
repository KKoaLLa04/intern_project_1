<?php
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <a href="?module=book&action=add"><button class="btn btn-success">Thêm sách <i class="fa fa-plus"></i></button></a>
    <p></p>
    <h4 class="text-center">Danh sách quản lý sách</h4>
    <hr>
    <form action="" method="get">
        <input type="hidden" name="module" value="book">
        <input type="hidden" name="action" value="lists">
        <div class="row">
            <div class="col-10">
                <input type="text" name="keyword" class="form-control" placeholder="Từ khóa tìm kiếm..."
                    value="<?= !empty($keyword) ? $keyword : false ?>">
            </div>
            <div class="col-2">
                <button class="btn btn-primary w-100" type="submit">Tìm kiếm</button>
            </div>
        </div>
    </form>
    <hr>
    <table class="table table-bordered border_color">
        <thead class="border_header">
            <tr>
                <th>STT</th>
                <th>thumbnail</th>
                <th width="7%">Tên sách</th>
                <th>Giá</th>
                <th width="7%">Tác giả</th>
                <th width="7%">Số lượng</th>
                <th width="8%">Trạng thái</th>
                <th>Mô tả</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $uploadDir = '../uploads/books/';
            if (!empty($data['book'])) :
                foreach ($data['book'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td>
                    <?php
                            if (is_file($uploadDir . $item['thumbnail'])) {
                                echo "<img src='" . $uploadDir . $item['thumbnail'] . "' height='80' width='80' >";
                            } else {
                                echo "Không có ảnh";
                            }
                            ?>
                </td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo number_format($item['price']) ?> VNĐ</td>
                <td><?php echo $item['author'] ?></td>
                <td><?php echo $item['quantity'] ?></td>
                <td><?php echo (!empty($item['status']) && $item['status'] == 1) ? '<button class="btn btn-primary btn-sm">Còn hàng</button>' : '<button class="btn btn-warning btn-sm">Hết hàng</button>' ?>
                </td>
                <td><?php echo $item['description'] ?></td>
                <td><a href="?module=book&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i
                                class="fa fa-edit"></i></button></a></td>
                <td><a href="?module=book&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
            </tr>
            <?php endforeach;
            else :
                ?>
            <td colspan="9">
                <div class="alert alert-warning text-center">Không có sách theo từ khóa bạn tìm kiếm</div>
            </td>
            <?php
            endif; ?>
        </tbody>
    </table>
</div>