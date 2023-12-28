<?php
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <h4 class="text-center">Quản lý hóa đơn của khách hàng</h4>
    <p class="text-center"><button class="btn btn-danger">Đơn hàng mới</button> -> <button class="btn btn-warning">Đang
            xử
            lý</button> -> <button class="btn btn-info">Đang giao</button> -> <button class="btn btn-success">Đã
            giao</button> </p>
    <a href="<?= _WEB_HOST_ROOT_ADMIN . '/bill/controller/export.php' ?>"><button class="btn btn-success" type="button"
            name="buton"><i class="fa fa-download"></i> Export
            File</button></a>
    <a href="?module=bill&action=course_bill"><button class="btn btn-primary"><i class="fa fa-copy"></i> Hóa đơn khóa
            học</button></a>
    <hr>
    <form method="get">
        <input type="hidden" name="module" value="bill">
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
                <th width="3%">#</th>
                <th>Thông tin</th>
                <th>Mã hóa đơn</th>
                <th>Địa chỉ</th>
                <th>Tổng</th>
                <th>Hình thức thanh toán</th>
                <th width="11%">Xem Chi Tiết</th>
                <th>Tình trạng</th>
                <th width="5%">Sửa</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['bill'])) :
                foreach ($data['bill'] as $key => $item) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td>
                    Tên: <?= $item['name'] ?> <br>
                    Email: <?= $item['email'] ?> <br />
                    Số điện thoại: <?= $item['phone'] ?>
                </td>
                <td><?= $item['code'] ?></td>
                <td><?= $item['address'] ?></td>
                <td><?= number_format($item['total']) ?> VNĐ</td>
                <td><?= $item['pay'] ?></td>
                <td class="text-center"><a href="?module=bill&action=detail&code=<?= $item['code'] ?>"><button
                            class="btn btn-primary">Xem Chi Tiết</button></a></td>
                <td class="text-center">
                    <?php
                            if ($item['status'] == 0) {
                                echo '<a href="?module=bill&action=status&status=1&id=' . $item['id'] . '"><button class="btn btn-danger">Đơn hàng mới</button></a>';
                            } else if ($item['status'] == 1) {
                                echo '<a href="?module=bill&action=status&status=2&id=' . $item['id'] . '"><button class="btn btn-warning">Đang xử lý</button></a>';
                            } else if ($item['status'] == 2) {
                                echo '<a href="?module=bill&action=status&status=3&id=' . $item['id'] . '"><button class="btn btn-primary">Đang giao</button></a>';
                            } else if ($item['status'] == 3) {
                                echo '<button class="btn btn-success">Đã giao</button>';
                            }
                            ?>
                </td>
                <td><a href="?module=bill&action=edit&id=<?= $item['id'] ?>"><button class="btn btn-warning"><i
                                class="fa fa-edit"></i></button></a></td>
            </tr>
            <?php endforeach;
            else :
                ?>
            <td colspan="9">
                <div class="alert alert-warning text-center">Thông tin bạn tìm kiếm không có dữ liệu</div>
            </td>
            <?php
            endif ?>
        </tbody>
    </table>
</div>