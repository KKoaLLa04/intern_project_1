<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$msg_pay = getFlashData('msg_pay');
$errors = getFlashData('errors');
$old = getFlashData('old');
$item = $data['book_detail'];
if (!empty($data['student_info'])) {
    $studentInfo = $data['student_info'];
}

if (empty($old) && !empty($studentInfo)) {
    $old = $studentInfo;
}
?>
<p class="py-1">Trang chủ > thanh toán</p>

<div class="row">
    <div class="col-9">
        <h3 class="my-3 text-center">Thông tin - <?php echo $item['name'] ?></h3>
        <div class="background_white">
            <p>Chi tiết sản phẩm</p>
            <div class="row">
                <div class="col-8">
                    <img src="<?php echo _WEB_HOST_ROOT . '/uploads/books/' . $item['thumbnail'] ?>" width="100%">
                </div>
                <div class="col-4">
                    <ul>
                        <li class="py-1">Tên sách: <?php echo $item['name'] ?></li>
                        <li class="py-1">Giá: <b style="color: red;"><?php echo number_format($item['price']) ?> VNĐ</b>
                        </li>
                        <li class="py-1">Tác giả: <?php echo $item['author'] ?></li>
                        <li class="py-1">Tình trạng: <?php echo $item['status'] == 1 ? 'Còn hàng' : '<b>Hết hàng</b>' ?>
                        </li>
                        <li class="py-1">Số lượng: <?php echo $item['quantity'] ?></li>
                        <li class="py-1">Danh mục: <?php echo $item['title_cate'] ?></li>
                    </ul>
                </div>

                <div class="col-12 py-5">
                    <p style="font-size: 18px; font-weight: 600; font-style: italic;">
                        <?php echo $item['description'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-3">
        <form action="" method="post">
            <h3 class="text-center my-3">Thông tin nhận hàng</h3>
            <?php getMsg($msg, $msg_type) ?>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Họ và tên người nhận hàng..." name="fullname"
                    value="<?php echo oldData('fullname', $old) ?>">
                <p class="error"><?php echo errorData('fullname', $errors) ?></p>
                <input type="text" class="form-control" placeholder="Email..." name="email"
                    value="<?php echo oldData('email', $old) ?>">
                <p class="error"><?php echo errorData('email', $errors) ?></p>
                <input type="text" class="form-control" placeholder="Số điện thoại..." name="phone"
                    value="<?php echo oldData('phone', $old) ?>">
                <p class="error"><?php echo errorData('phone', $errors) ?></p>
                <input type="text" class="form-control" placeholder="Địa chỉ..." name="address"
                    value="<?php echo oldData('address', $old) ?>">
                <p class="error"><?php echo errorData('address', $errors) ?></p>
            </div>

            <h3 class="text-center my-3">Hình Thức Thanh Toán</h3>
            <?php getMsg($msg_pay, $msg_type) ?>
            <input type="radio" name="pay" value="momo_atm" id="momo_atm"> <label for="momo_atm"><img
                    src="<?php echo _WEB_HOST_TEMPLATE . '/images/momo.png' ?>" width="50px">Thanh toán momo
                atm</label>
            <p></p>
            <input type="radio" name="pay" value="vnpay" id="vnpay"> <label for="vnpay"><img
                    src="<?php echo _WEB_HOST_TEMPLATE . '/images/vnpay.png' ?>" width="50px">Thanh toán vnpay</label>
            <p></p>
            <input type="radio" name="pay" value="momo_qr" id="momo_qr"> <label for="momo_qr"><img
                    src="<?php echo _WEB_HOST_TEMPLATE . '/images/momo.png' ?>" width="50px">Thanh toán momo qr
                code</label>
            <p></p>

            <input type="hidden" name="price" value="<?php echo $item['price'] ?>">
            <input type="hidden" name="name" value="<?php echo $item['name'] ?>">
            <input type="hidden" name="thumbnail" value="<?php echo $item['thumbnail'] ?>">
            <input type="hidden" name="book_id" value="<?php echo $item['id'] ?>">
            <button type="submit" name="redirect" value="1" class="btn btn-danger w-100">Thanh Toán Ngay</button>
        </form>
    </div>
</div>