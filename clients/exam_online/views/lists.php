<p class="py-3">Trang chủ > thi online</p>

<h3 class="text-center pb-3">Thi online phát triển bởi SONLINE</h3>
<div class="test_contain">
    <?php if (!empty($data['exam_online'])) :
        foreach ($data['exam_online'] as $key => $item) : ?>
    <div class="test__item background_white exam__item">
        <a href="?module=exam_online&action=detail&test_id=<?= $item['id'] ?>"
            style="color: black; text-decoration: none;"><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/photo1.png"
                alt="" width="100%" style="border-radius: 20px;">
            <h5 class="pt-4"><?= $item['title'] ?></h5>
        </a>
        <p class="d-flex justify-content-between m-0">Danh mục: <b><?= $item['name'] ?></b></p>
        <p class="d-flex justify-content-between m-0">Trạng thái: <b>Mở</b></p>
        <p class="d-flex justify-content-between">Giá bán: <b>Miễn phí</b></p>
    </div>
    <?php endforeach;
    endif ?>
</div>