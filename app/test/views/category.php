<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <hr>
    <div class="row">
        <div class="col-6">
            <?php
            if (!empty($_GET['id'])) {
                require_once 'test/controller/edit_category.php';
            } else {
                require_once 'test/controller/add_category.php';
            }
            ?>
        </div>

        <div class="col-6">
            <h4>Danh sách danh mục</h4>
            <?php getMsg($msg, $msg_type) ?>
            <table class="table table-bordered border_color">
                <thead class="border_header">
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th width="7%">Sửa</th>
                        <th width="7%">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data['test_category'])) :
                        foreach ($data['test_category'] as $key => $item) : ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $item['name'] ?></td>
                                <td><a href="?module=test&action=category&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                                <td><a href="?module=test&action=delete_category&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                            </tr>
                    <?php endforeach;
                    endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>