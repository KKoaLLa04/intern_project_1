<p class="pt-3">Trang chủ > lịch sử thi</p>

<h4>Lịch sử thi của bạn</h4>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th width="3%">#</th>
            <th>Tên học viên</th>
            <th>Bài thi</th>
            <th>Điểm</th>
            <th>Thời gian nộp bài</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($data['all_result'])) :
            foreach ($data['all_result'] as $key => $item) : ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $item['student_name'] ?></td>
            <td><a href="?module=exam_online&action=detail&test_id=<?= $item['test_id'] ?>"
                    style="text-decoration: none;"><?= $item['test_title'] ?></a></td>
            <td><?= $item['score'] ?></td>
            <td><?= $item['create_at'] ?></td>
        </tr>
        <?php endforeach;
        endif; ?>
    </tbody>
</table>