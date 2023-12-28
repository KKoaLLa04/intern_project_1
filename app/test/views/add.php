<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=test&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Thêm mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="title" class="form-control" placeholder="Tiêu đề bài thi online...."
                        value="<?php echo oldData('title', $old) ?>">
                    <p class="error"><?php echo errorData('title', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="test_id" class="form-control">
                        <option value="0">---Chọn danh mục đề thi---</option>
                        <?php if (!empty($data['test_cate'])) :
                            foreach ($data['test_cate'] as $key => $item) : ?>
                        <option value="<?php echo $item['id'] ?>"
                            <?php echo (!empty($old) && ($old['test_id'] == $item['id'])) ? 'selected' : false ?>>
                            <?php echo $item['name'] ?></option>
                        <?php endforeach;
                        endif; ?>
                    </select>
                    <p class="error"><?php echo errorData('test_id', $errors) ?></p>
                </div>
            </div>
        </div>

        <div class="question_item">

        </div>

        <button class="btn btn-warning btn-sm add_question">Thêm câu hỏi</button>
        <hr>
        <p><button class="btn btn-primary" type="submit">Thêm mới</button></p>
    </form>
    <hr>
</div>