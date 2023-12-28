<?php
$billInfo = $data['bill_info'];
$cartBill = $data['cart_bill'];
?>
<div class="container-fluid">
    <a href="?module=bill&action=lists"><button class="btn btn-warning">Quay lại</button></a>
    <h4 class="text-center">Chi Tiết Hóa Đơn - <?php echo $billInfo['code'] ?></h4>
    <div class="row">
        <div class="col-3">
            <ul>
                <li>Họ tên: <?php echo $billInfo['name'] ?></li>
                <li>Mã hóa đơn: <?php echo $billInfo['code'] ?></li>
                <li>Email: <?php echo $billInfo['email'] ?></li>
                <li>Địa chỉ: <?php echo $billInfo['address'] ?></li>
                <li>Số điện thoại: <?php echo $billInfo['phone'] ?></li>
                <li>Tổng tiền: <?php echo number_format($billInfo['total']) ?> VNĐ</li>
            </ul>
        </div>

        <div class="col-9">
            <table class="table table-bordered border_color">
                <thead class="border_header">
                    <tr>
                        <th>#</th>
                        <th width="15%">Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th width="20%">Trạng thái</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (!empty($cartBill)) :
                        foreach ($cartBill as $key => $item) :
                    ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><img src="<?php echo _WEB_HOST_ROOT . '/uploads/books/' . $item['images'] ?>" width="100%">
                        </td>
                        <td><?= $item['name'] ?></td>
                        <td><?= number_format($item['price']) ?> VNĐ</td>
                        <td><?= $item['quantity'] ?></td>
                        <td><?= number_format($item['quantity'] * $item['price']) ?> VNĐ</td>
                        <td class="text-center">
                            <?= $billInfo['pay'] !== 'cash' ? '<button class="btn btn-success">Đã thanh toán</button>' : '<button class="btn btn-danger">Chưa thanh toán</button>' ?>
                        </td>
                    </tr>
                    <?php endforeach;
                    endif ?>
                </tbody>
            </table>
        </div>
    </div>

</div>