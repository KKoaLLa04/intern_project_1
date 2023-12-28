<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=staff&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Thêm cộng tác viên mới</h4>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên cộng tác viên</label>
                    <input type="text" class="form-control" placeholder="Tên cộng tác viên..." name="fullname"
                        value="<?= oldData('fullname', $old) ?>">
                    <p class="error"><?= errorData('fullname', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" placeholder="Số điện thoại..." name="phone"
                        value="<?= oldData('phone', $old) ?>">
                    <p class="error"><?= errorData('phone', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu..." name="password"
                        value="<?= oldData('password', $old) ?>">
                    <p class="error"><?= errorData('password', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Email cộng tác viên</label>
                    <input type="text" class="form-control" placeholder="Email cộng tác viên..." name="email"
                        value="<?= oldData('email', $old) ?>">
                    <p class="error"><?= errorData('email', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Chức vụ</label>
                    <select name="group_id" class="form-control">
                        <option value="0">---Phân quyền cộng tác viên---</option>
                        <?php if (!empty($data['groups'])) :
                            foreach ($data['groups'] as $key => $item) : ?>
                        <option value="<?php echo $item['id'] ?>"
                            <?php echo (!empty(oldData('group_id', $old)) && oldData('group_id', $old)==$item['id'])?'selected':false ?>>
                            <?php echo $item['name'] ?></option>
                        <?php endforeach;
                        endif ?>
                    </select>
                    <p class="error"><?= errorData('group_id', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Xác nhận mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu..."
                        name="confirm_password" value="<?= oldData('confirm_password', $old) ?>">
                    <p class="error"><?= errorData('confirm_password', $errors) ?></p>
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Đồng ý</button>
    </form>
</div>