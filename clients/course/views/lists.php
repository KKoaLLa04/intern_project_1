<p class="py-3">Trang chủ > Khóa học</p>
<div>
    <?php
    if (!empty($data['course_category'])) :
        foreach ($data['course_category'] as $key => $value) :
    ?>
    <div class="title__text">
        <h4 class="text-left reset"><?php echo $value['title'] ?></h4>
        <a href="?module=course&action=all_cate&cate_id=<?= $value['id'] ?>"><button class="title__button">Xem tất cả
                >></button></a>
    </div>

    <div class="course">
        <?php
                    if (!empty($data['course_detail'][$key])) :
                        foreach ($data['course_detail'][$key] as $item) : ?>
        <div class="course__content exam__item p-0">
            <a href="?module=course&action=detail&course_id=<?php echo $item['id'] ?>"><img
                    src="<?php echo _WEB_HOST_ROOT . '/uploads/course/' . $item['thumbnail'] ?>" alt=""
                    width="100%"></a>
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
                                        else:
                                            ?>
                    <button class="btn btn-danger btn-sm">Chưa mua</button>
                    <?php
                                        endif ?>
                </a>
                <p><b><?php echo $value['title'] ?></b></p>
                <div class="course__item">
                    <p>Học phí:</p>
                    <b class="course__price"><?php echo number_format($item['price']) ?> VNĐ</b>
                </div>
                <h6 class="d-flex justify-content-between">Người Đứng Lớp: <b><?php echo $item['fullname'] ?></b></h6>
            </div>
        </div>
        <?php endforeach;
                    else : ?>
        <p>Chưa có khóa học nào của danh mục này</p>
        <?php
                    endif;
                ?>
    </div>
    <?php endforeach;
    endif;
        ?>
</div>