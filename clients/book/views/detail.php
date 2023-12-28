<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
if (!empty($data['book_detail'])) {
    $item = $data['book_detail'];
}
?>
<p class="py-1">Trang chủ > Sách luyện thi....</p>

<div class="row py-3">
    <?php getMsg($msg, $msg_type) ?>
    <div class="col-3">
        <img src="<?php echo _WEB_HOST_ROOT . '/uploads/books/' . $item['thumbnail'] ?>" alt="" width="100%">
    </div>

    <div class="col-6">
        <h3><?= $item['name'] ?></h3>
        <hr>
        <div>
            <p><i class="fa fa-check-circle"></i> Còn hàng</p>
            <p>Chia sẻ: <button class="btn btn-info btn-sm"><i class="fab fa-facebook"></i> Share</button> <button
                    class="btn btn-dark btn-sm"><i class="fab fa-twitter"></i> Twitter</button></p>
            <p>Tình trạng: <b><?= $item['quantity'] == 0 ? 'Hết hàng' : 'Còn hàng' ?></b></p>
            <p>Số lượng: <b><?= $item['quantity'] ?></b></p>
        </div>
        <hr>
        <p><?= $item['description'] ?></p>
        <p>Tác giả: <b><?= $item['author'] ?></b></p>
        <p>
            <a href="?module=book&action=buy&id=<?= $item['id'] ?>"><button class="btn btn-danger">Mua ngay <i
                        class="fa-solid fa-sack-dollar"></i></button></a>
            <a href="?module=book&action=add&book_id=<?= $item['id'] ?>"><button class="btn btn-success">Thêm vào giỏ
                    hàng <i class="fa fa-cart-plus"></i></button></a>
        </p>
        <hr>
        <p>Khuyến mãi</p>
        <p><b>Miễn phí giao hàng toàn quốc (Khi mua cùng khóa học)</b></p>
    </div>

    <div class="col-3">
        <div class="background_white">
            <h4>Thông tin thanh toán</h4>
            <hr>
            <p>Giá bìa: <?= number_format($item['price']) ?>đ</p>
            <p>Giá bán: <b><?= number_format($item['price']) ?>đ</b></p>
            <!-- <hr> -->
            <!-- <div class="d-flex justify-content-around">
                <p>Số lượng mua</p>
                <p><button class="btn btn-primary btn-sm"><i class="fa fa-minus"></i></button><button class="btn btn-light btn-sm">1</button><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button></p>
            </div> -->
            <hr>
            <a href="?module=book&action=buy&id=<?= $item['id'] ?>"><button class="btn btn-danger w-100 py-3"><i
                        class="fa fa-cart-arrow-down"></i> Mua
                    ngay</button></a>
        </div>

        <div class="d-flex py-3">
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/phone.svg" width="15%">
            <div class="mx-2">
                <span>Mua hàng online</span><br>
                <span><b>0985 82 93 93 - 0943 19 19 00</b></span>
            </div>
        </div>

        <div class="d-flex py-3">
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/truck.svg" width="15%">
            <div class="mx-2">
                <span>Vận chuyển</span><br>
                <span><b>GIAO HÀNG TRÊN TOÀN QUỐC</b></span>
            </div>
        </div>
    </div>
</div>

<hr>
<?php echo (!empty($item['content'])) ? html_entity_decode($item['content']) : false ?>

<div class="row">
    <h3 class="mb-3">Bạn có thể quan tâm</h3>
    <?php if (!empty($data['book'])) :
        $count = 0;
        foreach ($data['book'] as $key => $item) :
            $count++;
            if ($count > 4) {
                break;
            } ?>
    <div class="col-3">
        <a href="?module=book&action=detail&id=<?= $item['id'] ?>" style="text-decoration: none; color: black;">
            <img src="<?php echo _WEB_HOST_ROOT ?>/uploads/books/<?= $item['thumbnail'] ?>" alt="" width="100%"
                height="350px">
            <h6 class="py-3"><?= $item['name'] ?></h6>
        </a>
        <div class="d-flex justify-content-between">
            <p>Giá bán: </p>
            <p><b><?= number_format($item['price']) ?> VNĐ</b></p>
        </div>
    </div>
    <?php endforeach;
    endif; ?>
</div>