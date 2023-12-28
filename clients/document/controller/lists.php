<?php

require_once './clients/document/model/document.php';

$data = [
    'category' => getAllDocCate(),
    'document' => getAllDoc(),
];
viewClient($data);
