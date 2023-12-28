<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
getMsg($msg, $msg_type);
?>
<form action="" method="post">
    <div class="form-group">
        <label for=""><?php echo getOption('introduce_cooperate', 'label') ?></label>
        <textarea name="introduce_cooperate" class="editor"><?php echo getOption('introduce_cooperate') ?></textarea>
        <p></p>
    </div>

    <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
</form>