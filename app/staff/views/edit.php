<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}
$errors = getFlashData('errors');
$old = getFlashData('old');
$staffDetail = $data['staff'];
if (empty($old) && !empty($staffDetail)) {
    $old = $staffDetail;
}
?>
<div class="container-fluid">
    <a href="?module=staff&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Cập nhật thông tin cộng tác viên - <b><?php echo $staffDetail['fullname'] ?></b></h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên cộng tác viên</label>
                    <input type="text" class="form-control" placeholder="Tên cộng tác viên..." name="fullname" value="<?php echo oldData('fullname', $old) ?>">
                    <p class="error"><?php echo errorData('fullname', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" placeholder="Số điện thoại..." name="phone" value="<?php echo oldData('phone', $old) ?>">
                    <p class="error"><?php echo errorData('phone', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Mật khẩu (không nhập nếu không đổi)</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu..." name="password">
                    <p class="error"><?php echo errorData('password', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <select name="status" class="form-control">
                        <option value="0" <?php echo (oldData('status', $old) == 0) ? 'selected' : false ?>>Chưa kích hoạt
                        </option>
                        <option value="1" <?php echo (oldData('status', $old) == 1) ? 'selected' : false ?>>Đã kích hoạt
                        </option>
                    </select>
                    <p class="error"><?php echo errorData('status', $errors) ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Email cộng tác viên</label>
                    <input type="text" class="form-control" placeholder="Email cộng tác viên..." name="email" value="<?php echo oldData('email', $old) ?>">
                    <p class="error"><?php echo errorData('email', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Chức vụ</label>
                    <select name="group_id" class="form-control">
                        <option value="0">---Phân quyền cộng tác viên---</option>
                        <?php if (!empty($data['groups'])) :
                            foreach ($data['groups'] as $key => $item) : ?>
                                <option value="<?php echo $item['id'] ?>" <?php echo (oldData('group_id', $old) == $item['id']) ? 'selected' : false ?>>
                                    <?php echo $item['name'] ?></option>
                        <?php endforeach;
                        endif ?>
                    </select>
                    <p class="error"><?php echo errorData('group_id', $errors) ?></p>
                </div>

                <div class="form-group">
                    <label for="">Xác nhận mật khẩu (không nhập nếu không đổi)</label>
                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu..." name="confirm_password">
                    <p class="error"><?php echo errorData('confirm_password', $errors) ?></p>
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button class="btn btn-primary" type="submit">Đồng ý</button>
    </form>
</div>