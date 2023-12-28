<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$testDetail = getFlashData('test_detail');
$questionArr = json_decode($testDetail['question'], true);
$choiceArr = json_decode($testDetail['choice'], true);
$answerArr = json_decode($testDetail['answer'], true);
?>
<p class="py-3">Trang chủ > thi online</p>

<?php getMsg($msg, $msg_type) ?>
<h4>Bài thi online: <b><?php echo $data['test_detail']['title'] ?></b></h4>

<div class="row">
    <div class="col-12">
        <form action="" method="post">
            <?php if (!empty($questionArr)) :
                foreach ($questionArr as $key => $item) : ?>
                    <h5 class="d-flex">Câu hỏi <?php echo $key + 1 ?>: <span class="px-1"></span>
                        <?php echo html_entity_decode($questionArr[$key]) ?>
                    </h5>
                    <p class="background_white"><input type="checkbox" value="1" name="result[<?php echo $key ?>][]"> A:
                        <?php echo ($key == 0) ? $choiceArr[$key] : $choiceArr[$key * 4] ?></p>
                    <p class="background_white"><input type="checkbox" value="2" name="result[<?php echo $key ?>][]"> B:
                        <?php echo ($key == 0) ? $choiceArr[$key + 2] : $choiceArr[($key * 4) + 2] ?></p>
                    <p class="background_white"><input type="checkbox" value="3" name="result[<?php echo $key ?>][]"> C:
                        <?php echo ($key == 0) ? $choiceArr[$key + 1] : $choiceArr[($key * 4) + 1] ?></p>
                    <p class="background_white"><input type="checkbox" value="4" name="result[<?php echo $key ?>][]"> D:
                        <?php echo ($key == 0) ? $choiceArr[$key + 3] : $choiceArr[($key * 4) + 3] ?></p>
                    <p class="py-3"></p>
            <?php endforeach;
            endif; ?>
            <button type="submit" class="btn btn-primary">Nộp bài</button>
        </form>
    </div>

</div>