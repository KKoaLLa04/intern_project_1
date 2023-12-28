<?php

require_once './clients/book/model/book.php';

$data = [
    'book_category' => getAllBookCate(),
    'book' => getAllBook(),
];

viewClient($data);
