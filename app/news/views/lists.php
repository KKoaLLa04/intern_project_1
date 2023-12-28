<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
if (!empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
$limit=55;
?>
<div class="container-fluid">
    <a href="?module=news&action=add"><button class="btn btn-success">Thêm tin tức tin tức mới <i
                class="fa fa-plus"></i></button></a>
    <p></p>
    <h4 class="text-center">Danh mục tin tức</h4>
    <hr>
    <form action="" method="get" >
        <input type="hidden" name="module" value="news">
        <input type="hidden" name="action" value="lists">
        <div class="row">
            <div class="col-10">
                <input type="text" placeholder="Nhập từ khóa tìm kiếm..." name="keyword" class="form-control"
                    value="<?= !empty($keyword) ? $keyword : false ?>">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary w-100">Tìm kiếm</button>
            </div>
        </div>
    </form>
    <hr>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered border_color">
        <thead class="border_header">
            <tr>
                <th>STT</th>
                <th>thumbnail</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>
 
        <?php
            $uploadDir = '../uploads/news/'; 
            if(!empty($data['news'])):
                foreach($data['news'] as $key => $item): ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td>
                            <?php
                            if (is_file($uploadDir . $item['thumbnail'])) {
                                echo "<img src='" . $uploadDir . $item['thumbnail'] . "' height='80' width='80' >";
                            } else {
                                echo "Không có ảnh";
                            }
                            ?>
                        </td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo substr($item['content'],0,$limit) ?></td>
                <td><a href="?module=news&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                <td><a href="?module=news&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                </tr>
            <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>