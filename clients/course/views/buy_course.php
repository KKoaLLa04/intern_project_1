<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$courseInfo = $data['courseInfo'];
?>
<div class="container-fluid py-3">
    <div class="row">
        <div class="col-9">
            <h3>Thông tin khóa học bạn mua:</h3>
            <div class="row">
                <div class="col-7">
                    <img src="<?php echo _WEB_HOST_ROOT ?>/uploads/course/<?= $courseInfo['thumbnail'] ?>" alt=""
                        width="100%">
                </div>
                <div class="col-5">
                    <ul>
                        <li>Tên khóa học: <?= $courseInfo['title'] ?></li>
                        <li>Giá: <b style="color: red;"><?= number_format($courseInfo['price']) ?> VNĐ</b></li>
                        <li>Giảng viên: Duy Kiên</li>
                        <li>Thời hạn: vĩnh viễn</li>
                    </ul>
                </div>
            </div>
            <hr>
            <?php

            $course = firstRaw("SELECT * FROM course WHERE id=21");

            echo html_entity_decode($course['description'])
            ?>
        </div>

        <div class="col-3">
            <h3>Hình thức thanh toán</h3>
            <?php getMsg($msg, $msg_type) ?>
            <form action="" method="post">
                <input type="hidden" name="total"
                    value="<?= !empty($courseInfo['price']) ? $courseInfo['price'] : false ?>">
                <input type="hidden" name="id" value="<?= $courseInfo['id'] ?>">
                <input type="radio" name="pay" value="momo_atm" id="momo_atm"> <label for="momo_atm"><img
                        src="<?php echo _WEB_HOST_TEMPLATE ?>/images/momo.png" width="50px"> Thanh toán bằng
                    momo atm</label>
                <br>
                <input type="radio" name="pay" value="vnpay" id="vnpay"> <label for="vnpay"><img
                        src="<?php echo _WEB_HOST_TEMPLATE ?>/images/vnpay.png" width="50px"> Thanh toán bằng
                    vnpay</label>
                <br>
                <input type="radio" name="pay" value="momo_qr" id="momo_qr"> <label for="momo_qr"><img
                        src="<?php echo _WEB_HOST_TEMPLATE ?>/images/momo.png" width="50px"> Thanh toán bằng
                    mã qr momo</label>

                <hr>
                <button class="btn btn-danger w-100" name="redirect" value="1">Thanh toán ngay</button>
            </form>
        </div>
    </div>
</div>