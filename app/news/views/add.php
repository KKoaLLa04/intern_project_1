<?php
$msg = getFlashData('msg');
$msg_type = getFlashData("msg_type");
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=news&action=lists"><button class="btn btn-secondary">Quay lai</button></a>
    <hr>
    <h4>Thêm tin tức mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tiêu đề tin tức</label>
                    <input type="text" class="form-control" placeholder="Tên tin tức" name="title"
                        value="<?php echo oldData('title', $old) ?>">
                    <p class="error"><?php echo errorData('title', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Ảnh Minh Họa</label>
                    <input type="file" class="form-control" name="thumbnail">
                    <p class="error"><?php echo errorData('thumbnail', $errors) ?></p>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea class="form-control editor" rows="5" placeholder="Nội dung"
                name="content"><?php echo oldData('content', $old) ?></textarea>
            <p class="error"><?php echo errorData('content', $errors) ?></p>
        </div>

        <div class="form-group">
            <label for="">Danh mục tin tức</label>
            <select class="form-control" name="news_id">
                <option value="0">Chọn danh mục tin tức </option>
                <?php if(!empty($data['news_category'])):
                            foreach($data['news_category'] as $item): ?>
                <option value="<?php echo $item['id'] ?>"><?php echo $item['title'] ?></option>
                <?php endforeach; endif; ?>
            </select>
            <p class="error"><?php echo errorData('news_id', $errors) ?></p>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>