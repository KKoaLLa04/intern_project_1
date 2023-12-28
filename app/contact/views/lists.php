<?php
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <h4 class="text-center">Danh sách liên hệ</h4>
    <hr>
    <form method="get">
        <input type="hidden" name="module" value="contact">
        <input type="hidden" name="action" value="lists">
        <div class="row">
            <div class="col-10">
                <input type="text" placeholder="Nhập từ khóa tìm kiếm..." name="keyword" class="form-control"
                    value="<?= !empty($keyword) ? $keyword : false ?>">
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
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Nội dung</th>
                <th width="12%">Trạng thái</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['contact'])) :
                foreach ($data['contact'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['fullname'] ?></td>
                <td><?php echo $item['email'] ?></td>
                <td><?php echo $item['phone'] ?></td>
                <td><?php echo $item['content'] ?></td>
                <td><?php echo ($item['status'] == 0) ? '<a href="?module=contact&action=status&id=' . $item['id'] . '"><button class="btn btn-warning">Chưa duyệt</button></a>' : '<a href="?module=contact&action=status&id=' . $item['id'] . '"><button class="btn btn-dark">Đã duyệt</button></a>' ?>
                </td>
                <td><a href="?module=contact&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
            </tr>
            <?php endforeach;
            else :
                ?>
            <td colspan="7">
                <div class="alert alert-warning text-center">Thông tin bạn tìm kiếm không có dữ liệu</div>
            </td>
            <?php
            endif ?>
        </tbody>
    </table>
</div>