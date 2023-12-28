<p>Trang chủ > chi tiết đơn hàng</p>
<h4>Chi tiết đơn hàng - <?= $data['cart_detail'][0]['code_id'] ?></h4>
<p class="text-center">SONLINE TRÂN THÀNH CẢM ƠN BẠN</p>
<p class="text-center"><button class="btn btn-danger">Đơn hàng mới</button> -> <button class="btn btn-warning">Đang xử
        lý</button> -> <button class="btn btn-info">Đang giao</button> -> <button class="btn btn-success">Đã
        giao</button> </p>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>#</th>
            <th width="10%">Ảnh</th>
            <th>Mã đơn hàng</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($data['cart_detail'])) :
            $total = 0;
            foreach ($data['cart_detail'] as $key => $item) :
                $total += $item['quantity'] * $item['price'];
        ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><img src="<?= _WEB_HOST_ROOT . '/uploads/books/' . $item['images'] ?>" width="100%">
                    </td>
                    <td><?= $item['code_id'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= number_format($item['price']) ?> VNĐ</td>
                    <td><button class="btn btn-success"><?= $item['quantity'] ?></button></td>
                    <td><?= number_format($item['quantity'] * $item['price']) ?> VNĐ</td>
                </tr>
        <?php endforeach;
        endif ?>
    </tbody>
</table>
<p>Tổng tiền: <b><?= !empty($total) ? number_format($total) : false ?> VNĐ</b></p>
<a href="?module=cart_history&action=lists"><button class="btn btn-success"><i class="fa fa-money-check"></i> Lịch sử
        tất cả đơn hàng</button></a>
<a href="<?= _WEB_HOST_ROOT ?>"><button class="btn btn-primary"><i class="fa fa-home"></i> Trang chủ</button></a>