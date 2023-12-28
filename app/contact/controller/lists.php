<?php

require_once 'contact/model/contact.php';

if (isGet()) {
    $body = getBody();
    $filter = '';
    if (!empty($body['keyword'])) {
        $keyword = trim($body['keyword']);
        $filter = " WHERE (fullname LIKE '%$keyword%' OR email LIKE '%$keyword%' OR phone LIKE '%$keyword%' OR content LIKE '%$keyword%') ";
    }
}

$data = [
    'contact' => getAllContact($filter)
];
view($data);
