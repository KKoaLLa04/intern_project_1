<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
if (!empty($data['test_detail'])) {
    $testDetail = $data['test_detail'];
}
if (empty($old) && !empty($testDetail)) {
    $old = $testDetail;
}
?>
<div class="container-fluid">
    <a href="?module=test&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Cập nhật bài thi</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="title" class="form-control" placeholder="Tiêu đề bài thi online...." value="<?php echo oldData('title', $old) ?>">
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
                                <option value="<?php echo $item['id'] ?>" <?php echo (!empty($old) && ($old['test_id'] == $item['id'])) ? 'selected' : false ?>>
                                    <?php echo $item['name'] ?></option>
                        <?php endforeach;
                        endif; ?>
                    </select>
                    <p class="error"><?php echo errorData('test_id', $errors) ?></p>
                </div>
            </div>
        </div>

        <div class="question_item">
            <?php if (!empty($testDetail['question'])) :
                $questionArr = json_decode($testDetail['question'], true);
                $choiceArr = json_decode($testDetail['choice'], true);
                $answerArr = json_decode($testDetail['answer'], true);
                foreach ($questionArr as $key => $item) :
                    $count = 0;
                    if ($key > 0) {
                        $count = 4;
                    }
            ?>
                    <div class="col-12 my-5 question_text">
                        <div class="row">
                            <div class="col-11">
                                <div class="form-group">
                                    <label for="">Nội dung câu hỏi </label>
                                    <textarea name="question[content][]" class="editor form-control" placeholder="Nội dung câu hỏi..."><?php echo html_entity_decode($questionArr[$key]) ?></textarea>
                                    <p></p>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Đáp Án 1</label>
                                                <input type="text" class="form-control" name="question[choice][]" placeholder="Đáp án 1..." value="<?php echo ($key == 0) ? $choiceArr[$key] : $choiceArr[$key * 4] ?>">
                                                <p></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Đáp Án 3</label>
                                                <input type="text" class="form-control" name="question[choice][]" placeholder="Đáp án 3..." value="<?php echo ($key == 0) ? $choiceArr[$key + 1] : $choiceArr[($key * 4) + 1] ?>">
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Đáp Án 2</label>
                                                <input type="text" class="form-control" name="question[choice][]" placeholder="Đáp án 2..." value="<?php echo ($key == 0) ? $choiceArr[$key + 2] : $choiceArr[($key * 4) + 2] ?>">
                                                <p></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Đáp Án 4</label>
                                                <input type="text" class="form-control" name="question[choice][]" placeholder="Đáp án 4..." value="<?php echo ($key == 0) ? $choiceArr[$key + 3] : $choiceArr[($key * 4) + 3] ?>">
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Đáp án chính xác</label>
                                                <input type="text" placeholder="Đáp án chính xác..." class="form-control" name="question[answer][]" value="<?php echo $answerArr[$key] ?>">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <p><a class="remove btn btn-danger w-100"><i class="fa fa-times"></i></a></p>
                            </div>
                        </div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>

        <button class="btn btn-warning btn-sm add_question">Thêm câu hỏi</button>
        <hr>
        <p><button class="btn btn-primary" type="submit">Cập nhật</button></p>
    </form>
    <hr>
</div>