<p class="py-3">Trang chủ > Khóa học</p>

<div class="course">
    <?php
    if (!empty($data['course_filter'])) :
        foreach ($data['course_filter'] as $item) : ?>
            <div class="course__content exam__item p-0">
                <a href="?module=course&action=detail&course_id=<?php echo $item['id'] ?>"><img src="<?php echo _WEB_HOST_ROOT . '/uploads/course/' . $item['thumbnail'] ?>" alt="" width="100%"></a>
                <div class="course__padding">
                    <a href="?module=course&action=detail&course_id=<?php echo $item['id'] ?>">
                        <p><b><?php echo $item['title'] ?></b>
                        </p>
                        <?php if (isLoginStudent()) :
                            if (checkBuyCourse($item['id'])) :
                        ?>
                                <button class="btn btn-success btn-sm">Đã mua</button>
                            <?php
                            else :
                            ?>
                                <button class="btn btn-danger btn-sm">Chưa mua</button>
                        <?php
                            endif;
                        endif ?>
                    </a>
                    <div class="course__item">
                        <p>Học phí:</p>
                        <b class="course__price"><?php echo number_format($item['price']) ?> VNĐ</b>
                    </div>
                    <h6 class="d-flex justify-content-between">Người Đứng Lớp: <b><?php echo $item['fullname'] ?></b></h6>
                </div>
            </div>
    <?php endforeach;
    endif;
    ?>
</div>

<?php if (empty($data['course_filter'])) : ?>
    <div class="alert alert-warning">
        <h4 class="text-center">Khóa Học bạn tìm kiếm hiện hệ thống không có</h4>
    </div>
<?php endif ?>