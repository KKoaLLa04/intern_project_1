<div class="container-fluid">
    <a href="?module=groups&action=add"><button class="btn btn-success">Thêm nhóm người dùng mới <i class="fa fa-plus"></i></button></a>
    <hr>
    <h4 class="text-center">Danh sách nhóm người dùng</h4>
    <table class="table table-bordered border_color">
        <thead class="border_header">
            <tr>
                <th width="3%">STT</th>
                <th>Nhóm</th>
                <th>Thời gian tạo</th>
                <th width="10%">Phân quyền</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['groups'])) :
                foreach ($data['groups'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['create_at'] ?></td>
                        <td><a href="?module=groups&action=permission&id=<?php echo $item['id'] ?>"><button class="btn btn-primary">Phân quyền</button></a></td>
                        <td><a href="?module=groups&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <td><a href="?module=groups&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                    </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
</div>