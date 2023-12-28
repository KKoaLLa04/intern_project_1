<?php
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<div class="container-fluid">
    <h4 class="text-center">Quản lý hóa đơn khóa học</h4>
    <a href="?module=bill&action=lists"><button class="btn btn-primary">Hóa đơn bán sách</button></a>
    <hr>
    <form method="get">
        <input type="hidden" name="module" value="bill">
        <input type="hidden" name="action" value="course_bill">
        <div class="row">
            <div class="col-10">
                <input type="text" placeholder="Nhập từ khóa tìm kiếm..." name="keyword" class="form-control" value="<?= !empty($keyword) ? $keyword : false ?>">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary w-100">Tìm kiếm</button>
            </div>
        </div>
    </form>
    <hr>
    <table class="table table-bordered table_border border_color">
        <thead class="border_header">
            <tr>
                <th width="3%">#</th>
                <th width="15%">Ảnh minh họa</th>
                <th>Mã khóa học</th>
                <th>Tên Học viên</th>
                <th>Email</th>
                <th>Khóa học</th>
                <th>Giá</th>
                <th>Thời gian mua</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['bill_course'])) :
                foreach ($data['bill_course'] as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><img src="<?= _WEB_HOST_ROOT . '/uploads/course/' . $item['thumbnail'] ?>" width="100%"></td>
                        <td><?= $item['code'] ?></td>
                        <td><?= $item['fullname'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['title'] ?></td>
                        <td><?= number_format($item['price']) ?>VNĐ</td>
                        <td><?= $item['create_at'] ?></td>
                    </tr>
                <?php endforeach;
            else :
                ?>
                <td colspan="8">
                    <div class="alert alert-warning">
                        <h4 class="text-center">Thông tin bạn tìm kiếm không có dữ liệu</h4>
                    </div>
                </td>
            <?php
            endif ?>
        </tbody>
    </table>
</div>