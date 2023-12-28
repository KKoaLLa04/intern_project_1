<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
getMsg($msg, $msg_type);
?>
<div class="banner">
    <div class="banner__main">
        <div class="mySlides exam__item">
            <a href="?module=course&action=lists"><img src="./uploads/home/banner/banner1.jpg" alt=""></a>
        </div>
        <div class="mySlides exam__item">
            <a href="?module=course&action=lists"><img src="./uploads/home/banner/banner2.jpg" alt=""></a>
        </div>
        <div class="mySlides exam__item">
            <a href="?module=course&action=lists"><img src="./uploads/home/banner/banner3.jpg" alt=""></a>
        </div>
        <!-- <div class="mySlides">
        <img src="./uploads/home/banner/banner4.jpg" alt="">
    </div> -->
        <div class="mySlides exam__item">
            <a href="?module=course&action=lists"><img src="./uploads/home/banner/banner5.jpg" alt=""></a>
        </div>
        <button class="custom-button prev" onclick="plusSlides(-1)"><i class="fa-solid fa-chevron-left fa-2xl" style="color: #000000;"></i></button>
        <button class="custom-button next" onclick="plusSlides(1)"><i class="fa-solid fa-chevron-right fa-2xl" style="color: #000000;"></i></button>
    </div>

    <div class="banner__item">
        <a href="?module=course&action=lists" class="exam__item"><img src="./uploads/home/minibanner/banner1.jpg" alt=""></a>
        <a href="?module=course&action=lists" class="exam__item"><img src="./uploads/home/minibanner/banner2.jpg" alt=""></a>
        <a href="?module=course&action=lists" class="exam__item"><img src="./uploads/home/minibanner/banner3.jpg" alt=""></a>
        <a href="?module=course&action=lists" class="exam__item"><img src="./uploads/home/minibanner/banner4.jpg" alt=""></a>
    </div>


    <div class="banner__ad exam__item">
        <a href="?module=course&action=lists"><img src="./uploads/home/banner/ads.png" alt=""></a>
    </div>

    <div class="step">
        <h4>QUY TRÌNH HỌC TRỰC TUYẾN</h4>
        <div class="step__button">
            <div class="button__item button__color1">
                <a href="?module=course&action=lists"><i class="fa fa-search"></i> Chọn Khóa Học</a>
            </div>

            <div class="button__item">
                <a href="?module=course&action=lists"><i class="fa fa-play"></i> Vào Học Ngay</a>
            </div>
        </div>

        <div class="step__content">
            <div class="step__item">
                <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/step1.png" alt="">
                <p><a href="">CHỌN KHÓA HỌC</a></p>
            </div>
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/arrow.png" alt="">
            <div class="step__item">
                <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/step2.png" alt="">
                <p><a href="">HỌC THỬ MIỄN PHÍ</a></p>
            </div>
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/arrow.png" alt="">
            <div class="step__item">
                <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/step3.png" alt="">
                <p><a href="">NỘP HỌC PHÍ</a></p>
            </div>
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/arrow.png" alt="">
            <div class="step__item">
                <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/step4.png" alt="">
                <p><a href="">BẮT ĐẦU HỌC</a></p>
            </div>
        </div>
    </div>

    <div class="exam__university">
        <h4>KHÓA HỌC NỔI BẬT</h4>
        <div class="exam__content">
            <?php if (!empty($data['course_category'])) : ?>
                <?php foreach ($data['course_category'] as $item) : ?>
                    <div class="exam__item">
                        <a href="#"><?php echo $item['title'] ?></a>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>

    <div class="exam__banner">
        <div class="exam__item grid__item">
            <a href="?module=course&action=lists"> <img src="./uploads/home/banner/bigbanner.jpg" alt=""></a>
        </div>

        <?php if (!empty($data['course_detail'])) :
            foreach ($data['course_detail'] as $item) : ?>
                <div class="exam__item">
                    <a href="?module=course&action=detail&course_id=<?= $item[0]['id'] ?>"> <img src="<?php echo _WEB_HOST_ROOT . '/uploads/course/' . $item[0]['thumbnail'] ?>" alt="" width="100%" height="165px">
                        <p><b><?php echo $item[0]['title'] ?></b></p>
                    </a>
                    <p class="d-flex justify-content-between py-0">Học phí: <b style="color: red;"><?php echo number_format($item[0]['price']) ?>
                            VNĐ</b>
                    </p>
                    <p class="d-flex justify-content-between py-0">Người đứng lớp: <b><?php echo $item[0]['fullname'] ?></b></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>


    <div class="book">
        <h4>SÁCH NỔI BẬT</h4>
        <div class="book__button">
            <?php if (!empty($data['book_category'])) : ?>
                <?php foreach ($data['book_category'] as $item) : ?>
                    <div class="book__button__item">
                        <a href="#"><?php echo $item['title'] ?></a>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>

    <div class="book__content">
        <?php if (!empty($data['book'])) : ?>
            <?php foreach ($data['book'] as $item) : ?>
                <div class="book__item slider">
                    <a href="?module=book&action=detail&id=<?= $item['id'] ?>" style="text-decoration: none; color: black;"><img src="<?php echo _WEB_HOST_ROOT . '/uploads/books/' . $item['thumbnail'] ?>" alt="" width="100%" height="285px">
                        <h5><b><?php echo $item['name'] ?></b></h5>
                    </a>
                    <div class="book__price">
                        <span>Giá bán: </span>
                        <b style="color: red;"><?php echo number_format($item['price']) ?>đ</b>
                    </div>
                    <div class="book__price">
                        <span>Tác giả: </span>
                        <b><?php echo $item['author'] ?></b>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>


    <h4 style="text-align: left;">ĐỀ THI MIỄN PHÍ</h4>

    <div class="ranking">
        <?php if (!empty($data['exam_category'])) :
            foreach ($data['exam_category'] as $key => $value) :
        ?>
                <div class="ranking__item">
                    <div class="alert alert-dark text-center"><?= $value['name'] ?></div>
                    <?php if (!empty($data['exam'][$key])) :
                        foreach ($data['exam'][$key] as $item) :
                    ?>
                            <div class="ranking__content">
                                <a href="?module=exam&action=detail&cate=<?= $value['id'] ?>&id=<?= $item['id'] ?>" style="text-decoration: none;">
                                    <p><?= $item['title'] ?></p>
                                </a>
                                <div class="ranking__award">
                                    <p>Trạng thái: <span style="color: #0673BA;">NEW</span></p>
                                </div>
                            </div>
                    <?php endforeach;
                    endif ?>
                </div>

        <?php endforeach;
        endif ?>
    </div>

    <div class="row pt-3">
        <h4 class="text-left">TIN TỨC NỔI BẬT</h4>
        <?php if (!empty($data['news'])) :
            foreach ($data['news'] as $key => $item) : ?>
                <div class="col-3 exam__item">
                    <a href="?module=news&action=detail&id=<?= $item['id'] ?>" style="color: black; text-decoration: none;">
                        <img src="<?php echo _WEB_HOST_ROOT ?>/uploads/news/<?= $item['thumbnail'] ?>" alt="" height="150px" width="100%">
                        <hr>
                        <b><?= $item['title'] ?></b>
                    </a>
                </div>
        <?php endforeach;
        endif ?>
    </div>
</div>