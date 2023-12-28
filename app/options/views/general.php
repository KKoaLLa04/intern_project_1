<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <h4>Thiết lập chung</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for=""><?php echo getOption('general_hotline', 'label') ?></label>
            <input type="text" class="form-control" placeholder="<?php echo getOption('general_hotline', 'label') ?>..."
                name="general_hotline" value="<?php echo getOption('general_hotline') ?>">
            <p></p>
        </div>

        <div class="form-group">
            <label for=""><?php echo getOption('general_button_login', 'label') ?></label>
            <input type="text" class="form-control"
                placeholder="<?php echo getOption('general_button_login', 'label') ?><" name="general_button_login"
                value="<?php echo getOption('general_button_login') ?>">
            <p></p>
        </div>

        <div class="form-group">
            <label for=""><?php echo getOption('general_button_register', 'label') ?></label>
            <input type="text" class="form-control"
                placeholder="<?php echo getOption('general_button_register', 'label') ?>..."
                name="general_button_register" value="<?php echo getOption('general_button_register') ?>">
            <p></p>
        </div>

        <div class="form-group">
            <label for=""><?php echo getOption('general_facebook', 'label') ?></label>
            <input type="text" class="form-control"
                placeholder="<?php echo getOption('general_facebook', 'label') ?>..." name="general_facebook"
                value="<?php echo getOption('general_facebook') ?>">
            <p></p>
        </div>

        <div class="form-group">
            <label for=""><?php echo getOption('general_youtube', 'label') ?></label>
            <input type="text" class="form-control" placeholder="<?php echo getOption('general_youtube', 'label') ?>..."
                name="general_youtube" value="<?php echo getOption('general_youtube') ?>">
            <p></p>
        </div>

        <div class="form-group">
            <label for=""><?php echo getOption('general_zalo', 'label') ?></label>
            <input type="text" class="form-control" placeholder="<?php echo getOption('general_zalo', 'label') ?>..."
                name="general_zalo" value="<?php echo getOption('general_zalo') ?>">
            <p></p>
        </div>

        <div class="form-group">
            <label for=""><?php echo getOption('general_logo', 'label') ?></label>
            <input type="text" class="form-control" placeholder="<?php echo getOption('general_logo', 'label') ?>..."
                name="general_logo" value="<?php echo getOption('general_logo') ?>">
            <p></p>
        </div>

        <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
    </form>
</div>