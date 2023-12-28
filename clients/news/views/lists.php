<p class="py-1">Trang chủ > tin tức</p>

<h4 style="font-size: 26px;" class="pb-4">TIN TỨC</h4>

<div class="news__category pb-5">
    <ul>
        <?php if (!empty($data['news_category'])) :
    foreach ($data['news_category'] as $key => $item) : ?>
        <li><a href="#" class="active__category"><?php echo $item['title']?></a></li>
        <!-- <li><a href="#" class="active__category">Sách khóa học</a></li>
        <li><a href="#">Hỗ trợ từ xa</a></li>
        <li><a href="#">Tin tức trong ngày</a></li> -->
        <?php endforeach;
        endif?>
    </ul>
</div>

<div class="news__text">
    <?php if (!empty($data['news'])) :
                foreach ($data['news'] as $count => $value) :
            ?>
    <div class="news__block exam__item">
        <a href="?module=news&action=detail&id=<?=$value['id']?>"><img
                src="<?php echo _WEB_HOST_ROOT . '/uploads/news/' . $value['thumbnail'] ?>" alt="" width="100%"></a>
        <a href="?module=news&action=detail&id=<?= $value['id'] ?>">
            <p><b><?php echo $value['title'] ?></b></p>
        </a>
        <p>29/07/2023</p>
    </div>
    <?php endforeach;
        endif?>
</div>