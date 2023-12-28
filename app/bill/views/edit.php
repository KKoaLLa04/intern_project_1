<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
if (!empty($data['bill_detail'])) {
    $item = $data['bill_detail'];
}
?>
<div class="container-fluid">
    <a href="?module=bill&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Sửa hóa đơn - <?= $item['code'] ?></h4>
    <ul>
        <li>Tên khách hàng: <?= $item['name'] ?></li>
        <li>Email: <?= $item['email'] ?></li>
        <li>Địa chỉ: <?= $item['address'] ?></li>
        <li>Số điện thoại: <?= $item['phone'] ?></li>
        <li>Thanh toán: <?= $item['pay'] ?></li>
        <li>Tổng hóa đơn: <?= $item['total'] ?></li>
    </ul>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Ghi chú</label>
            <textarea name="note" class="form-control" cols="30" rows="10" placeholder="Ghi chú..."><?= $item['note'] ?></textarea>
        </div>

        <label for="">Tình trạng</label>
        <select name="status">
            <option value="0" <?php echo ($item['status'] == 0) ? 'selected' : false ?>>Đơn hàng mới</option>
            <option value="1" <?php echo ($item['status'] == 1) ? 'selected' : false ?>>Đang xử lý</option>
            <option value="2" <?php echo ($item['status'] == 2) ? 'selected' : false ?>>Đang giao</option>
            <option value="3" <?php echo ($item['status'] == 3) ? 'selected' : false ?>>Đã giao</option>
        </select>
        <br>
        <hr>
        <button class="btn btn-primary" type="submit">Thay đổi</button>
    </form>
</div>