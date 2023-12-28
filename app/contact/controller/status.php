<?php

require_once './contact/model/contact.php';


if(!empty($_GET['id'])){
    $id = $_GET['id'];

    $contactDetail = getContactDetail($id);

    $condition = "id=$id";
    if($contactDetail['status'] == null || $contactDetail['status'] == 0){
        $dataUpdate = [
            'status' => 1,
            'update_at' => date('Y-m-d H:i:s'),
        ];

        update('contact', $dataUpdate,$condition);
    }else if($contactDetail['status'] == 1){
        $dataUpdate = [
            'status' => 0,
            'update_at' => date('Y-m-d H:i:s'),
        ];

        update('contact', $dataUpdate,$condition);
    }
}else{
    setFlashData('msg','Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type','danger');
}

redirect('?module=contact&action=lists');