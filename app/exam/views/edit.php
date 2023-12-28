<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
$examDetail = getFlashData('exam_detail');
if (empty($old) && !empty($examDetail)) {
    $old = $examDetail;
}
?>
<div class="container-fluid">
    <a href="?module=exam&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Cập nhật đề thi - <b><?php echo $examDetail['title'] ?></b></h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tiêu đề đề thi</label>
                    <input type="text" class="form-control" placeholder="Tiêu đề đề thi...." name="title" value="<?php echo oldData('title', $old) ?>">
                    <p class="error"><?php echo errorData('title', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="exam_id" class="form-control">
                        <option value="0">---Danh mục đề thi---</option>
                        <?php if (!empty($data['exam_category'])) :
                            foreach ($data['exam_category'] as $key => $item) : ?>
                                <option value="<?php echo $item['id'] ?>" <?php echo (oldData('exam_id', $old) == $item['id']) ? 'selected' : false ?>>
                                    <?php echo $item['name'] ?></option>
                        <?php endforeach;
                        endif ?>
                    </select>
                    <p class="error"><?php echo errorData('exam_id', $errors) ?></p>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <textarea name="description" class="form-control" placeholder="Mô tả ngắn..." rows="2"><?php echo oldData('description', $old) ?></textarea>
                    <p class="error"></p>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea name="content" class="form-control editor" placeholder="Nội dung..."><?php echo oldData('content', $old) ?></textarea>
                    <p class="error"><?php echo errorData('content', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Ảnh đề thi (Không chọn nếu không thay đổi)</label>
                    <input type="file" class="form-control" name="images">
                    <p class="error"><?php echo errorData('images', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <label for="">Ảnh demo</label>
                <img src="<?php echo _WEB_HOST_ROOT ?>/uploads/<?php echo $examDetail['images'] ?>" alt="" width="100%">
            </div>
        </div>

        <button class="btn btn-primary">Cập nhật</button>
    </form>
</div>