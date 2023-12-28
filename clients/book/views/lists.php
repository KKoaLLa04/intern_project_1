<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<p class="py-1">Trang chủ > Sách</p>
<?php getMsg($msg, $msg_type) ?>
<?php if (!empty($data['book_category'])) :
    foreach ($data['book_category'] as $key => $item) : ?>
        <hr>
        <div class="title__text reset my-4">
            <h4 class="text-left reset"><?php echo $item['title'] ?></h4>
            <a href="#"><button class="title__button">Xem tất cả >></button></a>
        </div>
        <div class="textbook">
            <?php if (!empty($data['book'])) :
                foreach ($data['book'] as $count => $value) :
            ?>
                    <?php
                    if ($value['book_id'] == $item['id']) : ?>
                        <div class="textbook__content exam__item p-0">
                            <a href="?module=book&action=detail&id=<?= $value['id'] ?>"><img class="pt-0" src="<?php echo _WEB_HOST_ROOT . '/uploads/books/' . $value['thumbnail'] ?>" alt="" width="100%"></a>
                            <div class="add-to-cart text-center"><a href="?module=book&action=add_outer&book_id=<?= $value['id'] ?>">Thêm
                                    vào giỏ
                                    hàng <i class="fa fa-cart-arrow-down"></i></a>
                            </div>
                            <div class="course__padding">
                                <a href="?module=book&action=detail&id=<?= $value['id'] ?>">
                                    <p><b><?php echo $value['name'] ?></b></p>
                                </a>
                                <div class="textbook__item p-0">
                                    <p>Giá bán:</p>
                                    <b><?php echo number_format($value['price']) ?> đ</b>
                                </div>
                                <div class="textbook__item p-0">
                                    <p>Số lượng:</p>
                                    <b><?php echo number_format($value['quantity']) ?></b>
                                </div>
                                <div class="textbook__item p-0">
                                    <p>Tình trạng:</p>
                                    <b><?php echo ($value['quantity'] > 0) ? '<button class="btn btn-success btn-sm">Còn Hàng</button>' : '<button class="btn btn-danger btn-sm">Hết Hàng</button>' ?></b>
                                </div>
                            </div>
                        </div>
                    <?php endif;
                    ?>
            <?php
                endforeach;
            endif ?>
        </div>
<?php endforeach;
endif;
