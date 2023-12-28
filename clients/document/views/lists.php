<p class="py-1">Trang chủ > Tài liệu miễn phí</p>

<div class="document">
    <?php if (!empty($data['category'])) :
        foreach ($data['category'] as $key => $item) : ?>
            <div class="document__content">
                <h4 class="text-left reset"><?php echo $item['name'] ?></h4>
                <ul>
                    <?php if (!empty($data['document'])) :
                        foreach ($data['document'] as $count => $value) :
                            if ($value['document_id'] === $item['id']) : ?>
                                <li>
                                    <a href="http://localhost/project_one_sonline/?module=document&action=lists&file=<?php echo $value['answers'] ?>">
                                        <p><i class=" fa fa-file-alt"></i><?php echo $value['title'] ?></p>
                                    </a>
                                    <div>
                                        <span>297 lượt tải</span>
                                        <a href="#"><i class="fa fa-file-download"></i></a>
                                    </div>
                                </li>
                    <?php endif;
                        endforeach;
                    endif; ?>
                    <a href="#" class="check__all__a">
                        <p class="check__all__p">Xem tất cả >></p>
                    </a>
                </ul>
            </div>
    <?php endforeach;
    endif ?>
</div>