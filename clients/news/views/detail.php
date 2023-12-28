<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
if (!empty($data['news_detail'])) {
    $item = $data['news_detail'];
}
?>
<p class="py-1">Trang chủ > Tin tức .......</p>
<div class="row py-3">
    <?php getMsg($msg, $msg_type) ?>
    <?php echo !empty($item['content']) ? html_entity_decode($item['content']) : 'Update..' ?>
</div>
<hr>
<p>CÓ THỂ BẠN QUAN TÂM</p>
<div class="row">
    <?php if (!empty($data['news'])) :
        foreach ($data['news'] as $key => $item) : ?>
            <div class="col-3">
                <a href="?module=news&action=detail&id=<?= $item['id'] ?>" style="color: black; text-decoration: none;">
                    <img src="<?php echo _WEB_HOST_ROOT ?>/uploads/news/<?= $item['thumbnail'] ?>" width="100%" height="200px">
                    <h6 class="py-3"><?= $item['title'] ?></h6>
                </a>
            </div>
    <?php endforeach;
    endif ?>
</div>
</div>