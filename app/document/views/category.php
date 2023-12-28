<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <?php
            if (!empty($_GET['id'])) {
                require_once './document/controller/edit_category.php';
            } else {
                require_once './document/controller/add_category.php';
            }
            ?>
        </div>
        <div class="col-6">
            <h4>Danh sách danh mục tài liệu</h4>
            <a href="?module=document&action=category"><button class="btn btn-info">Thêm mới <i
                        class="fa fa-plus"></i></button></a>
            <hr>
            <?php getMsg($msg, $msg_type) ?>
            <form action="" method="get">
                <div class="row">
                    <div class="col-4">
                        <select name="" class="form-control">
                            <option value="0">---Chọn người đăng---</option>
                        </select>
                    </div>

                    <div class="col-6">
                        <input type="text" placeholder="từ khóa tìm kiếm..." name="keyword" class="form-control">
                    </div>

                    <div class="col-2">
                        <button class="btn btn-primary w-100">Tìm kiếm</button>
                    </div>
                </div>
            </form>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-info" style="color: white;">
                        <th width="3%">STT</th>
                        <th>Tiêu đề</th>
                        <th>Tạo bởi</th>
                        <th width="5%">Sửa</th>
                        <th width="5%">Xóa</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($data['category'])) :
                        foreach ($data['category'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td>update...</td>
                        <td><a href="?module=document&action=category&id=<?php echo $item['id'] ?>"><button
                                    class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <td><a href="?module=document&action=delete_category&id=<?php echo $item['id'] ?>"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                        class="fa fa-trash"></i></button></a></td>
                    </tr>
                    <?php endforeach;
                    endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>