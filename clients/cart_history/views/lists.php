<p class="py-1">Trang chủ > lịch sử đơn hàng</p>

<h4>Lịch sử đơn hàng của bạn</h4>
<p class="text-center">SONLINE TRÂN THÀNH CẢM ƠN BẠN</p>
<p class="text-center"><button class="btn btn-danger">Đơn hàng mới</button> -> <button class="btn btn-warning">Đang xử
        lý</button> -> <button class="btn btn-info">Đang giao</button> -> <button class="btn btn-success">Đã
        giao</button> </p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Thông tin</th>
            <th width="3%">PTTT</th>
            <th>Thanh Toán</th>
            <th>Tổng tiền</th>
            <th>Thời gian</th>
            <th>Trạng thái</th>
            <th width="11%">Xem Chi Tiết</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($data['cart_history'])) :
            foreach ($data['cart_history'] as $key => $item) : ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td>
                Mã đơn hàng: <?= $item['code'] ?> <br />
                Họ tên: <?= $item['name'] ?> <br />
                Email: <?= $item['email'] ?> <br />
                phone: <?= $item['phone'] ?> <br />
                Địa chỉ: <?= $item['address'] ?> <br />
            </td>
            <td><?= $item['pay'] ?></td>
            <td class="text-center">
                <?= ($item['pay'] !== 'cash') ? '<button class="btn btn-success">Đã Thanh Toán</button>' : '<button class="btn btn-warning">Chưa Thanh Toán</button>' ?>
            </td>
            <td><?= number_format($item['total']) ?> VNĐ</td>
            <td><?= $item['create_at'] ?></td>
            <td class="text-center">
                <?php
                        if ($item['status'] == 0) {
                            echo '<button class="btn btn-danger">Đơn hàng mới</button>';
                        } else if ($item['status'] == 1) {
                            echo '<button class="btn btn-warning">Đang xử lý</button>';
                        } else if ($item['status'] == 2) {
                            echo '<button class="btn btn-info">Đang giao</button>';
                        } else if ($item['status'] == 3) {
                            echo '<button class="btn btn-success">Đã giao</button>';
                        }
                        ?>
            </td>
            <td><a href="?module=cart_history&action=detail&code=<?= $item['code'] ?>"><button
                        class="btn btn-primary">Xem Chi Tiết</button></a></td>
        </tr>
        <?php endforeach;
        else:
            ?>
        <td colspan="8" class="text-center">
            <div class="alert alert-warning">Hiện bạn không có hóa đơn nào</div>
        </td>
        <?php
        endif; ?>
    </tbody>
</table>

<a href="<?= _WEB_HOST_ROOT ?>"><button class="btn btn-primary"><i class="fa fa-home"></i> Trang chủ</button></a>