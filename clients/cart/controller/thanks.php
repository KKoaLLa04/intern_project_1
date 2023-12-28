<?php

if (!empty($_GET['code'])) {
    $data['code'] = $_GET['code'];
}

viewClient($data);
