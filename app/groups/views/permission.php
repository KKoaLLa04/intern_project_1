<?php
$item = $data['group_detail'];
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionJson = $item['permission'];
$permissionArr = json_decode($permissionJson, true);
?>
<div class="container-fluid">
    <a href="?module=groups&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Phân quyền - <b><?php echo $item['name'] ?></b></h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">

        <table class="table table-bordered permission_obj">
            <thead>
                <tr>
                    <th width="20%">Module</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data['blocks'])) :
                    foreach ($data['blocks'] as $key => $item) :
                        $actions = $item['actions'];
                        $actionsArr = json_decode($actions, true);
                ?>
                <tr>
                    <td><strong><?php echo $item['title'] ?></strong></td>

                    <td>
                        <div class="row">
                            <?php if (!empty($actionsArr)) :
                                        foreach ($actionsArr as $roleKey => $roleValue) : ?>
                            <div class="col">
                                <input type="checkbox"
                                    name="permission[<?php echo $item['name'] ?>][<?php echo $roleKey ?>]"
                                    value="<?php echo $roleValue ?>" id="<?php echo $item['name'] . '_' . $roleKey ?>"
                                    <?php echo (!empty($permissionArr[$item['name']][$roleKey]) && $permissionArr[$item['name']][$roleKey] == $roleValue) ? 'checked' : false ?> />
                                <label
                                    for="<?php echo $item['name'] . '_' . $roleKey ?>"><?php echo $roleValue ?></label>
                            </div>
                            <?php endforeach;
                                    endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach;
                endif ?>
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Đồng ý</button>
    </form>
</div>