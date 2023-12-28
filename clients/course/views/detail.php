<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$price = $data['price'];
$id = $price['id'];
$courseInfo = $data['course_info'];
// Xử lý lấy tên video
if (isset($_GET['key']) && isset($_GET['key_lesson'])) {
    $key = $_GET['key'];
    $key_lesson = $_GET['key_lesson'];
    $title = $data['course_detail'][$key][$key_lesson]['title'];
    $video_url = $data['course_detail'][$key][$key_lesson]['video_url'];
    $menu_open = $data['module'][$key];
}
?>
<p class="py-3">Trang chủ > Khóa học > <?= !empty($courseInfo['title']) ? $courseInfo['title'] : 'Lập trình' ?></p>
<?php getMsg($msg, $msg_type) ?>
<div class="row">
    <div class="col-8">
        <?php echo !empty($data['video_url']) ? $data['video_url'] : '<iframe width="560" height="315" src="https://www.youtube.com/embed/3IKOCn0Zzwc?si=llbOhjHgMSBHAoRq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>' ?>
        <hr>
        <div class="">
            <?php echo (!empty($title)) ? '<h5>Bài học: ' . $title . '</h5>' : false ?>
        </div>
        <hr>
        <b>Người Đứng Lớp: <?php echo $courseInfo['fullname'] ?></b>
        <p></p>
        <b>Facebook: <a href="#">Bấm vào đây</a></b>

        <h3 class="mt-5">Nội dung khóa học</h3>

        <?php if (!empty($data['module'])) :
            foreach ($data['module'] as $key => $value) : ?>

        <div class="module">
            <div class="alert alert-danger menu-module">
                <h6>Chương <?php echo $key + 1 ?>: <?php echo $value['title'] ?></h6>
            </div>

            <div
                class="<?php echo (!empty($menu_open) && $menu_open['title'] == $value['title']) ? 'menu-open' : 'menu-close' ?>">
                <?php if (!empty($data['course_detail'][$key])) :
                            foreach ($data['course_detail'][$key] as $key_lesson => $item) :
                                // Kiểm tra khóa học đã duyệt hay chưa
                                if ($item['status'] == 0) {
                                    continue;
                                }
                                if (!isLoginStudent()) {
                        ?>
                <p><a class="dropdown-item"
                        href="?module=course&action=notification&course_id=<?php echo !empty($data['course_id']) ? $data['course_id'] : false ?>"><?php echo $item['title'] ?></a>
                </p>
                <?php
                                } else if (empty($data['permission']) && empty($data['permission']['code'])) {
                                    if ($item['share_lesson'] == 1) {
                                    ?>
                <p><a class="dropdown-item <?= ($video_url == $item['video_url']) ? 'active_course' : false ?>"
                        href="?module=course&action=detail&course_id=<?php echo !empty($data['course_id']) ? $data['course_id'] : false ?>&video_url=<?= $item['video_url'] ?>&key=<?= $key ?>&key_lesson=<?= $key_lesson ?>"><?php echo $item['title'] ?>
                        <button class="btn btn-primary btn-sm mx-4">Học thử</button></a>
                </p>
                <?php
                                    } else {
                                    ?>
                <p><a class="dropdown-item"
                        href="?module=course&action=notification&course_id=<?php echo !empty($data['course_id']) ? $data['course_id'] : false ?>&permission=false"><?php echo $item['title'] ?></a>
                </p>
                <?php
                                    }
                                } else {
                                    ?>
                <p><a class="dropdown-item <?= ($video_url == $item['video_url']) ? 'active_course' : false ?>"
                        href="?module=course&action=detail&course_id=<?php echo !empty($data['course_id']) ? $data['course_id'] : false ?>&video_url=<?php echo $item['video_url'] ?>&key=<?= $key ?>&key_lesson=<?= $key_lesson ?>"><?php echo $item['title'] ?></a>
                </p>
                <?php
                                }
                                ?>

                <?php endforeach;
                        endif; ?>
            </div>
        </div>

        <?php endforeach;
        endif; ?>
    </div>

    <div class="col-4">
        <h5><?= !empty($courseInfo['title']) ? $courseInfo['title'] : 'Lập trình' ?></h5>

        <div class="course__item">
            <p>Giá:</p>
            <h2 style="color: red;"><?php echo !empty($price) ? number_format($price['price']) . ' VNĐ' : 'Miễn phí' ?>
            </h2>
        </div>
        <hr>
        <!-- thanh toan khoa hoc -->
        <?php if (isLoginStudent()) {
            if (!empty($data['permission'] && !empty($data['permission']['code']))) {
        ?>
        <a href="#"><button class="btn btn-success form-control py-3">Bạn đã mua khóa học</button></a>
        <?php
            } else {
            ?>
        <a href="?module=course&action=buy_course&id=<?= $id ?>"><button class="btn btn-primary form-control py-3">Mua
                khóa học
                ngay</button></a>
        <?php
            }
            ?>
        <?php
        } else {
        ?>
        <a href="?module=member&action=login"><button class="btn btn-danger form-control py-3">Đăng nhập để mua
                khóa học</button></a>
        <?php
        } ?>
        <!-- Thanh toan khoa -->
        <div class="course__description py-3">
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/chap.svg" alt="">Chương:
                <?php echo (!empty($data['information'])) ? $data['information']['count_module'] : 1 ?> Chương</p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/clock.svg" alt="">Giáo trình: video bài giảng + tài
                liệu đi kèm
            </p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/play.svg" alt="">Thời lượng: nhiều giờ học</p>
            <!-- <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/khaigiang.svg" alt="">Ngày khai giảng: 01/01/2020 -->
            </p>
            <!-- <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/hsd.svg" alt="">Hạn sử dụng: 10/07/2030</p> -->
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/chap.svg" alt="">Thời lượng: nhiều giờ học</p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/clock.svg" alt="">Hệ thống bài giảng độc quyền của
                SONLINE</p>
        </div>
    </div>
</div>