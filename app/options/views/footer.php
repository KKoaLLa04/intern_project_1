<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <h4>Thiết lập footer</h4>
    <?php getMsg($msg, $msg_type) ?>
    <hr>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <b style="color: red;">Cột 1</b>
                <div class="form-group">
                    <label for=""><?php echo getOption('footer_1_1', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_1_1', 'label') ?>..." name="footer_1_1"
                        value="<?php echo getOption('footer_1_1') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_2_1', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_2_1', 'label') ?>..." name="footer_2_1"
                        value="<?php echo getOption('footer_2_1') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_3_1', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_3_1', 'label') ?>..." name="footer_3_1"
                        value="<?php echo getOption('footer_3_1') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_4_1', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_4_1', 'label') ?>..." name="footer_4_1"
                        value="<?php echo getOption('footer_4_1') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_5_1', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_5_1', 'label') ?>..." name="footer_5_1"
                        value="<?php echo getOption('footer_5_1') ?>">
                    <p></p>
                </div>
            </div>

            <div class="col-6">
                <b style="color: red;">Cột 2</b>
                <div class="form-group">
                    <label for=""><?php echo getOption('footer_1_2', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_1_2', 'label') ?>..." name="footer_1_2"
                        value="<?php echo getOption('footer_1_2') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_2_2', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_2_2', 'label') ?>..." name="footer_2_2"
                        value="<?php echo getOption('footer_2_2') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_3_2', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_3_2', 'label') ?>..." name="footer_3_2"
                        value="<?php echo getOption('footer_3_2') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_4_2', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_4_2', 'label') ?>..." name="footer_4_2"
                        value="<?php echo getOption('footer_4_2') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_5_2', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_5_2', 'label') ?>..." name="footer_5_2"
                        value="<?php echo getOption('footer_5_2') ?>">
                    <p></p>
                </div>
            </div>

            <hr>
            <div class="col-12">
                <b style="color: red;">Cột 3</b>
                <div class="form-group">
                    <label for=""><?php echo getOption('footer_1_3', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_1_3', 'label') ?>..." name="footer_1_3"
                        value="<?php echo getOption('footer_1_3') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_2_3', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_2_3', 'label') ?>..." name="footer_2_3"
                        value="<?php echo getOption('footer_2_3') ?>">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for=""><?php echo getOption('footer_3_3', 'label') ?></label>
                    <input type="text" class="form-control"
                        placeholder="<?php echo getOption('footer_3_3', 'label') ?>..." name="footer_3_3"
                        value="<?php echo getOption('footer_3_3') ?>">
                    <p></p>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
    </form>
</div>