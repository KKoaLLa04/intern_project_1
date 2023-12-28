<?php
$msg = getFlashData('msg');
$msg_type = getFlashData("msg_type");
$errors = getFlashData('errors');
$old = getFlashData('old');
if (empty($old) && !empty($data['book_detail'])) {
    $old = $data['book_detail'];
}
?>
<div class="container-fluid">
    <a href="?module=book&action=lists"><button class="btn btn-warning">Quay lai</button></a>
    <hr>
    <h4>Cập nhật đầu sách: <?php echo !empty($old['name']) ? $old['name'] : false ?></h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên sách</label>
                    <input type="text" class="form-control" placeholder="Tên sách..." name="name" value="<?php echo oldData('name', $old) ?>">
                    <p class="error"><?php echo errorData('name', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea class="form-control" rows="5" placeholder="Mô tả..." name="description"><?php echo oldData('description', $old) ?></textarea>
                    <p class="error"><?php echo errorData('description', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Danh mục sách</label>
                    <select class="form-control" name="book_id">
                        <option value="0">Chọn danh mục sách </option>
                        <?php if (!empty($data['book_category'])) :
                            foreach ($data['book_category'] as $item) : ?>
                                <option value="<?php echo $item['id'] ?>" <?php echo (oldData('book_id', $old) == $item['id']) ? 'selected' : false ?>>
                                    <?php echo $item['title'] ?></option>
                        <?php endforeach;
                        endif; ?>
                    </select>
                    <p class="error"><?php echo errorData('book_id', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Tác giả</label>
                    <input type="text" class="form-control" placeholder="Tên tác giả..." name="author" value="<?php echo oldData('author', $old) ?>">
                    <p class="error"><?php echo errorData('author', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" class="form-control" name="price" placeholder="Giá sách..." value="<?php echo oldData('price', $old) ?>">
                    <p class="error"><?php echo errorData('price', $errors) ?></p>
                </div>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="text" class="form-control" placeholder="Số lượng..." name="quantity" value="<?php echo oldData('quantity', $old) ?>">
                    <p class="error"><?php echo errorData('quantity', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Tình trạng</label>
                    <select class="form-control" name="status">
                        <option value="0" <?php echo (!empty($old['status']) && $old['status'] == 0) ? 'selected' : 'false' ?>>Hết
                            hàng
                        </option>
                        <option value="1" <?php echo (!empty($old['status']) && $old['status'] == 1) ? 'selected' : 'false' ?>>Còn
                            hàng
                        </option>
                    </select>
                    <p class="error"><?php echo errorData('status', $errors) ?></p>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea class="form-control editor" rows="5" placeholder="Nội dung..." name="content"><?php echo oldData('content', $old) ?></textarea>
                    <p class="error"><?php echo errorData('content', $errors) ?></p>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Ảnh Minh Họa</label>
                            <input type="file" class="form-control" name="thumbnail">
                            <p class="error"><?php echo errorData('thumbnail', $errors) ?></p>
                        </div>
                    </div>

                    <div class="col-6">
                        <?php
                        $oldThumbnail = $data['book_detail']['thumbnail'];
                        if (!empty($oldThumbnail)) { // Kiểm tra xem có đường dẫn cũ không
                            $uploadDir = '../uploads/books/'; // Đường dẫn ảnh
                            $oldThumbnailPath = $uploadDir . $oldThumbnail; //Đường dẫn đến ảnh cũ
                            if (is_file($oldThumbnailPath)) { // Kiểm tra đường dẫn cũ
                                echo "<img src='" . $oldThumbnailPath . "' width='100%' >";
                            } else {
                                echo "Không có ảnh";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo !empty($data['id']) ? $data['id'] : 1 ?>">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>