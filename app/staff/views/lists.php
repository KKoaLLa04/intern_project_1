<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <a href="?module=staff&action=add"><button class="btn btn-success">Thêm cộng tác viên <i class="fa fa-plus"></i></button></a>
    <hr>
    <h4>Danh sách nhân viên của hệ thống</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered border_color">
        <thead class="border_header">
            <tr>
                <th width="3%">#</th>
                <th>Tên QTV</th>
                <th width="10%">Email</th>
                <th width="10%">Số điện thoại</th>
                <th width="20%">Quyền hạn</th>
                <th width="10%">Tình trạng</th>
                <th width="5%">Sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['staff'])) :
                foreach ($data['staff'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['fullname'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td class="text-center">
                            <?php if ($item['group_id'] == 1) {
                                echo '<button class="btn btn-danger">' . $item['name'] . '</button>';
                            } else if ($item['group_id'] == 2) {
                                echo '<button class="btn btn-warning">' . $item['name'] . '</button>';
                            } else if ($item['group_id'] == 4) {
                                echo '<button class="btn btn-info">' . $item['name'] . '</button>';
                            } else if ($item['group_id'] == 5) {
                                echo '<button class="btn btn-info">Cộng tác viên bán hàng</button>';
                            } else {
                                echo '<button class="btn btn-dark">Chưa phân quyền</button>';
                            }  ?>
                        </td>
                        <td class="text-center">
                            <?php echo ($item['status'] == 1) ? '<button class="btn btn-success">Kích hoạt</button>' : '<button class="btn btn-danger">Khóa</button>' ?>
                            <br>
                            <?php echo ($item['status'] == 1) ? '<a href="?module=staff&action=status&status=0&id=' . $item['id'] . '">Khóa</a>' : '<a href="?module=staff&action=status&status=1&id=' . $item['id'] . '")>Kích hoạt</a>'  ?>
                        </td>
                        <td><a href="?module=staff&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                    </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>