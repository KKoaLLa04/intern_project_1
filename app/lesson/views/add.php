<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=lesson&action=lists"><button class="btn btn-warning btn-sm">Quay lai</button></a>
    <hr>
    <h4>Thêm bài học mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <label for="">Tiêu đề bài học</label>
                <input type="text" class="form-control" placeholder="Tiêu đề bài học..." name="title"
                    value="<?php echo oldData('title', $old) ?>">
                <p class="error"><?php echo errorData('title', $errors) ?></p>
            </div>
            <div class="col-6">
                <label for="">Chương học</label>
                <select name="module_id" class="form-control">
                    <option value="0">Chọn chương học của bài giảng</option>
                    <?php if (!empty($data['module'])) :
                        foreach ($data['module'] as $key => $item) :
                    ?>
                    <option value="<?php echo $item['id'] ?>"
                        <?php echo (oldData('module_id', $old) == $item['id']) ? 'selected' : false ?>>
                        <?php echo $item['title'] ?></option>
                    <?php endforeach;
                    endif; ?>
                </select>
                <p class="error"><?php echo errorData('module_id', $errors) ?></p>
            </div>
            <div class="col-12">
                <label for="">Link video</label>
                <input type="text" id="video_url" class="form-control" placeholder="Đường dẫn video (embed)...."
                    name="video_url" value="<?php echo oldData('video_url', $old) ?>">
                <p class="error"><?php echo errorData('video_url', $errors) ?></p>
            </div>

            <div class="col-12 iframe">
                <div id="watch_video" class="text-center"></div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>