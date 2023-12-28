<div class="container-fluid">
    <h4 class="text-center">Kiểm duyệt video đăng tải</h4>
    <hr>
    <table class="table table-bordered border_color">
        <thead class="border_header">
            <tr>
                <th>#</th>
                <th>Tiêu đề</th>
                <th width="30%">Video</th>
                <th width="10%">Chương học</th>
                <th>Khóa học</th>
                <th>Người đăng</th>
                <th>Ngày đăng</th>
                <th width="10%">Trạng thái</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['lesson'])) :
                foreach ($data['lesson'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['title'] ?></td>
                <td>
                    <?php echo html_entity_decode($item['video_url']) ?>
                </td>
                <td><?php echo $item['module_title'] ?></td>
                <td><?php echo $item['course_title'] ?></td>
                <td><?php echo $item['fullname'] . ' - ' . $item['email'] ?></td>
                <td><?php echo $item['create_at'] ?></td>
                <td class="text-center">
                    <button class="btn btn-warning">Chưa duyệt</button> <br>
                    <a href="?module=check_course&action=status&id=<?= $item['id'] ?>">Duyệt</a>
                </td>
                <td><a href="?module=check_course&action=delete&id=<?= $item['id'] ?>"
                        onclick="return confirm('Ban co chac chan muon xoa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
            </tr>
            <?php endforeach;
            else :
                ?>
            <td colspan="9">
                <div class="alert alert-warning text-center">Hiện không có video nào cần kiểm duyệt</div>
            </td>
            <?php
            endif ?>
        </tbody>
    </table>
</div>