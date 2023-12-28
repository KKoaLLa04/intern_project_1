<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
if (empty($old) && isLoginStudent()) {
    $old = isLoginStudent();
}
?>
<p class="py-1">Trang chủ > giỏ hàng</p>
<div class="row">
    <div class="col-9">
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
        <h4>Thông tin nhận hàng</h4>
        <?php getMsg($msg, $msg_type) ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" name="fullname" class="form-control" placeholder="Họ và tên..."
                    value="<?php echo oldData('fullname', $old) ?>">
                <p class="error"><?php echo errorData('fullname', $errors) ?></p>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="email..."
                    value="<?php echo oldData('email', $old) ?>">
                <p class="error"><?php echo errorData('email', $errors) ?></p>
            </div>

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" name="address" class="form-control" placeholder="Địa chỉ..."
                    value="<?php echo oldData('address', $old) ?>">
                <p class="error"><?php echo errorData('address', $errors) ?></p>
            </div>

            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" placeholder="Số điện thoại..."
                    value="<?php echo oldData('phone', $old) ?>">
                <p class="error"><?php echo errorData('phone', $errors) ?></p>
            </div>

            <input type="hidden" name="total" value="<?= !empty($total) ? $total : 0 ?>">

            <button class="btn btn-primary btn-sm" type="submit">Đặt Hàng</button>
        </form>
    </div>
</div>