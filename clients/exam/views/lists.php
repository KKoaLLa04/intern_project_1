<p class="py-1">Trang chủ > Đề thi miễn phí</p>


<?php if (!empty($data['exam_category'])) :
    foreach ($data['exam_category'] as $key => $value) : ?>
        <div class="title__text reset">
            <h4 class="text-left reset"><?php echo $value['name'] ?></h4>
            <a href="#"><button class="title__button">Xem tất cả >></button></a>
        </div>

        <div class="online py-4">
            <?php if (!empty($data['exam'])) :
                foreach ($data['exam'] as $count => $exam) :
                    if ($value['id'] === $exam['exam_id']) : ?>
                        <div class="online__content exam__item p-0">
                            <a href="?module=exam&action=detail&cate=<?php echo $exam['exam_id'] ?>&id=<?php echo $exam['id'] ?>"><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/dethi.jpg" alt="" class="p-0"></a>
                            <div class="course__padding">
                                <p><b><?php echo $exam['title'] ?></b></p>
                                <p>Trạng thái: <span style="color: #0673BA;">NEW</span></p>
                            </div>
                        </div>
            <?php endif;
                endforeach;

            endif; ?>
        </div>
<?php endforeach;
endif ?>