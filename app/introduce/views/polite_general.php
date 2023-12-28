<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
getMsg($msg, $msg_type);
?>
<form action="" method="post">
    <div class="form-group">
        <label for=""><?php echo getOption('introduce_polite_general', 'label') ?></label>
        <textarea name="introduce_polite_general"
            class="editor"><?php echo getOption('introduce_polite_general') ?></textarea>
        <p></p>
    </div>

    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>