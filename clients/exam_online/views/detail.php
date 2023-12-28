<?php
$item = $data['test_detail'];

// kiểm tra đã làm bài thi chưa
$checkToDoExam = $data['check_exam_todo'];
// count question
$questionJson = $item['question'];
$questionArr = json_decode($questionJson, true);
$countQuestion = count($questionArr);

$id = $data['id'];
?>
<p class="py-3">Trang chủ > thi online</p>

<h3 class="text-center pb-3">Bài thi: <?= $item['title'] ?></h3>
<div class="test">
    <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/photo1.png" alt="" width="100%" style="border-radius: 20px;">
    <div class="background_white">
        <h5>Đề thi: <?= $item['title'] ?></h5>
        <ul>
            <li>Trạng thái:
                <b><?= (!empty($checkToDoExam)) ? '<button class="btn btn-success btn-sm">Đã làm</button>' : '<button class="btn btn-danger btn-sm">Chưa Làm</button>' ?></b>
            </li>
            <li>Số câu hỏi: <?= $countQuestion ?></li>
            <li>Thời gian làm bài: không giới hạn</li>
            <li>Giá bán: Miễn Phí</li>
            <li>Thời gian bắt đầu: mọi lúc</li>
        </ul>
    </div>
    <div class="background_white">
        <p>Bài thi miễn phí, bạn chỉ có thể làm 1 lần duy nhất, mọi bài thi đều được phát triển bởi hệ thống SONLINE,
            vui
            lòng không sao chép dưới mọi hình thức!</p>
        <?php if (!isLoginStudent()) : ?>
            <a href="?module=member&action=login"><button class="btn btn-danger w-100">Đăng
                    nhập để làm bài thi</button></a>
            <?php
        else :
            if (!empty($checkToDoExam)) :
            ?>
                <a href="#"><button class="btn btn-success w-100">Đã làm bài thi</button></a>
            <?php
            else :
            ?>
                <a href="?module=exam_online&action=start&id=<?= $id ?>"><button class="btn btn-primary w-100">Làm bài thi
                        ngay</button></a>
        <?php
            endif;
        endif ?>
    </div>
</div>

<hr>
<h3 class="pt-3 py-2">Bài thi khác</h3>
<div class="test_contain">
    <?php if (!empty($data['exam_online'])) :
        foreach ($data['exam_online'] as $key => $item) : ?>
            <div class="test__item background_white exam__item">
                <a href="?module=exam_online&action=detail&test_id=<?= $item['id'] ?>" style="color: black; text-decoration: none;"><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/photo1.png" alt="" width="100%" style="border-radius: 20px;">
                    <h5 class="pt-4"><?= $item['title'] ?></h5>
                </a>
                <p class="d-flex justify-content-between m-0">Danh mục: <b><?= $item['name'] ?></b></p>
                <p class="d-flex justify-content-between m-0">Trạng thái: <b>Mở</b></p>
                <p class="d-flex justify-content-between">Giá bán: <b>Miễn phí</b></p>
            </div>
    <?php endforeach;
    endif ?>
</div>