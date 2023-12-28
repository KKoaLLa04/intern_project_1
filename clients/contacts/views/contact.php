<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<p class="py-1">Trang chủ > Liên hệ</p>

<div class="row">
    <div class="col-6">
        <h3 class="title__contact">THÔNG TIN LIÊN HỆ</h3>
        <div class="contact__information py-3">
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/locate.svg" alt="">
            <div>
                <h5>CÔNG TY TNHH MODERN VISION</h5>
                <p>Số 89B, Hoàng Diệu, Phường 5, Thành phố Đà Lạt, Tỉnh Lâm Đồng</p>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-6 contact__phone">
                <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/headphone.svg" alt="">
                <div>
                    <h5>Tổng đài hỗ trợ</h5>
                    <p>0985 82 93 93</p>
                    <p>0985 82 93 93</p>
                    <p>8:00 - 23:00 tất cả các ngày trong tuần kể cả ngày lễ</p>
                </div>
            </div>
            <div class="col-6 contact__phone">
                <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/telephone.svg" alt="">
                <div>
                    <h5>Điện thoại văn phòng</h5>
                    <p>0985 82 93 93</p>
                    <p>0985 82 93 93</p>
                    <p>8:00 - 23:00 tất cả các ngày trong tuần kể cả ngày lễ</p>
                </div>
            </div>
        </div>

        <div class="contact__email py-3">
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/locate.svg" alt="">
            <div>
                <h5>Email</h5>
                Hỗ trợ sử dụng: hotro.chuvanbien.vn@gmail.com <br>
                Tìm hiểu thông tin: hotro.chuvanbien.vn@gmail.com <br>
                Hợp tác với CHUVANBIEN: phdlinhdollar@gmail.com <br>
            </div>
        </div>
    </div>

    <div class="col-6">
        <h3 class="title__contact">VỊ TRÍ TRÊN BẢN ĐỒ</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14898.919665731193!2d105.77032909999998!3d21.00346085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453858bad025f%3A0xf423a56009e1ca10!2sHong%20Ngoc%20Hospital%20-%20Phuc%20Truong%20Minh!5e0!3m2!1sen!2s!4v1698915798984!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="col-3 my-4">
        <h3 style="color: red;">PHẢN HỒI & GÓP Ý</h3>
        <p>Bạn có thể dùng form bên cạnh để gửi ý kiến trực tiếp tới SONLINE.</p>
        <p>Chúng tôi sẽ phản hồi trong thời gian sớm nhất.</p>
    </div>

    <div class="col-9 my-4">
        <?php getMsg($msg, $msg_type) ?>
        <form action="" method="post" id="form-contact">
            <div class="row">
                <div class="col-4">
                    <input type="text" placeholder="Họ và tên*" class=" form-control" name="fullname" value="<?php echo oldData('fullname', $old) ?>">
                    <p class="error"><?php echo errorData('fullname', $errors) ?></p>
                </div>

                <div class="col-4">
                    <input type="text" placeholder="Email của bạn*" class="form-control" name="email" value="<?php echo oldData('email', $old) ?>">
                    <p class="error"><?php echo errorData('email', $errors) ?></p>
                </div>

                <div class="col-4">
                    <input type="text" placeholder="Số điện thoại*" class="form-control" name="phone" value="<?php echo oldData('phone', $old) ?>">
                    <p class="error"><?php echo errorData('phone', $errors) ?></p>
                </div>

                <div class="col-12">
                    <textarea rows="5" class="form-control" placeholder="Nội dung thông điệp của bạn*" style="border: none;" name="content"><?php echo oldData('content', $old) ?></textarea>
                    <p class="error"><?php echo errorData('content', $errors) ?></p>
                </div>

                <div class="contact__button my-3">
                    <p>* Thông tin bắt buộc</p>
                    <div>
                        <button class="btn btn-danger" type="submit">Gửi liên hệ</button>
                        <a href="?module=contacts&action=contact" class="btn btn-secondary">Hủy bỏ</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>