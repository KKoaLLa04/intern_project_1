<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=subject&action=lists"><button class="btn btn-warning">Quay lại</button></a>
    <hr>
    <h4>Thêm khóa học mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tiêu đề</label>
                    <input type="text" class="form-control" placeholder="Tiêu đề khóa học..." name="title"
                        value="<?php echo oldData('title', $old) ?>">
                    <p class="error"><?php echo errorData('title', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" class="form-control" placeholder="Giá khóa học..." name="price"
                        value="<?php echo oldData('price', $old) ?>">
                    <p class="error"><?php echo errorData('price', $errors) ?></p>
                </div>

            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Giảng viên</label>
                    <select name="teacher_id" class="form-control">
                        <option value="0">Chọn giảng viên</option>
                        <?php if (!empty($data['teacher'])) :
                            foreach ($data['teacher'] as $key => $item) : ?>
                        <option value="<?php echo $item['id'] ?>"
                            <?php echo (oldData('teacher_id', $old) == $item['id']) ? 'selected' : false ?>>
                            <?php echo $item['fullname'] ?></option>
                        <?php endforeach;
                        endif; ?>
                    </select>
                    <p class="error"><?php echo errorData('teacher_id', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="cate_id" class="form-control">
                        <option value="0">Chọn danh mục</option>
                        <?php if (!empty($data['course_category'])) :
                            foreach ($data['course_category'] as $key => $item) : ?>
                        <option value="<?php echo $item['id'] ?>"
                            <?php echo (oldData('cate_id', $old) == $item['id']) ? 'selected' : false ?>>
                            <?php echo $item['title'] ?>
                        </option>
                        <?php endforeach;
                        endif ?>
                    </select>
                    <p class="error"><?php echo errorData('cate_id', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Ảnh Khóa học</label>
                    <input type="file" class="form-control" placeholder="Ảnh đại diện khóa học...(update...)"
                        name="thumbnail">
                    <p></p>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">Mô tả khóa học</label>
                    <input type="text" class="form-control editor" name="description">
                    <p></p>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>