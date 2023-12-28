<p class="py-3">Trang chủ > kết quả</p>

<div class="background_white text-center">
    <div class="row">
        <div class="col-6">
            <?php if (!empty($data['result'])) :
                $item = $data['result'];
            ?>
            <h4>Kết quả bài thi của bạn:</h4>
            <h4>Học viên: <?php echo $item['student_name'] ?></h4>
            <p>Bài thi - <?php echo $item['test_title'] ?></p>
            <p>Kết quả phản ánh học lực của bạn</p>
            <p>Bài thi thuộc phát triển SONLINE</p>
            <h1>Kết quả: <b style="color: red;"><?php echo number_format($item['score'], 2) ?>/10 đ</b></h1>
            <?php endif; ?>
        </div>

        <div class="col-6">
            <img src="<?php echo _WEB_HOST_ROOT ?>/uploads/result.jpg" alt="" width="100%">
        </div>
    </div>
</div>