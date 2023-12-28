<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<p class="py-1">Trang chủ > giỏ hàng</p>
<h4>Giỏ hàng của bạn</h4>
<?php getMsg($msg, $msg_type) ?>
<?php if (!empty($data['student_cart'])) : ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="3%">#</th>
                <th width="10%">Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th width="15%">Số lượng</th>
                <th width="10%">Thành tiền</th>
                <th width="5%">Xóa</th>
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
                        <td><?php echo number_format($item['price']) ?> VNĐ</td>
                        <td class="text-center">
                            <a href="?module=cart&action=minus&id=<?php echo $item['id'] ?>">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-minus"></i></button>
                            </a>
                            <?php echo '<button class="px-3 btn btn-success btn-sm">' . $item['quantity'] . '</button>' ?>

                            <a href="?module=cart&action=plus&id=<?php echo $item['id'] ?>&book_id=<?= $item['book_id'] ?>">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                            </a>
                        </td>
                        <td><?php echo number_format($item['quantity'] * $item['price']) ?> VNĐ</td>
                        <td><a href="?module=cart&action=delete&id=<?php echo $item['id'] ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                    </tr>
            <?php endforeach;
            endif; ?>
        </tbody>

    </table>
    <p>Tổng tiền: <b><?= !empty($total) ? $total : 0 ?> VNĐ</b></p>
    <a href="?module=cart&action=formcart"><button class="btn btn-primary btn-sm">Tiếp tục đặt hàng</button></a>

<?php else : ?>
    <div class="alert alert-warning text-center">
        <p>Hiện giỏ hàng của bạn không có sản phẩm nào</p>
    </div>
<?php endif ?>