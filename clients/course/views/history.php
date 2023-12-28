<p class="py-1">Trang chủ > khóa học đã mua</p>

<div>
    <div class="course">
        <?php if (!empty($data['course_info'])) :
            foreach ($data['course_info'] as $item) : ?>
                <div class="course__content">
                    <a href="?module=course&action=detail&course_id=<?php echo $item['course_id'] ?>"><img src="<?php echo _WEB_HOST_ROOT . '/uploads/course/' . $item['thumbnail'] ?>" alt="" width="100%"></a>
                    <div class="course__padding">
                        <a href="?module=course&action=detail&course_id=<?php echo $item['id'] ?>">
                            <p><b><?php echo $item['title'] ?></b></p>
                            <button class="btn btn-success btn-sm">Đã Mua</button>
                        </a>
                        <div class=" course__item">
                            <p>Học phí:</p>
                            <b class="course__price"><?php echo number_format($item['price']) ?> VNĐ</b>
                        </div>
                        <h6 class="d-flex justify-content-between">Người Đứng Lớp: <b><?php echo $item['fullname'] ?></b></h6>
                    </div>
                </div>
            <?php endforeach;
        else : ?>
            <p>Bạn chưa đăng ký khóa học nào</p>
        <?php
        endif; ?>
    </div>
</div>