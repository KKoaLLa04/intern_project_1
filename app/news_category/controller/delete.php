<?php

if(!empty($_GET['id'])&& $_GET['id'] != ''){
    $id=$_GET['id'];

    $condition ='id = '.$id;

    $deleteStatus =delete('news_category',$condition);

    if(!empty($deleteStatus)){
        setFlashData('msg','Xóa danh mục sách thành công!');
        setFlashData('msg_type','success');
    }else{
        setFlashData('msg','Lỗi dữ liệu, vui lòng thử lại sau!');
        setFlashData('msg_type','danger');
    }
}else{
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn');
    setFlashData('msg_type', 'danger');
}
redirect('?module=news_category&action=lists');