<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
getMsg($msg, $msg_type);
?>
<form action="" method="post">
    <div class="form-group">
        <label for=""><?php echo getOption('introduce_polite_security', 'label') ?></label>
        <textarea name="introduce_polite_security"
            class="editor"><?php echo getOption('introduce_polite_security') ?></textarea>
        <p></p>
    </div>

    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>