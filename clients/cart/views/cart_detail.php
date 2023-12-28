<?php
$bill_detail = $data['bill_detail'];
?>
<p class="py-1">Trang chủ > chi tiết đơn hàng</p>

<div class="background_white">
    <h4>Chi tiết đơn hàng của bạn</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã đơn</th>
                <th>Người đặt</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Tổng tiền</th>
                <th>PTTT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $bill_detail['code'] ?></td>
                <td><?php echo $bill_detail['name'] ?></td>
                <td><?php echo $bill_detail['email'] ?></td>
                <td><?php echo $bill_detail['address'] ?></td>
                <td><?php echo $bill_detail['phone'] ?></td>
                <td><?php echo $bill_detail['total'] ?></td>
                <td><?php echo $bill_detail['pay'] ?></td>
            </tr>
        </tbody>
    </table>

    <br>
    <h4>Thông tin hàng hóa bạn đã đặt</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th width="10%">Ảnh minh họa</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th width="12%">Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['cart_detail'])) :
                foreach ($data['cart_detail'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><img src="<?php echo _WEB_HOST_ROOT . '/uploads/books/' . $item['images'] ?>" width="100%"></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['price'] ?></td>
                        <td><?php echo $item['quantity'] ?></td>
                        <td><?php echo $item['quantity'] * $item['price'] ?></td>
                        <td><button class="btn btn-danger">Đơn hàng mới</button></td>
                    </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
    <p>Tổng hóa đơn: <b><?php echo $bill_detail['total'] ?> VNĐ</b></p>
</div>
<a href="<?php echo _WEB_HOST_ROOT ?>"><button class="btn btn-primary">Trang chủ</button></a>