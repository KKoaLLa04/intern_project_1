<?php

if (isPost()) {
    $getFields = getBody();

    $count = 0;
    foreach ($getFields as $key => $value) {
        $dataUpdate = [
            'opt_value' => $value,
        ];

        echo '<pre>';
        print_r($dataUpdate);
        echo '</pre>';

        $condition = "opt_key='$key'";

        $updateStatus = update('options', $dataUpdate, $condition);

        $count++;
    }

    if ($count > 0) {
        setFlashData('msg', 'Cập nhật ' . $count . ' bản ghi thành công');
        setFlashData('msg_type', 'success');
    } else {
        setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
        setFlashData('msg_type', 'danger');
    }

    redirect('?module=options&action=introduce&child=5');
}

require_once './introduce/views/cooperate.php';