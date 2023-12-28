<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=document&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Thêm tài liệu mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tiêu đề tài liệu</label>
                    <input type="text" class="form-control" placeholder="Tiêu đề tài liệu..." name="title"
                        value="<?php echo oldData('title', $old) ?>">
                    <p class="error"><?php echo errorData('title', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Chọn danh mục</label>
                    <select name="document_id" class="form-control">
                        <option value="0">---Chọn danh mục---</option>
                        <?php if (!empty($data['doc_cate'])) :
                            foreach ($data['doc_cate'] as $key => $item) : ?>
                        <option value="<?php echo $item['id'] ?>"
                            <?php echo (oldData('document_id',$old)==$item['id'])?'selected':false ?>>
                            <?php echo $item['name']?></option>
                        <?php endforeach;
                        endif; ?>
                    </select>
                    <p class="error"><?php echo errorData('document_id', $errors) ?></p>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">File đáp án (vui lòng nén nếu là folder)</label>
                    <input type="file" class="form-control" placeholder="File đáp án (đường dẫn)..." name="answers">
                    <p class="error"><?php echo errorData('answer', $errors) ?></p>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Thêm mới</button>
    </form>
</div>