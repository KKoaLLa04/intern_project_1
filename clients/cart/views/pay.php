<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
if (empty($old) && isLoginStudent()) {
    $old = isLoginStudent();
}
$information = getSession('information_cart');
?>
<p class="py-1">Trang chủ > giỏ hàng</p>
<div class="row">
    <div class="col-9">
        <div class="background_white">
            <h4>Thông tin nhận hàng</h4>
            <ul>
                <li>Tên khách hàng:
                    <b><?php echo !empty($information['fullname']) ? $information['fullname'] : false ?></b>
                </li>
                <li>Email: <b><?php echo !empty($information['email']) ? $information['email'] : false ?></b></li>
                <li>Số điện thoại: <b><?php echo !empty($information['phone']) ? $information['phone'] : false ?></b>
                </li>
                <li>Địa chỉ: <b><?php echo !empty($information['address']) ? $information['address'] : false ?></b></li>
            </ul>
        </div>
        <h4>Thông tin đơn hàng của bạn</h4>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="3%">#</th>
                    <th width="10%">Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th width="15%">Số lượng</th>
                    <th width="10%">Thành tiền</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($data['student_cart'])) :
                    $total = 0;
                    foreach ($data['student_cart'] as $key => $item) :
                        $total += $item['quantity'] * $item['price'];
                ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><img src="<?= _WEB_HOST_ROOT . '/uploads/books/' . $item['images'] ?>" alt="" width="100%"></td>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['price'] ?></td>
                    <td class="text-center">
                        <?php echo '<button class="px-3 btn btn-success btn-sm">' . $item['quantity'] . '</button>' ?>
                    </td>
                    <td><?php echo $item['quantity'] * $item['price'] ?></td>
                </tr>
                <?php endforeach;
                endif; ?>
            </tbody>

        </table>
        <p>Tổng tiền: <b><?= !empty($total) ? $total : 0 ?> VNĐ</b></p>
        <hr>
    </div>

    <div class="col-3">
        <h4>Hình thức thanh toán</h4>
        <?php getMsg($msg, $msg_type) ?>
        <form action="" method="post" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="fullname"
                value="<?php echo !empty($information['fullname']) ? $information['fullname'] : false ?>">
            <input type="hidden" name="email"
                value="<?php echo !empty($information['email']) ? $information['email'] : false ?>">
            <input type="hidden" name="phone"
                value="<?php echo !empty($information['phone']) ? $information['phone'] : false ?>">
            <input type="hidden" name="address"
                value="<?php echo !empty($information['address']) ? $information['address'] : false ?>">
            <input type="hidden" name="total"
                value="<?php echo !empty($information['total']) ? $information['total'] : false ?>">

            <!-- check thanh toan -->
            <input type="radio" name="payment" value="cash" id="cash"> <label for="cash">Tiền mặt</label> <br>
            <!-- <input type="radio" name="payment" value="banking" id="banking"> <label for="banking">Chuyển khoản</label> -->
            <br>
            <input type="radio" name="payment" value="momo_atm" id="momo_atm"> <label for="momo_atm"><img
                    src="<?php echo _WEB_HOST_TEMPLATE . '/images/momo.png' ?>" width="50px"> MOMO ATM</label> <br>
            <input type="radio" name="payment" value="momo_qr" id="momo_qr"> <label for="momo_qr"><img
                    src="<?php echo _WEB_HOST_TEMPLATE . '/images/momo.png' ?>" width="50px"> Mã QR MOMO</label> <br>
            <input type="radio" name="payment" value="vnpay" id="vnpay"> <label for="vnpay"><img
                    src="<?php echo _WEB_HOST_TEMPLATE . '/images/vnpay.png' ?>" width="50px"> VNPAY </label><br>
            <input type="radio" name="payment" value="paypal" id="paypal"> <label for="paypal"><img
                    src="<?php echo _WEB_HOST_TEMPLATE . '/images/paypal.png' ?>" width="50px"> PAYPAL</label> <button
                class="btn btn-danger btn-sm">Tạm đóng</button> <br>
            <p></p>
            <button class="btn btn-danger w-100 py-2" value="Thanh toán ngay" name="redirect" type="submit">Thanh toán
                ngay</button>
        </form>
    </div>
</div>