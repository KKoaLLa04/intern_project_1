<?php
$code = $data['code'];
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<p class="py-1">Trang chủ > cảm ơn</p>
<?php getMsg($msg, $msg_type) ?>
<h4>Cảm ơn bạn đã đặt hàng, chúng tôi sẽ liên hệ sớm nhất đến bạn</h4>
<p class="text-center"><a href="<?php echo _WEB_HOST_ROOT ?>"><button class="btn btn-primary">Trang chủ</button></a> <a href="?module=cart&action=cart_detail&code=<?= $code ?>"><button class="btn btn-success">Chi tiết đơn
            hàng</button></a></p>